$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

     $(".nav-item a").click(function() {
      // remove classes from all
      $(".nav-item a").removeClass("active");
      // add class to the one we clicked
      $(this).addClass("active");
   });

});