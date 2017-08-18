/**
 * original ideia and script
 * https://designmodo.com/demo/shopping-cart/
 */
$('.like-btn').on('click', function() {
   $(this).toggleClass('is-active');
});
$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value > 1) {
        value = value - 1;
    }
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value < 10) {
        value = value + 1;
    } else {
        value =10;
    }
    $input.val(value);
});
