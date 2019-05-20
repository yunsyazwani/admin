$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

     $(".nav-item a").click(function() {
      $(".nav-item a").removeClass("active");
      $(this).addClass("active");
   });

});