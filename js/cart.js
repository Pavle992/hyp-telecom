$(document).ready(function(){

  $(".active:first").removeClass('active');
  $("#nav-cart").addClass('active');


function create_cart_item(item){

    var cart_item = ('<button type="button" class="list-group-item"><a href="./assistence_single.php?id='+assistance.id+'">'+assistance.name+'</a></button>');
    return cart_item;

  };


function fill_cart_information(items){

  var rootCartContainer = $('#slservices_tab').find('.slservices-container');
  if (items.length>0) {
    for (var j in items) {
      rootCartContainer.append(create_cart_item(item[j]));
    }
  }
};

function updateTotalPrice(){

};

function removeCartItem(){

};

  $.ajax({
    url:'../php/get_cart.php',
    method:'GET',
    contentType: "application/json; charset=UTF-8",
    data: {},
    dataType:'json',
    success:function(data){
          console.log(data);         
          },
    error: function(requestObject, error, errorThrown) {
          console.log("Error: "+errorThrown);
              $('.page-wrap .container').append(
                $('<p>Please check your internet connection</p>').addClass('error-msg'));
          }
    });

});
