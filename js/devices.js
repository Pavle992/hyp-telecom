$(document).ready(function(){




  var params = (window.location.search.replace("?", "")).split("=");
  console.log(params);
  $.ajax({
    url:'http://localhost:8000/hyp-telecom/php/get_device_by_id.php',
    method:'GET',
    data: {'id':params[1]},
    dataType:'json',
    success:function(data){
          console.log(data);
          if (data.hasOwnProperty('success') && data.success === 0){
                $('.page-wrap .container-msg').append(
                    $('<p>Invalid request</p>').addClass('error-msg'));
            }
            else{
              var device = data['device'][0];

              var rootDeviceElement = $('#device-container');
              rootDeviceElement.find('.device-name').html(device.name);
              rootDeviceElement.find('.device-description-text p').html(device.description);
              rootDeviceElement.find('.device-image-id').attr("src",".."+device.image_path).attr("alt",device.name);
              rootDeviceElement.find('.device-price-text').html(device.price);
              rootDeviceElement.find('.device-cpu').html(device.cpu);
              rootDeviceElement.find('.device-os').html(device.os);
              rootDeviceElement.find('.device-dispsize').html(device.display_size);
              rootDeviceElement.find('.device-disptype').html(device.display_type);
              rootDeviceElement.find('.device-resolution').html(device.resolution);
              rootDeviceElement.find('.device-sim').html(device.sim);
              rootDeviceElement.find('.device-dimensions').html(device.dimensions);
              rootDeviceElement.find('.device-weight').html(device.weight);
            }
          

          
          },
          error: function(requestObject, error, errorThrown) {
            console.log(requestObject);
            console.log("Error: "+errorThrown);
              $('.page-wrap .container').append(
                  $('<p>Please check your internet connection</p>').addClass('error-msg'));
          }
    });

});
