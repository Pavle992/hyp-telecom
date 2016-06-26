$(document).ready(function() {


    

    function loadHomepageComponents(homepage) { 

        $('.the_group_info').html(homepage.group_desc);
        $('.the_group_img img').attr('src',homepage.group_path);
        $('.governance_info').html(homepage.gover_desc);
        $('.governance_img img').attr('src',homepage.gover_path);
        $('.bm_info').html(homepage.bm_desc);
        $('.bm_img img').attr('src',homepage.bm_path);
        $('.for_investors_info').html(homepage.fi_desc);
        $('.for_investors_img img').attr('src',homepage.fi_path);
        $('.for_investors_info').html(homepage.fi_desc);
        $('.for_investors_img img').attr('src',homepage.fi_path);
        $('.inovation').html(homepage.inovation);
        $('.testimonials').html(homepage.testimonials);
        $('.projects').html(homepage.projects);

        var newss=homepage.news;

        $("#newsCarousel").carousel("pause").removeData();

        //appending news
        $.each(newss,function(index, data){
            if (index !== 0){
                $('#newsCarousel ol').append(
                        '<li data-target="#newsCarousel" data-slide-to="'+index+'" ></li>'
                    );
                $('#newsCarouselI').append(
                     '<div class="item">'
                      +'<img src="..'+data.image_path+'" alt="Telecom"/>'
                      +  '<div class="carousel-caption '+data.text_position+'">'
                      +      '<p>'+data.description+'</p>'
                      +  '</div>'
                      +'</div>'         
                );
            }
            else{
                $('#newsCarousel ol').append(
                        '<li data-target="#newsCarousel" data-slide-to="'+index+'" class="active"></li>'
                    );
                $('#newsCarouselI').append(
                     '<div class="item active">'
                      +'<img src="..'+data.image_path+'" alt="Telecom"/>'
                      +  '<div class="carousel-caption '+data.text_position+'">'
                      +      '<p>'+data.description+'</p>'
                      +  '</div>'
                      +'</div>'         
                );
            }

         return null;
        });
    };



    //apending template landmarks

    $("#template_landmarks").load("../php/template_landmarks.html");

    // load content from the server
    // loadContent( url,  rootJsonElement, $containerNode,  function that creates a node to be appended to the $container )
    if (typeof loadContent !== 'undefined') {
        loadContent(
            'http://hyp-telecom.ml/php/get_homepage_components.php',
            'homepage', $('#homepage-container'), loadHomepageComponents);
    }


   // contactUs form listeners
      $('#contactUs-form').submit(function(evt) {
          evt.preventDefault();
           $('#contactUs-message').html($('#nameField').val() + ', thank you for contacting us!');  

          if (typeof loadContent !== 'undefined') {

              var name=$("#nameField").val();
              var email=$("#emailField").val();
              var message=$("#MessageField").val();

              //simple AJAX
              $.ajax({
                  url:"http://hyp-telecom.ml/php/contact.php",
                  method: 'GET',
                  contentType: "application/json; charset=UTF-8",
                  data: { 'name':name,
                          'email':email,
                          'message':message
                        },
                  success: function(data){
                    console.log(data);
                                     
                  },
                  error: function(requestObject, error, errorThrown){
                    $('.page-wrap .container').append(
                      $('<p>Please check your internet connection!</p>').addClass('error-msg'));
                  }

                });
          }

          $('#contactUs-form')[0].reset();

      });



      //Adding styles
        $('head').append('<link href="../css/main.css" rel="stylesheet">');
        $('head').append('<link href="../css/main.css" rel="stylesheet">');


        //CAROUSEL RESPONSIVNESS
        $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1250);

        $(window).resize(function() {
          $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1250);
        });

          
   
});