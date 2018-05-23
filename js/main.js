// Requires jQuery


// add to cart ====================================================================

jQuery(document).ready(function($){
  var cartWrapper = $('.cd-cart-container');
  //product id - you don't need a counter in your real project but you can use your real product id
  var productId = 0;

  if( cartWrapper.length > 0 ) {
    //store jQuery objects
    var cartBody = cartWrapper.find('.body')
    var cartList = cartBody.find('ul').eq(0);
    var cartTotal = cartWrapper.find('.checkout').find('span');
    var cartTrigger = cartWrapper.children('.cd-cart-trigger');
    var cartCount = cartTrigger.children('.count')
    var addToCartBtn = $('.cd-add-to-cart');
    var undo = cartWrapper.find('.undo');
    var undoTimeoutId;

    //add product to cart
    addToCartBtn.on('click', function(event){
      event.preventDefault();
      addToCart($(this));
    });

    //open/close cart
    cartTrigger.on('click', function(event){
      event.preventDefault();
      toggleCart();
    });

    //close cart when clicking on the .cd-cart-container::before (bg layer)
    cartWrapper.on('click', function(event){
      if( $(event.target).is($(this)) ) toggleCart(true);
    });

    //delete an item from the cart
    cartList.on('click', '.delete-item', function(event){
      event.preventDefault();
      removeProduct($(event.target).parents('.product'));
    });

    //update item quantity
    cartList.on('change', 'select', function(event){
      quickUpdateCart();
    });

    //reinsert item deleted from the cart
    undo.on('click', 'a', function(event){
      clearInterval(undoTimeoutId);
      event.preventDefault();
      cartList.find('.deleted').addClass('undo-deleted').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
        $(this).off('webkitAnimationEnd oanimationend msAnimationEnd animationend').removeClass('deleted undo-deleted').removeAttr('style');
        quickUpdateCart();
      });
      undo.removeClass('visible');
    });
  }

  function toggleCart(bool) {
    var cartIsOpen = ( typeof bool === 'undefined' ) ? cartWrapper.hasClass('cart-open') : bool;
    
    if( cartIsOpen ) {
      cartWrapper.removeClass('cart-open');
      //reset undo
      clearInterval(undoTimeoutId);
      undo.removeClass('visible');
      cartList.find('.deleted').remove();

      setTimeout(function(){
        cartBody.scrollTop(0);
        //check if cart empty to hide it
        if( Number(cartCount.find('li').eq(0).text()) == 0) cartWrapper.addClass('empty');
      }, 500);
    } else {
      cartWrapper.addClass('cart-open');
    }
  }

  function addToCart(trigger) {
    var cartIsEmpty = cartWrapper.hasClass('empty');
    //update cart product list
    addProduct();
    //update number of items 
    updateCartCount(cartIsEmpty);
    //update total price
    updateCartTotal(trigger.data('price'), true);
    //show cart
    cartWrapper.removeClass('empty');
  }

  function addProduct() {
    //this is just a product placeholder
    //you should insert an item with the selected product info
    //replace productId, productName, price and url with your real product info
    productId = productId + 1;
    var productAdded = $('<li class="product"><div class="product-image"><a href="#0"><img src="img/product-preview.png" alt="placeholder"></a></div><div class="product-details"><h3><a href="#0">Product Name</a></h3><span class="price">$25.99</span><div class="actions"><a href="#0" class="delete-item">Delete</a><div class="quantity"><label for="cd-product-'+ productId +'">Qty</label><span class="select"><select id="cd-product-'+ productId +'" name="quantity"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select></span></div></div></div></li>');
    cartList.prepend(productAdded);
  }

  function removeProduct(product) {
    clearInterval(undoTimeoutId);
    cartList.find('.deleted').remove();
    
    var topPosition = product.offset().top - cartBody.children('ul').offset().top ,
      productQuantity = Number(product.find('.quantity').find('select').val()),
      productTotPrice = Number(product.find('.price').text().replace('$', '')) * productQuantity;
    
    product.css('top', topPosition+'px').addClass('deleted');

    //update items count + total price
    updateCartTotal(productTotPrice, false);
    updateCartCount(true, -productQuantity);
    undo.addClass('visible');

    //wait 8sec before completely remove the item
    undoTimeoutId = setTimeout(function(){
      undo.removeClass('visible');
      cartList.find('.deleted').remove();
    }, 8000);
  }

  function quickUpdateCart() {
    var quantity = 0;
    var price = 0;
    
    cartList.children('li:not(.deleted)').each(function(){
      var singleQuantity = Number($(this).find('select').val());
      quantity = quantity + singleQuantity;
      price = price + singleQuantity*Number($(this).find('.price').text().replace('$', ''));
    });

    cartTotal.text(price.toFixed(2));
    cartCount.find('li').eq(0).text(quantity);
    cartCount.find('li').eq(1).text(quantity+1);
  }

  function updateCartCount(emptyCart, quantity) {
    if( typeof quantity === 'undefined' ) {
      var actual = Number(cartCount.find('li').eq(0).text()) + 1;
      var next = actual + 1;
      
      if( emptyCart ) {
        cartCount.find('li').eq(0).text(actual);
        cartCount.find('li').eq(1).text(next);
      } else {
        cartCount.addClass('update-count');

        setTimeout(function() {
          cartCount.find('li').eq(0).text(actual);
        }, 150);

        setTimeout(function() {
          cartCount.removeClass('update-count');
        }, 200);

        setTimeout(function() {
          cartCount.find('li').eq(1).text(next);
        }, 230);
      }
    } else {
      var actual = Number(cartCount.find('li').eq(0).text()) + quantity;
      var next = actual + 1;
      
      cartCount.find('li').eq(0).text(actual);
      cartCount.find('li').eq(1).text(next);
    }
  }

  function updateCartTotal(price, bool) {
    bool ? cartTotal.text( (Number(cartTotal.text()) + Number(price)).toFixed(2) )  : cartTotal.text( (Number(cartTotal.text()) - Number(price)).toFixed(2) );
  }
});
$("#lightSlider2").lightSlider({
    item: 4,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 10,

    addClass: '',
    mode: "slide",
    useCSS: true,
    cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
    easing: 'linear', //'for jquery animation',////

    speed: 400, //ms'
    auto: false,
    loop: false,
    slideEndAnimation: true,
    pause: 2000,

    keyPress: false,
    controls: true,
    prevHtml: '',
    nextHtml: '',

    rtl:false,
    adaptiveHeight:false,

    vertical:false,
    verticalHeight:500,
    vThumbWidth:100,

    thumbItem:10,
    pager: true,
    gallery: false,
    galleryMargin: 5,
    thumbMargin: 5,
    currentPagerPosition: 'middle',

    enableTouch:true,
    enableDrag:true,
    freeMove:true,
    swipeThreshold: 40,

    responsive : [],

});

