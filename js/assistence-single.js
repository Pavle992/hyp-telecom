$(document).ready(function(){
    
	getAssistence(1,1,1,0);

	$(".active:first").removeClass('active');
  	$("#nav-assistence").addClass('active');

	// $("ul#page-header li:nth-child(4)").attr('class', 'active');
	// $("ul#page-header li:nth-child(1)").removeClass('active');

	
});

function loadDevices(assistenceId) {
	console.log(assistenceId);
// 	$.each(devices, function (i, device) {
//       	 	 var insertBox = '<div class="col-lg-3 col-lg-offset-1 device-block">'
//   							+ '<div class="device-image"><img src="..' + device.img + '" class="device-image"></div><div class="text-center"><h4>' + device.name + '</h4></div><div class="text-center"><h4>'+device.price + '</h4></div><div class="text-center"><form action="../pages/devices.html" methode="get"><input type="hidden" name="id" value=' + device.id +' ><button class="btn btn-primary" type="submit">Details</button></form></div></div>';
//       	 	 if (i == 0)  {
//       	 	 	insertString+='<div class="row">';
//       	 	 	insertString+=insertBox;
//       	 	 }
//    			 else if (i % 3 == 0 && i != 0) {
// 				insertString+='</div>';
// 				insertString+='<div class="row">';
// 				insertString+=insertBox;
// 			 } 
// 			 else {
// 			 	insertString+=insertBox;
// 			 }
// 		});
}


