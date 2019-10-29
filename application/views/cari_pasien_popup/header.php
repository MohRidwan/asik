<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
	<link href="<?php echo base_url() ?>assets/melon/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="<?php echo base_url() ?>assets/melon/assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/melon/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/melon/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/melon/assets/css/icons.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/melon/assets/css/fontawesome/font-awesome.min.css">
    
    <style type="text/css">
	  .form-group{
		  margin-bottom:2px;
	  }
	  .modal-lg{
		  width:70%
	  }
	  .change-message {
		  display: none;
	  }
	</style>

	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	-->
	<!--=== JavaScript ===-->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/respond/respond.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!--Date Range Picker-->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/daterangepicker/daterangepicker.js"></script>
	
    <!-- Forms -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/autosize/jquery.autosize.min.js"></script>
    
    <!-- Form Validation -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/validation/additional-methods.min.js"></script>
    
    <!-- Noty -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/noty/themes/default.js"></script>
    
    <!--Print Area-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/printarea/jquery.PrintArea.js"></script>
    
    <!--Barcode-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/barcode/jquery-barcode.min.js"></script>
    
     <!-- Bootbox -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/bootbox/bootbox.js"></script>
    
    <!-- DataTables -->    
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/datatables/tabletools/TableTools.min.js"></script> <!-- optional -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/datatables/colvis/ColVis.min.js"></script> <!-- optional -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/datatables/DT_bootstrap.js"></script>
    
	<!-- App -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/plugins.form-components.js"></script>
  
	<script type="text/javascript">
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
		
		//body loading halaman
		$(window).load(function(){
		   $('#loading-overlay').fadeOut('fast');

		   $('#loading').fadeOut('fast');
		});
		//body loading halaman
		
		<!--header waktu-->
		$('.waktu').flipcountdown({
			size:"xs"
		});
		<!--header waktu-->
		
		<!--header tanggal -->
		var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
		var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
		var date = new Date();
		var day = date.getDate();
		var month = date.getMonth();
		var thisDay = date.getDay(),
			thisDay = myDays[thisDay];
		var yy = date.getYear();
		var year = (yy < 1000) ? yy + 1900 : yy;
		$('.tanggal').html(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
		$('.tgl_antrian_pasien').val(day +'-'+ (month+1) +'-'+ year);
		<!--header tanggal-->
		
		//menu current
		$('#nav li').click(function() {
		   $('#nav li').removeClass('current');
		   $(this).addClass('current')
		});
		//menu current	
		
		$('.content2').slimScroll({
			height:'80vh',
			alwaysVisible: false
		});
		
		//content datatables cari pasien
		var table = $('#table_cari_pasien').DataTable({ 
			"processing": true, 
			"serverSide": true, 
			"order": [],            
			"ajax": {
				"url": "<?php echo site_url('cari_pasien_crud/get_data_pasien')?>",
				"type": "POST",
				"complete": function(json){
					//console.log(JSON.stringify(json));
					$('#table_cari_pasien').find('a').tooltip();
					$('.dataTables_filter input').focus();
					cari_pasien_info();
				}
			},
			"language": {
				"search": "",
				"processing": "<h4>Searching... <i class=\"fa fa-search\"></i></h4>"
			},
			"columnDefs": [
				{"orderable": false,"targets": [ 5 ]}
			]
		});
		 
		 $('.dataTables_filter input').unbind();
		 $('.dataTables_filter input').bind('keydown', function(e) {
			 if(e.keyCode == 13 || e.keyCode == 9) {
			  if(this.value.length >= 2){
			  	table.search(this.value).draw(); 
			  }
			  //console.log(e.keyCode); 
			 }	 
		 });
		 
		function clearform($form) {	
			$form.validate().resetForm();
			$form.find('select option:selected').prop("selected", false);
			$form.find('.tags2').each(function() { //tagsinput
				$(this).importTags('');
			});
			$form.add('.form-group').find('label[generated="true"]').html('');
			$form.add('.form-group').removeClass('has-error has-success');
		}
		 
		 function cari_pasien_info(){ 
			$('.informasi_pasien').click(function(){				
				var medrec = $(this).data('medrec');
				if(medrec){
					//console.log(medrec);
					get_pasien(medrec)
				}
			});
		}
		
		function get_pasien(medrec){
			clearform($('#validate-1'));
			$.ajax({
					url : "<?php echo base_url()?>/cari_pasien_crud/informasi_pasien/",
					type: "POST",
					data :{medrec:medrec},
					dataType:'json',
					beforeSend: function(){
					 $('#loading-overlay').fadeIn('fast');
					 $('#loading').fadeIn('fast');
					 },
					success: function(json){
						console.log(JSON.stringify(json));
						if(json.pasien){																
							$.each(json.pasien, function(i, obj){													
								switch(i){
									case 'medrec':
												$('span.medrec').html(obj);
												$('.pendaftaran_poliklinik').attr('href','<?php echo base_url(); ?>pendaftaran/poliklinik/'+obj);
												$('.pendaftaran_laboratorium').attr('href','<?php echo base_url(); ?>pendaftaran/laboratorium/'+obj);
												$('.pendaftaran_radiologi').attr('href','<?php echo base_url(); ?>pendaftaran/radiologi/'+obj);						
												
												//kartu pasien
												$('.barcode_medrec').barcode(obj, "code128");
												//kartu pasien*
												
												//edit pasien
												$("input[name='"+i+"']").val(obj);
												//edit pasien*
												break;
									case 'tanggal_lahir':
														var now = new Date();
														var yearNow = now.getFullYear();
														var monthNow = now.getMonth()+1;
														var dateNow = now.getDate();
														//console.log(yearNow+' '+monthNow+' '+dateNow);
														
														var ui = new Date(obj);
														var yearDob = ui.getFullYear();
														var monthDob = ui.getMonth()+1;
														var dateDob = ui.getDate();
														obj = dateDob+'-'+monthDob+'-'+yearDob;
														//console.log(obj);
														
														var yearAge = yearNow - yearDob;
													
														if (monthNow >= monthDob)
															var monthAge = monthNow - monthDob;
														else {
															yearAge--;
															var monthAge = 12 + monthNow -monthDob;
														}
														
														if (dateNow >= dateDob)
															var dateAge = dateNow - dateDob;
														else {
															monthAge--;
															var dateAge = 31 + dateNow - dateDob;
																if (monthAge < 0) {
																	monthAge = 11;
																	yearAge--;
																}
														}
														//console.log(yearAge+' '+monthAge+' '+dateAge);
														$('span.tanggal_lahir').html(obj);
														$('span.u_tahun').html(yearAge); //umur sekarang
														$('span.u_bulan').html(monthAge); //umur sekarang
														
														//edit pasien
														$('input[name="'+i+'"]').val(obj);
														$('input[name="u_tahun"]').val(yearAge);
														$('input[name="u_bulan"]').val(monthAge);
														
														if((yearAge >= 17) && (yearAge <= 75)){
															//console.log('cukup umur ='+yearAge);
															$('.pj').find('input:text, select, textarea').removeClass('required');
														}else{
															//console.log('wajib pj ='+yearAge);
															$('.pj').find('input:text, select, textarea').addClass('required');
														}
														//edit pasien*
														
														break;
									case 'jenis_kelamin':
														if(obj == 1){
															$('span.jenis_kelamin').html('<i class=\"fa fa-mars\"></i>');																	
														}else{
															$('span.jenis_kelamin').html('<i class=\"fa fa-venus\"></i>');
														}
														//edit pasien
														$('select[name="'+i+'"] > option[value="'+obj+'"]').prop("selected",true);
														//edit pasien*																
														break;								   
									default: $('span.'+i+'').html(obj);
											 //edit pasien
											 $("input[name='"+i+"']").val(obj);
											 $('select[name="'+i+'"] > option[value="'+obj+'"]').prop("selected",true);
											 $('textarea[name="'+i+'"]').val(obj);
											 //edit pasien*
								}
								
							})
						}
						
						if(json.pasien_alergi){
							var alergi ='';
							var alergi_edit='';
							var a = json.pasien_alergi.length;
							var n = 1;
							$.each(json.pasien_alergi, function(i, obj){
								//console.log(obj.nama);
								alergi += '<div class=\"row\"><div class=\"col-md-12\">'+obj.nama+'</div></div>';
								alergi_edit += obj.nama;
								if(n < a){
									alergi_edit += ',';
								}
								n++;
							});
							$('.pasien_alergi').html(alergi);
							//console.log(alergi_edit);	
							
							//edit pasien
							$('input[name="alergi"]').importTags(alergi_edit);							
							//edit pasien*
						}
						
						if(json.pasien_operasi){
							var operasi ='';
							var operasi_edit='';
							var o = json.pasien_operasi.length;
							var n = 1;
							$.each(json.pasien_operasi, function(i, obj){
								operasi += '<div class=\"row\"><div class=\"col-md-12\">'+obj.nama+'</div></div>';
								operasi_edit += obj.nama;
								if(n < o){
									operasi_edit += ',';
								}
								n++;
							});
							$('.pasien_operasi').html(operasi);
							//edit pasien
							$('input[name="operasi"]').importTags(operasi_edit);							
							//edit pasien*							
						}
						
						if(json.pasien_penyakit){
							var penyakit ='';
							var penyakit_edit='';
							var p = json.pasien_penyakit.length;
							var n = 1;
							$.each(json.pasien_penyakit, function(i, obj){
								penyakit += '<div class=\"row\"><div class=\"col-md-12\">'+obj.nama+'</div></div>';
								
								penyakit_edit += obj.nama;
								if(n < p){
									penyakit_edit += ',';
								}
								n++;
							});
							$('.pasien_penyakit').html(penyakit);
							//edit pasien
							$('input[name="penyakit"]').importTags(penyakit_edit);							
							//edit pasien*																	
						}
													
						var table2 = $('#table_informasi_pasien').DataTable();
						if(json.penatajasa){
							//console.log(JSON.stringify(json.penatajasa));																							
							table2.clear();
							table2.rows.add(json.penatajasa);
							table2.order([[0, 'desc']]);
							table2.draw();
						}else{
							table2.clear();
							table2.draw();
						}
						
						if(json.kunjungan){
							$('span.kunjungan').html(json.kunjungan);
						}else{
							$('span.kunjungan').html(0);
						}
							
						$('#myModal1').modal('show');
					},
					complete: function(){
						$('#loading-overlay').fadeOut('fast');
						$('#loading').fadeOut('fast');
					}
			});
		}
		 
		
		//content datatables cari pasien
		
		
		//modal1
		$('.bs-tooltip-modal').tooltip();
		
		
		$('.cetak_data_pasien').click(function(){
			$("#myModal1").find('.modal-content').printArea();
		});
		
		$('.cetak_kartu_pasien').click(function(){
			$(".kartu_pasien").printArea();
		});
		
		$('.hapus_data_pasien').click(function(){
			$('#myModal1').modal('toggle');		
			bootbox.confirm({
				message: "<strong>Apakah anda yakin akan menghapus data pasien ini ?</strong> &#x1F60E;",
				buttons: {
					confirm: {
						label: '<i class="fa fa-check"></i> Yes',
						className: 'btn-success'
					},
					cancel: {
						label: '<i class="fa fa-times"></i> No',
						className: 'btn-danger'
					}
				},
				callback: function (confirmed) {
					if(confirmed){						
						var medrec = $('span.medrec').html();
						$.ajax({
							url : "<?php echo base_url()?>/cari_pasien_crud/hapus_data_pasien/",
							type: "POST",
							data :{medrec:medrec},
							dataType:'json',
							success: function(json){
								console.log(JSON.stringify(json));							
								if(json.hapus > 0){//affected row
									bootbox.alert("Hapus Data Pasien Berhasil &#x1F60A;");
									//table.clear();
									table.draw();
								}								
							},
							error: function (jqXHR, textStatus, errorThrown)
							{
							  alert('Error Hapus Data Pasien');
							}
						});
					}else{
						$('#myModal1').modal('toggle');	
					}
				}
			});
		});
		//modal 1*
		
		
		//modal2
		//edit pasien
		$('.edit_data_pasien').click(function(){
			$('#myModal1').modal('toggle');
			$('#myModal2').modal('toggle');
			$('.submit_edit').prop('disabled',true);
		})
		
		$('.cancel_edit').click(function(){
			$('#myModal2').modal('toggle');
			var medrec = $('input:hidden[name="medrec"]').val();
			get_pasien(medrec)
		})
		
		//content form tgl lahir
		$("input[name='tanggal_lahir']").datepicker({	
			yearRange: '-100:+0',
			changeYear: true,
			changeMonth: true,
			showOtherMonths:true,
			autoSize: true,
			dateFormat: 'dd-mm-yy',
			maxDate: 0,
			onSelect: function(value, ui) {
				var now = new Date();
				var yearNow = now.getFullYear();
				var monthNow = now.getMonth()+1;
				var dateNow = now.getDate();
				console.log(yearNow+' '+monthNow+' '+dateNow);
				
				var yearDob = ui.selectedYear;
				var monthDob = ui.selectedMonth+1;
				var dateDob = ui.selectedDay;
				console.log(yearDob+' '+monthDob+' '+dateDob);
				
				var yearAge = yearNow - yearDob;

				if (monthNow >= monthDob)
					var monthAge = monthNow - monthDob;
				else {
					yearAge--;
					var monthAge = 12 + monthNow -monthDob;
				}
				
				if (dateNow >= dateDob)
					var dateAge = dateNow - dateDob;
				else {
					monthAge--;
					var dateAge = 31 + dateNow - dateDob;
						if (monthAge < 0) {
							monthAge = 11;
							yearAge--;
						}
				}
				console.log(yearAge+' '+monthAge+' '+dateAge);
				
				$("input[name='u_tahun']").val(yearAge).valid();
				$("input[name='u_bulan']").val(monthAge).valid();
				$("input[name='tanggal_lahir']").valid();
				
				if((yearAge >= 17) && (yearAge <= 75)){
					//console.log('cukup umur ='+yearAge);
					$('.pj').find('input:text, select, textarea').removeClass('required');
				}else{
					//console.log('wajib pj ='+yearAge);
					$('.pj').find('input:text, select, textarea').addClass('required');
				}
				$('.submit_edit').prop('disabled',false);
				$("[name='jenis_kelamin']").focus();				
				
			}
		});
		//content form tgl lahir
		
		//content form checkbox_alamat_pj
		$("input[name='checkbox_alamat_pj']").click(function(){
			if ($(this).is(':checked')){ //jika di centang
				if ($("[name='alamat']").valid() == true ){ //jika validasi true
			    	var alamat = $("[name='alamat']").val();
			    	$("[name='alamat_pj']").val(alamat); //alamat pasien = alamat penanggung jawab
			    }else{
				    $(this).prop('checked', false); //unchecked
					$("[name='alamat']").focus();
			    }
				$("[name='alamat_pj']").valid();				
			}else{
				$("[name='alamat_pj']").val('').valid();
			}
		});
		//content form checkbox_alamat_pj
		
		//content form checkbox_no_kontak_pj 
		$("input[name='checkbox_no_kontak_pj']").click(function(){
			if ($(this).is(':checked')){ //jika di centang
				if ($("[name='no_tlp']").valid() == true && $("[name='no_ponsel']").valid()){ //jika validasi true
			    	var tlp = $("[name='no_tlp']").val();
					var ponsel = $("[name='no_ponsel']").val();
			    	$("[name='no_tlp_pj']").val(tlp);
					$("[name='no_ponsel_pj']").val(ponsel);
			    }else{
				    $(this).prop('checked', false); //unchecked
					$("[name='no_tlp']").focus();
			    }
				$("[name='no_tlp_pj']").valid();
				$("[name='no_ponsel_pj']").valid();				
			}else{
				$("[name='no_tlp_pj']").val('').valid();
				$("[name='no_ponsel_pj']").val('').valid();
			}
		});
		//content form checkbox_no_kontak_pj
		
		/*$('#myModal2').on('hidden.bs.modal', function () {
		  $('#myModal1').modal('toggle');
		})*/
		
		$.validator.setDefaults({
				submitHandler: function(form) {
				var data = $(form).serialize();
				console.log(data);
				$('#myModal2').modal('toggle');
				$.ajax({
					url : "<?php echo base_url()?>cari_pasien_crud/edit_data_pasien",
					type: "POST",
					data :data,
					dataType:'json',
					beforeSend: function(){
					 $('#loading-overlay').fadeIn('fast');
					 $('#loading').fadeIn('fast');
					 },
					success: function(json){
						console.log(JSON.stringify(json));
						if(json.pesan){		
							bootbox.alert({
							  closeButton: false,	
							  size: "small",
							  message: json.pesan,
							  callback: function () {									
									if(json.medrec){
										table.draw();
										get_pasien(json.medrec)
									};
							  }
							})							
						}
					},
					complete: function(){
						$('#loading-overlay').fadeOut('fast');
						$('#loading').fadeOut('fast');
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
					  alert('Error Edit Data Pasien');
					}
				});
				}
		});
		//edit pasien*
		
		//modal 2
		$('.tags2').tagsInput({
			width: '100%',
			height: 'auto',
			defaultText:' ',
			onAddTag:function(itemValue){
				var medrec = $('input:hidden[name="medrec"]').val();
				var table = $(this).attr('name');
				var data = 'tags='+itemValue+'&medrec='+medrec+'&table=pasien_'+ table+'&aksi=create';
				console.log(data);
				$.ajax({
					url : "<?php echo base_url()?>cari_pasien_crud/edit_pasien_informasi",
					type: "POST",
					data :data,
					success: function(result){
						console.log(result);
					}
				});
			},
			onRemoveTag:function(itemValue){
				var medrec = $('input:hidden[name="medrec"]').val();
				var table = $(this).attr('name');
				var data = 'tags='+itemValue+'&medrec='+medrec+'&table=pasien_'+ table+'&aksi=delete';
				$.ajax({
					url : "<?php echo base_url()?>cari_pasien_crud/edit_pasien_informasi",
					type: "POST",
					data :data,
					success: function(result){
						console.log(result);
					}
				});			
				console.log(data);
			},
			onChange:function(){
			}
		});
		
		
		$('#validate-1').change(function(e){
			//console.log(e);
			$('.submit_edit').prop('disabled',false);
		});
	});
	</script>
    
    <!-- Demo JS -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/melon/assets/js/demo/form_validation.js"></script>
    
    <!--waktu-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/melon/plugins/flipcountdown/jquery.flipcountdown.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/melon/plugins/flipcountdown/jquery.flipcountdown.css" />
