$(document).ready(function(){

  $(".active:first").removeClass('active');
  $("#nav-cart").addClass('active');


function create_cart_item(item){

    var cart_item = ('<tr class="cart_item-"'+item.id+'><td class="col col-md-4"><a href="#" class="thumbnail">'+
      '<img class="item-img img-responsive" src="'+item.path+'" alt="'+item.name+'"></a></td>'+
      '<td class="col col-md-4">'+item.name+'</td>'+
      '<td class="col col-md-2">'+item.price+'</td>'+
      '<td class="col col-md-2"><button type="button" id="remove-item-'+item.id+'" class="btn btn-default btn-sm">'+
      '<span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>');
    return cart_item;

  };


function fill_cart_information(items){

  var rootCartContainer = $('.cart-item-container');
  if (items.length>0) {
    for (var j in items) {
      rootCartContainer.append(create_cart_item(items[j]));
      document.getElementById ("remove-item-"+items[j].id).addEventListener ("click", remove_cart_item);
    }
  }
};

function updateTotalPrice(){

};

function remove_cart_item(id){
  console.log(this.id.split("-")[2]);
  var id = this.id.split("-")[2];
  $.ajax({
    url:'../php/remove_from_cart.php',
    method:'GET',
    contentType: "application/json; charset=UTF-8",
    data: {'id':id},
    dataType:'json',
    success:function(data){
          console.log(data.cart_items); 
          $('.device-price-text').html(data.total_price);
          $('.cart-item-container').remove('.cart_item-'+id);    
          },
    error: function(requestObject, error, errorThrown) {
          console.log("Error: "+errorThrown);
              $('.page-wrap .container').append(
                $('<p>Please check your internet connection</p>').addClass('error-msg'));
          }
    });

};

  $.ajax({
    url:'../php/get_cart.php',
    method:'GET',
    contentType: "application/json; charset=UTF-8",
    data: {},
    dataType:'json',
    success:function(data){
          console.log(data.cart_items); 
          $('.device-price-text').html(data.total_price);
          fill_cart_information(data.cart_items);      
          },
    error: function(requestObject, error, errorThrown) {
          console.log("Error: "+errorThrown);
              $('.page-wrap .container').append(
                $('<p>Please check your internet connection</p>').addClass('error-msg'));
          }
    });

});
