<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<!-- cek javascript browser -->
<noscript>	
<meta http-equiv="refresh" content="0;URL=<?php echo base_url() ?>assets/melon/js_disable.php" />
</noscript>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/melon/assets/img/icons/led/src/pill.png" type="image/gif">

<title><?php echo $title." ".ucfirst($this->session->userdata('klinik_kode')); ?></title>

<!--=== CSS ===-->

<!-- Bootstrap -->
<link href="<?php echo base_url() ?>assets/melon/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--jquery-ui-->
<link href="<?php echo base_url() ?>assets/melon/plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />

<!-- Theme -->
<link href="<?php echo base_url() ?>assets/melon/assets/css/main_login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/melon/assets/css/plugins.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/melon/assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/melon/assets/css/icons.css" rel="stylesheet" type="text/css" />

<!-- Login -->
<link href="<?php echo base_url() ?>assets/melon/assets/css/login.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/melon/assets/css/fontawesome/font-awesome.min.css">

<!--=== JavaScript ===-->

<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/libs/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/libs/lodash.compat.min.js"></script>

<!-- Form Validation -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/additional-methods.js"></script>

<!-- Slim Progress Bars -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/nprogress/nprogress.js"></script>

<!-- App -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/login.js"></script>
<script>
$(document).ready(function(){
"use strict";

Login.init(); // Init login JavaScript
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	
//background carousel 
$('.carousel').carousel({interval: 5000});

//clear form
function clearform($form) {
  $form.find('input:text, input:password, input:file, select, textarea').val('');
  $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
  $form.validate().resetForm();
  $form.add('.form-group').find('label[generated="true"]').html('');
}

clearform($('.login-form'));//clear form

//Huruf Besar
function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

$(document).ajaxSend(function(event, jqxhr, settings){
	NProgress.start();
});

$(document).ajaxComplete(function(event, jqxhr, settings){
	NProgress.done();
});

//cek username
$('.username').change(function(){		
  var u = $(this).val();
  if ($(this).valid()){
	clearform($('.login-form'));//clear form
	$.ajax({
		url : "<?php echo base_url()?>/login/cek_user/",
		type: "POST",
		data :{username:u},
		dataType:'json',
		success: function(json)
		{  
		   if(json){
			console.log(JSON.stringify(json));  
			$('.username').val(json[0].username).valid();
			$("select[name='layan_ruang']").find('option').remove().end();
			$("select[name='layan_ruang']").append("<option value=\"\" disabled selected>Room</option>");
			$.each(json, function(i, obj){
				console.log(obj.username+' - '+obj.layan_id+' - '+obj.layan_nama+' - '+obj.layan_ruang_id+' - '+obj.layan_ruang_nama);
				$("select[name='layan_ruang']").append($('<option>').text(toTitleCase(obj.layan_ruang_nama)).attr('value', obj.layan_ruang_id).attr('data-layan_id', obj.layan_id).addClass('grey'));
            });
			$('.shift_room').show();
			$('.login-form .alert-danger').hide();			
		   }else{
			console.log(JSON.stringify(json)); 
			$('.shift_room').hide();
			$('.login-form .alert-danger').html("Couldn't find your Account <b>"+u+"</b>").show().effect("shake","fast").delay(1000).fadeOut("slow");
			$('.username').focus().val('').valid();
		   }
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
		  alert('Error cek user role');
		}
	});			
  } else {
	  $('.shift_room').hide();
  }
});

//get shift_waktu
$("select[name='layan_ruang']").change(function(){
	var layan_id = $(this).find(':selected').attr('data-layan_id');
	var layan_ruang_id = $(this).val();
	$("input[name='layan']").val(layan_id);
	console.log(layan_id+' - '+layan_ruang_id);
	$.ajax({
		url : "<?php echo base_url()?>/login/shift_waktu/",
		type: "POST",
		data :{id:layan_id},
		dataType:'json',
		success: function(json)
		{ 
			console.log(JSON.stringify(json));
			$("select[name='shift_waktu']").find('option').remove().end();
			$("select[name='shift_waktu']").append("<option value=\"\" disabled selected>Shift</option>");
			$.each(json, function(i, obj){
				$("select[name='shift_waktu']").append($('<option>').text(toTitleCase(obj.shift_waktu_nama)).attr('value', obj.shift_waktu_id).addClass('grey'));
            });
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
		  alert('Error cek user role');
		}
	});
});			
				

});
</script>

</head>

<body class="login">

<!--background-->
<div id="myCarousel" class="carousel container slide">
  <div class="carousel-inner">
    <div class="active item one"></div>
    <div class="item two"></div>
    <div class="item three"></div>
    <div class="item four"></div>
  </div>
</div>

<!-- Login Box -->
<div class="box">
<div class="content">
<!-- Logo -->
<div class="logo">
    <img src="<?php echo base_url() ?>assets/melon/assets/img/logo.png" alt="logo" />
    <strong><span style="color:white;">AS</span></strong><span style="color:red;">IK</span>
</div>
<!-- /Logo -->
<!-- Login Formular -->
<form class="form-vertical login-form" action="index.html" method="post">
    <!-- Error Message -->
    <div class="alert fade in alert-danger align-center" style="display:none;border-radius: 7px;">
    </div>
    <!-- Input Fields -->
    <div class="form-group">
      <div class="input-icon">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="username" class="form-control username" placeholder="Username" data-rule-required="true" data-msg-required="Please enter your username."  autofocus/>
      </div>
    </div>
    <div class="form-group">
      <div class="input-icon">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" name="password" class="form-control password" placeholder="Password" data-rule-required="true" data-msg-required="Please enter your password."/>
      </div>
    </div>    
    <div class="row shift_room" style="display:none;">
    	<div class="col-md-12">
        	<input type="hidden" name="layan">
        	<div class="form-group">    	 	
                <div class="input-icon">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>     	
                    <select name="layan_ruang" class="form-control" data-rule-required="true" data-msg-required="Please select your room" style="text-indent:23px;">      
                    </select>
                </div>       
            </div>
            <div class="form-group">   	
              <div class="input-icon">
                  <i class="fa fa-clock-o" aria-hidden="true"></i>
                  <select name="shift_waktu" class="form-control" data-rule-required="true" data-msg-required="Please select your shift" style="text-indent:23px;">         
                  </select>
              </div>
            </div>    
            <div class="form-actions" style="background: rgba(255,255,255,0.00);text-align:center;">            	
                <button type="submit" class="submit btn btn-round">
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- /Input Fields -->        
</form>
<!-- /Login Formular -->
</div> <!-- /.content -->
</div>
<!-- /Login Box -->
</body>
</html>