</head>

<body>
	<div id="loading-overlay"></div>
    <div id="loading">
    	<span>LOADING</span>
    </div>
	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="fa fa-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url() ?>assets/melon/assets/img/logo-kp-70px.png" alt="logo" />
			</a>
			<!-- /logo -->
            
            <a href="#" class="toggle-sidebar2">
            	<span style="font-size:20px;"><strong><?php echo ucwords($klinik->nama); ?></strong></span>
            	<span style="font-size:12px;"><?php echo ucwords($klinik->alamat); ?></span>
            	<span style="font-size:12px;">Tlp. <?php echo ucwords($klinik->telepon); ?></span>
			</a>         

			<!-- /Sidebar Toggler -->
            <a href="#" class="toggle-sidebar4">
            <span class="waktu"></span>
            <span class="tanggal" style="font-size:11px;"></span>
			</a>     

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
                <a href="#" class="toggle-sidebar3">
                    <span style="font-size:16px;"><strong><?php echo ucwords($user->nama); ?></strong></span>
                    <span style="font-size:13px;"><strong><?php echo strtoupper($layan_ruang->nama); ?></strong></span>
                    <span style="font-size:13px;"><strong><?php echo strtoupper($shift_waktu->nama); ?></strong></span>
                </a>
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" class="img-circle" src="<?php echo base_url() ?>assets/melon/assets/img/foto/<?php echo $user->foto; ?>" width="48px" />
                        <span class="badge">7</span>
						<!--<i class="fa fa-caret-down" aria-hidden="true"></i>-->
					</a>
					<ul class="dropdown-menu">
						<li><a href="pages_user_profile.html"><i class="fa fa-weixin" aria-hidden="true"></i> Chat</a></li>
						<li><a href="pages_user_profile.html"><i class="fa fa-info-circle" aria-hidden="true"></i> My Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url() ?>/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->
	</header> <!-- /.header -->