function clearContents(element) {
   element.value = '';
 }

function grandparent(element) {
   return element.parent().parent();
}

jQuery(document).ready(function($) {
   // const main = getElementByTagName("body")[0];
   // let mainClass = main.classList.contains('home');
   // if(mainClass === main.classList.contains('home')) {
   //    document.getElementsByClassName()[]
   // }

   // Clear default text form textarea
   let cleared = false;
   $('.wpcf7-textarea').focus( function () {

      if(!cleared) {
         $(this).val('');
         cleared = true;
      }
   });

   // Adds wrapper and span sibling elements for custom checkbox css to target
   $('input[type="checkbox"]').wrap("<div class='checkbox-wrapper'></div>").parent().css('display', 'inline-block').append('<span class="checkmark"></span>');

   // Sets bootstrap grid 'row' for form layout
   $('.wpcf7-form').addClass('row');
});


