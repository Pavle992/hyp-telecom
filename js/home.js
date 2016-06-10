$(document).ready(function() {


    function loadHomepageComponents(homepage) { // clone the empty boilerplate node and fill it with content
       // $('.jumbotron').css('background-image', 'url(' + homepage.header_image_path + ')');
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
                      +'<img src="../img/home/home2.png" alt="Telecom"/>'
                      +  '<div class="carousel-caption">'
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
                      +'<img src="../img/home/home2.png" alt="Telecom"/>'
                      +  '<div class="carousel-caption">'
                      +      '<p>'+data.description+'</p>'
                      +  '</div>'
                      +'</div>'         
                );
            }

        // return null;
        });
    };

    // load content from the server
    // loadContent( url,  rootJsonElement, $containerNode,  function that creates a node to be appended to the $container )
    if (typeof loadContent !== 'undefined') {
        loadContent(
            '../php/get_homepage_components.php',
            'homepage', $('#homepage-container'), loadHomepageComponents);
    }




   
});