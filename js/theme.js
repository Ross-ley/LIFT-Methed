function clearContents(element) {
   element.value = '';
 }

jQuery(document).ready(function($) {

   // $('.querytest').css('color', 'red');

   $('.wpcf7-textarea').focus( function () {
      $(this).val('');
   });

   $('input[type="checkbox"]').wrap("<div class='checkbox-wrapper'></div>").parent().css('display', 'inline-block').append('<span class="checkmark"></span>');
});