// slider ============================

(function() {
    var $slides = document.querySelectorAll('.slide');
    var $controls = document.querySelectorAll('.slider__control');
    var numOfSlides = $slides.length;
    var slidingAT = 1300; // sync this with scss variable
    var slidingBlocked = false;

    [].slice.call($slides).forEach(function($el, index) {
      var i = index + 1;
      $el.classList.add('slide-' + i);
      $el.dataset.slide = i;
    });

    [].slice.call($controls).forEach(function($el) {
      $el.addEventListener('click', controlClickHandler);
    });

    function controlClickHandler() {
      if (slidingBlocked) return;
      slidingBlocked = true;

      var $control = this;
      var isRight = $control.classList.contains('m--right');
      var $curActive = document.querySelector('.slide.s--active');
      var index = +$curActive.dataset.slide;
      (isRight) ? index++ : index--;
      if (index < 1) index = numOfSlides;
      if (index > numOfSlides) index = 1;
      var $newActive = document.querySelector('.slide-' + index);

      $control.classList.add('a--rotation');
      $curActive.classList.remove('s--active', 's--active-prev');
      document.querySelector('.slide.s--prev').classList.remove('s--prev');
      
      $newActive.classList.add('s--active');
      if (!isRight) $newActive.classList.add('s--active-prev');
      

      var prevIndex = index - 1;
      if (prevIndex < 1) prevIndex = numOfSlides;

      document.querySelector('.slide-' + prevIndex).classList.add('s--prev');

      setTimeout(function() {
        $control.classList.remove('a--rotation');
        slidingBlocked = false;
      }, slidingAT*0.75);
    };
  }());


// select box design

(function() {
  $('.select').each(function() {
    $(this).hide();
    makeElement($(this));
  });

  function makeElement(select) {
    var
    $div = $('<div />', {class:'ui-select'}).insertAfter(select),
    $nav = $('<span />').click(function() {
      $(this).parent().toggleClass('open');
    }).appendTo($div),
    $el = $('<ul />').appendTo($div);
    select.find('option').map(function(i) {
      
      var li = $('<li />').append($(this).text());
        li.click(onSelect.bind($div, li, $(this).val(), select, $nav));
      if($(this).attr('selected')) {
        li.addClass('selected');
      }
      var delay = i * 100 + 'ms';
      li.css({
        '-webkit-transition-delay': delay,
            '-moz-transition-delay': delay,
            '-o-transition-delay': delay,
            'transition-delay': delay
      });
      $el.append(li);
    });
    var selected = $el.find('li.selected');
      selected = selected.length ? selected.html() : $el.find('li:first-child').addClass('selected').html();
    $nav.html(selected);
    // addAnimateDelay($el);
  }

  function onSelect(li, value, select, $nav) {
    this.removeClass('open');
    li.addClass('selected').siblings().removeClass('selected');
    select.val(value).trigger('change');
    $nav.html(li.html());
  }
})();


 
$(function(){
    
    $(".input-group-btn .dropdown-menu li a").click(function(){

        var selText = $(this).html();
    
    
       $(this).parents('.input-group-btn').find('.btn-search').html(selText);

   });

});


