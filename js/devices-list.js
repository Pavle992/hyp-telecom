$(document).ready(function(){
    
	getDevices(1,1,1,1);

	$("ul.nav li:nth-child(2)").attr('class', 'active');
	$("ul.nav li:nth-child(1)").removeClass('active');

});

function handleAllClick(cb) {
	if (document.getElementById('filter-all').checked) {
		document.getElementById('filter-phone').checked = false;
		document.getElementById('filter-tablet').checked = false;
		document.getElementById('filter-smart').checked = false;
	}
}

function filterClick(cb) {
	var getPhone = 0;
	var getTablet = 0;
	var getSmart = 0;
	var prom = 0;

	if (document.getElementById('filter-phone').checked || document.getElementById('filter-tablet').checked || document.getElementById('filter-smart').checked) {
		document.getElementById('filter-all').checked = false;
		if (document.getElementById('filter-phone').checked) getPhone = 1;
		if (document.getElementById('filter-tablet').checked) getTablet = 1;
		if (document.getElementById('filter-smart').checked) getSmart = 1;
		
	}
	else {
		getPhone = 1;
		getTablet = 1;
		getSmart = 1;
	}
	
  	if ($('#prom-tab').attr('class') == "active") prom = 1;
    getDevices(getPhone, getTablet, getSmart, prom);
 
}

function handleCatClick() {
	document.getElementById('filter-all').checked = true;
	document.getElementById('filter-phone').checked = false;
	document.getElementById('filter-tablet').checked = false;
	document.getElementById('filter-smart').checked = false;
	getDevices(1,1,1,0);
}

function handlePromClick() {
	document.getElementById('filter-all').checked = true;
	document.getElementById('filter-phone').checked = false;
	document.getElementById('filter-tablet').checked = false;
	document.getElementById('filter-smart').checked = false;
	getDevices(1,1,1,1);
}

function getDevices(phone, tablet, smart, prom) {
	$.ajax({
      url: '../php/device_grid.php',
      type: 'post',
      data: {
      	'phone': phone,
      	'tablet': tablet,
      	'smart': smart,
      	'prom' : prom
  			},
      success: function(data, status) {
      	 var devices = $.parseJSON(data);
      	 var size = devices.length;
      	 var insertString = "";

      	 $.each(devices, function (i, device) {
      	 	 var insertBox = '<div class="col-lg-3 col-lg-offset-1 device-block"><div class="device-image"><img src="' + device.img + '" class="device-image"></div><div class="text-center"><h4>' + device.name + '</h4></div><div class="text-center"><h4>'+device.price + '</h4></div><div class="text-center"><button class="btn btn-primary" type="submit">Details</button></div></div>';
      	 	 if (i == 0)  {
      	 	 	insertString+='<div class="row">';
      	 	 	insertString+=insertBox;
      	 	 }
   			 else if (i % 3 == 0 && i != 0) {
				insertString+='</div>';
				insertString+='<div class="row">';
				insertString+=insertBox;
			 } 
			 else {
			 	insertString+=insertBox;
			 }
		});

      	insertString+='</div>';

      	$('#grid').html(insertString);

      },
      error: function(xhr, desc, err) {
        console.log(xhr);
        console.log("Details: " + desc + "\nError:" + err);
      }
   }); // end ajax call
}