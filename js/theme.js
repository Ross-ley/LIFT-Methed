function clearContents(element) {
   element.value = '';
 }

function grandparent(element) {
   return element.parent().parent();
}
function myFunction() {
   var x = document.getElementById("fa-search-bar");
   if (x.style.display === "none") {
     x.style.display = "block";
   } else {
     x.style.display = "none";
   }
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
         $(this).css('color', 'black');
         $(this).val('');
         cleared = true;
      }
   });

   // Adds wrapper and span sibling elements for custom checkbox css to target
   $('input[type="checkbox"]').wrap("<div class='checkbox-wrapper'></div>").parent().css('display', 'inline-block').append('<span class="checkmark"></span>');

   // Sets bootstrap grid 'row' for form layout
   $('.wpcf7-form').addClass('row');

// asks if page is on home 
   if ( $('body').hasClass('home') /*|| $('.overlap-nav')*/) {
      $('body').addClass('null');
  } else {
      $('body').addClass('space');
  }
  
  $( ".fa-search" ).click(function() {
   console.log( "Handler for .click() called." );
   //    $('.search-bar').addClass('vis');
   //    $('.fa-search').addClass('-search_pos');   
   })


   // Add bootstrap classes to navbar items
   $('#menu-main-menu').children().each( function () {
      $(this).addClass('nav-item active');
      $(this).first().addClass('nav-link')
   });


   // Darken nav bar on scroll 
   $(document).scroll(function () {
      let $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
   });


});