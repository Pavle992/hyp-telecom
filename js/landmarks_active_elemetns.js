$(document).ready(function(){

  //landmarks page acrtive elments change
      $("#template_landmarks").on('click','#nav-who-we-are',function(){

        $(".active:first").removeClass('active');
        $("#nav-who-we-are").addClass("active");

      });

      $("#nav-group").on('click',function(){

        $(".active:first").removeClass('active');
        $("#nav-group").addClass("active");

      });
      
      $("#nav-contact").on('click',function(){

        $(".active:first").removeClass('active');
        $("#nav-contact").addClass("active");

      });

});