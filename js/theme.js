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

   // Use bootstrap grid to align text and checkbox side by side. From the medium breakpoint flexbox display is changed to block to remove grid.
   $('.contactform-checkbox>span>span>span>label').addClass('row align-items-center justify-content-center d-md-block mx-md-0').children().addClass('col-8 col-md-10');

   // Adds wrapper and span sibling elements for custom checkbox css to target
   $('input[type="checkbox"]').wrap("<div class='checkbox-wrapper col-1'></div>").parent().css('display', 'inline-block').append('<span class="checkmark"></span>');

   // Sets bootstrap grid 'row' for form layout
   $('.wpcf7-form').addClass('row');

// asks if page is on home 
console.log('CHECKING IF body HAS CLASS .home');
   if ( $('body').hasClass('home')) {
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

   // Screen scroll
   $("#find-out-more").click(function() {
      $('html,body').animate({
          scrollTop: $("#find-out-more-destination").offset().top},
          'slow');
  });

  // Add class for left sided image in odd testimonials.
//   var odd = false;
//   $('.testimonals-wrapper').children().each ( function() {
//       if(odd) {

//       }
//       else {
//          odd = true;
//       }

//   });
  const testimonials = document.getElementsByClassName("testimonial-card");
  for (let i = 0; i < testimonials.length; i++) {
   if((i % 2) === 1) {
      testimonials[i].classList.add("testimonial-img-left");
   }
 }

});