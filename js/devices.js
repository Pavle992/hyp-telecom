$(document).ready(function(){


  function fill_device_information(device){

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
  };

  function create_sl_service_container(sl_service){

    var sl_service_container_item = ('<div class="col-sm-6 col-md-3">'
      +'<div class="thumbnail"><img class="sl-service-img img-responsive" src="..'+sl_service.image_path+'" alt="'+sl_service.name+'">'
      +'<div class="sl-service-name caption"><h4>'+sl_service.name+'</h4>'
      +'<p><a href="#" class="btn btn-primary" role="button">See Details</a></p></div></div></div>');
    return sl_service_container_item;

  };

function create_assistance_item(assistance){

    var assitance_item = ('<button type="button" class="list-group-item">'+assistance.name+'</button>');
    return assitance_item;

  };
  



function fill_sl_service_information(sl_services){

  var rootSlServicesContainer = $('#slservices_tab').find('.slservices-container');
  if (sl_services.length>0) {
    for (var j in sl_services) {
      rootSlServicesContainer.append(create_sl_service_container(sl_services[j]));
    }
  }
};

function fill_assistance_information(assistances){

  var rootAssitancesContainer = $('#assistance_tab').find('.assistances-container');
  if (assistances.length>0) {
    for (var j in assistances) {
      rootAssitancesContainer.append(create_assistance_item(assistances[j]));
    }
  }
};


  var params = (window.location.search.replace("?", "")).split("=");
  $.ajax({
    url:'../php/get_device_by_id.php',
    method:'GET',
    contentType: "application/json; charset=UTF-8",
    data: {'id':params[1]},
    dataType:'json',
    success:function(data){
          // console.log(data);
          if (data.hasOwnProperty('success') && data.success === 0){
                $('.page-wrap .container-msg').append(
                    $('<p>Invalid request</p>').addClass('error-msg'));
            }
            else{
              var device = data['device'][0];
              fill_device_information(device);
              fill_sl_service_information(device.sl_services);
              fill_assistance_information(device.assistances);
              $('#device-name-breadcrumb').html(device.name);              
            }          
          },
    error: function(requestObject, error, errorThrown) {
          console.log("Error: "+errorThrown);
              $('.page-wrap .container').append(
                $('<p>Please check your internet connection</p>').addClass('error-msg'));
          }
    });

});
