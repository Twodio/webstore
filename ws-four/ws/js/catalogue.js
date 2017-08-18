$('.adicionar-btn').on('click', function(e) {
   e.preventDefault();
   var $this = $(this); 
   var $input = $this.closest('li').find('input');
   alert($input.val());
});
