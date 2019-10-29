<div id="content"><!--content-->
            <div class="container">
            	<div class="row">
                	<div class="col-md-8 col-sm-8 col-xs-8 col-lg-8" style="padding:5px;">
                    	<div class="widget box" style="margin-bottom:0px;">
							<div class="widget-header">
                                <h4><a href="pages_user_profile.html"><i class="fa fa-address-card"></i></a> DAFTAR LAYANAN KLINIK </h4>
                                <div class="col-md-2 col-sm-2 col-xs-2 toolbar" style="padding:2px 4px 0 0;z-index:100;">
                                   
                                </div>                            
                            </div>
							
							<div class="widget-content">
							<form method="post" id="validate-1" class="form-horizontal">
										<div class="row">
											<div class="col-md-12">
												<!-- Tabs-->
												<div class="tabbable tabbable-custom">
													<ul class="nav nav-tabs">
														<li class="active"><a href="#tab_1_1" data-toggle="tab">Daftar Onsite</a></li>
														<li><a href="#tab_1_2" data-toggle="tab">Konfirmasi Reservasi </a></li>
														<li><a href="#tab_1_3" data-toggle="tab">Reservasi</a></li>
													</ul>
													<div class="tab-content">
														<div class="tab-pane active" id="tab_1_1">
															
															<div class="row">
																
																
																	<div class="row">																
																		<div class="form-group">
																				<label class="col-md-2 control-label">No Medrec:</label>
																			<div class="row">
																				<div class="col-md-9">
																					<div class="row">
																						<div class="col-md-3">
																						<input type="text" name="medrec" placeholder="medrec" class="form-control medrec required input-sm" style="background-color:white;"readonly value="<?php echo ucwords($pasien->medrec); ?>">
																						</div>
																						
																					</div>
																				</div>	
																			</div>
																		</div>																																
																	</div>																					
																
																	<div class="row">
																		<div class="form-group">
																				<label class="col-md-2 control-label">Nama Pasien:</label>
																			<div class="row">
																				<div class="col-md-9">
																					<div class="row">
																						<div class="col-md-5">
																						  <input type="text" name="nama_pasien" placeholder="Nama Pasien" class="form-control nama required input-sm" style="background-color:white;"readonly value="<?php echo ucwords($pasien->nama); ?>">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="form-group">
																				<label class="col-md-2 control-label">Tanggal Lahir:</label>
																			<div class="row">
																				<div class="col-md-9">
																					<div class="row">
																						<div class="col-md-3">
																						  <input type="text" name="tanggal_lahir" placeholder="dd-mm-yyyy" class="form-control required align-center input-sm" style="background-color:white;"readonly value="<?php echo ucwords($pasien->tanggal_lahir); ?>">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																																
																
															
																				<div class="row">
																					<div class="form-group ">
																						<label class="col-md-2 control-label">Tanggal:</label>
																						<div class="row">
																						<div class="col-md-3">
																																										
																							<!--<input type="text" name="tanggal_lahir" placeholder="dd-mm-yyyy" class="form-control required input-sm align-center" style="background-color:white;" readonly> -->
																							<div class="input-group">
																								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																								<input type="text" class="tgl_antrian_pasien form-control align-center">
																								<span class="input-group-addon"><i class="fa fa-caret-down"></i></span>
																							</div>
																						
																						</div>
																						</div>
																					</div>	
																				</div>	
																<div class="row" >
																
																	<input type="hidden" name="layan_ruang">
																	<div class="form-group">   	 	
																		
																		<label class="col-md-2 control-label">Jenis Layanan :</label>      	
																		<div class="col-md-3">	
																			<select id="id_layan_ruang" name="layan_ruang"  class="form-control" data-rule-required="true" data-msg-required="Please select your room" style="padding: 0 0 0 27px;">      
																				<!--<option value="3">Klinik Umum 1</option>
																					<option value="4">Klinik Umum 2</option>
																					<option value="5"> UGD 1</option>
																					<option value="6"> UGD 2</option>
																					<option value="7"> Klinik Gigi 1</option>
																					<option value="8"> Klinik Gigi 2</option>
																					<option value="9"> Klinik SpOG </option>
																					<option value="10"> Klinik Kebidanan </option>
																					<option value="11"> Laboratorium </option>
																					<option value="12"> Radiologi </option>-->
																			</select>
																			
																		</div>       
																	</div>
																</div>
																
																<div class="row" >
																	<div class="form-group" >   	
																		  <label class="col-md-2 control-label">Waktu Layanan :</label>
																		  <div class="col-md-3">
																			  <select id="id_waktu_layan" name="waktu_layan" class="form-control waktu_layan" data-rule-required="true" data-msg-required="Please select your shift" style="padding: 0 0 0 27px;">         
																			  </select>
																		  </div>
																	</div>    
																</div>	
															<!--
																				<select name="waktu_layan" id="waktu_layan" class="form-control" data-rule-required="true" data-msg-required="Please select your waktu_layan" style="padding: 0 0 0 27px;">
																																																			
																								<!--<option value="08:10:00">08:00:00 </option>	
																								<option value="00:24:00">08:06:00 </option>	
																								<option value="00:36:00">08:12:00 </option>	
																								<option value="00:48:00">08:18:00 </option>
																								<option value="01:00:00">08:24:00 </option>
																								<option value="01:12:00">08:30:00 </option>
																								<option value="01:24:00">08:36:00 </option>
																								<option value="01:36:00">08:42:00 </option>
																								<option value="01:48:00">08:48:00 </option>
																								<option value="02:00:00">08:54:00 </option>
																								<option value="02:12:00">09:00:00 </option>
																								<option value="02:24:00">09:06:00 </option>
																								<option value="02:36:00">09:12:00 </option>
																								<option value="02:48:00">09:18:00 </option>
																								<option value="03:00:00">09:24:00 </option>
																								<option value="03:12:00">09:30:00 </option>
																								<option value="03:24:00">09:36:00 </option>
																								<option value="03:36:00">09:42:00 </option>
																								<option value="03:48:00">09:48:00 </option>
																								<option value="04:00:00">09:54:00 </option>
																								<option value="04:12:00">10:00:00 </option>
																								<option value="04:24:00">10:06:00 </option>
																								<option value="04:36:00">10:12:00 </option>
																								<option value="04:48:00">10:18:00 </option>
																								<option value="04:48:00">10:24:00 </option>
																								<option value="04:48:00">10:30:00 </option>
																								<option value="04:48:00">10:36:00 </option>
																								<option value="04:48:00">10:42:00 </option>
																								<option value="04:48:00">10:48:00 </option>
																								<option value="04:48:00">10:54:00 </option>
																								<option value="04:48:00">11:00:00 </option>
																								<option value="04:48:00">11:06:00 </option>
																								<option value="04:48:00">11:12:00 </option>
																								<option value="04:48:00">11:18:00 </option>
																								<option value="04:48:00">11:24:00 </option>
																								<option value="04:48:00">11:30:00 </option>
																								<option value="04:48:00">11:36:00 </option>
																								<option value="04:48:00">11:42:00 </option>
																								<option value="04:48:00">11:48:00 </option>
																								<option value="04:48:00">11:54:00 </option>
																								<option value="04:48:00">12:00:00 </option>
																								<option value="04:48:00">12:06:00 </option>
																								<option value="04:48:00">12:12:00 </option>
																								<option value="04:48:00">12:18:00 </option>
																								<option value="04:48:00">12:24:00 </option>
																								<option value="04:48:00">12:30:00 </option>
																								<option value="04:48:00">12:36:00 </option>
																								<option value="04:48:00">12:42:00 </option>
																								<option value="04:48:00">12:48:00 </option>
																								<option value="04:48:00">12:54:00 </option>
																								<option value="04:48:00">13:00:00 </option>
																								<option value="04:48:00">13:06:00 </option>
																								<option value="04:48:00">13:12:00 </option>
																								<option value="04:48:00">13:18:00 </option>
																								<option value="04:48:00">13:24:00 </option>
																								<option value="04:48:00">13:30:00 </option>
																								<option value="04:48:00">13:36:00 </option>
																								<option value="04:48:00">13:42:00 </option>
																								<option value="04:48:00">13:48:00 </option>
																								<option value="04:48:00">13:54:00 </option>
																								<option value="04:48:00">14:00:00 </option>
																								<option value="04:48:00">14:06:00 </option>
																								<option value="04:48:00">14:12:00 </option>
																								<option value="04:48:00">14:18:00 </option>
																								<option value="04:48:00">14:24:00 </option>
																								<option value="04:48:00">14:30:00 </option>
																								<option value="04:48:00">14:36:00 </option>
																								<option value="04:48:00">14:42:00 </option>
																								<option value="04:48:00">14:48:00 </option>
																								<option value="04:48:00">14:54:00 </option>
																								<option value="04:48:00">15:00:00 </option>
																								<option value="04:48:00">15:06:00 </option>
																								<option value="04:48:00">15:12:00 </option>
																								<option value="04:48:00">15:18:00 </option>
																								<option value="04:48:00">15:24:00 </option>
																								<option value="04:48:00">15:30:00 </option>
																								<option value="04:48:00">15:36:00 </option>
																								<option value="04:48:00">15:42:00 </option>
																								<option value="04:48:00">15:48:00 </option>
																								<option value="04:48:00">15:54:00 </option>
																								<option value="04:48:00">16:00:00 </option>
																								<option value="04:48:00">16:06:00 </option>
																								<option value="04:48:00">16:12:00 </option>
																								<option value="04:48:00">16:18:00 </option>
																								<option value="04:48:00">16:24:00 </option>
																								<option value="04:48:00">16:30:00 </option>
																								<option value="04:48:00">16:36:00 </option>
																								<option value="04:48:00">16:42:00 </option>
																								<option value="04:48:00">16:48:00 </option>
																								<option value="04:48:00">16:54:00 </option>
																								<option value="04:48:00">17:00:00 </option>
																								<option value="04:48:00">17:06:00 </option>
																								<option value="04:48:00">17:12:00 </option>
																								<option value="04:48:00">17:18:00 </option>
																								<option value="04:48:00">17:24:00 </option>
																								<option value="04:48:00">17:30:00 </option>
																								<option value="04:48:00">17:36:00 </option>
																								<option value="04:48:00">17:42:00 </option>
																								<option value="04:48:00">17:48:00 </option>
																								<option value="04:48:00">17:54:00 </option>
																								<option value="04:48:00">18:00:00 </option>
																								<option value="04:48:00">18:06:00 </option>
																								<option value="04:48:00">18:12:00 </option>
																								<option value="04:48:00">18:18:00 </option>
																								<option value="04:48:00">18:24:00 </option>
																								<option value="04:48:00">18:30:00 </option>
																								<option value="04:48:00">18:36:00 </option>
																								<option value="04:48:00">18:42:00 </option>
																								<option value="04:48:00">18:48:00 </option>
																								<option value="04:48:00">18:54:00 </option>
																								<option value="04:48:00">19:00:00 </option>
																								--
																				</select>
																			 -->
															<div class="row">
																		<div class="form-group">																			
																			<label class="col-md-2 ja control-label">Jenis Pasien :</label>
																			<div class="row">
																			<div class="col-md-3">
																				<select name="nama_asuransi" id="ja"class="form-control required select-sm">
																					
																					<option value="1">Pribadi/umum</option>
																					<option value="2">BPJS</option>
																					<option value="3"> Inhealth </option>
																					<option value="4"> AdMedika </option>
																					<option value="5"> Asuransi 3 </option>
																				</select>																				
																			</div>
																			</div>
																		</div>																			
															</div>
															
															<div class="row">
																	<div class="form-group" id="no_ja" >
																			<label class="col-md-2 control-label">Nomor Asuransi:</label>
																		<div class="row">
																			<div class="col-md-8">
																				<div class="row">
																					<div class="col-md-3" id="no_ja">
																						 <input type="text" name="no_ja"placeholder="kartu asuransi" class="form-control required input-sm">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
															</div>
															<div class="row">
																<div class="form-actions" style="padding:5px;">
																	<div class="row">
																		<div class="col-md-offset-1 col-md-10">																		
																			<input type="reset" value="Batal &#9746;" class="btn btn-danger btn-xs pull-left">
																			<input type="submit" value="Simpan &#9745;" class="btn btn-success btn-xs pull-right">																					
																		</div> 
																	</div>
																</div>																		
															</div>
														</div>
														</div>	
														
														<div class="tab-pane" id="tab_1_2">
															<!-- <p>I'm in Section 2.</p> -->
															<div class="form-group">
																<label class="col-md-2 control-label">Kode Reservasi:</label>
																<div class="col-md-10">
																	<div class="row">
																		<div class="col-md-4">
																			<input type="text" name="kode_reservasi" placeholder="kode reservasi" class="form-control">
																		</div>
																	</div>	
																</div>
															</div>	
															
															<div class="row">
																<div class="col-md-12">
																<h5><strong>Data Pemesan</strong></h5> 
																	<div class="row">																
																		<div class="form-group">
																				<label class="col-md-2 control-label">Nama Pasien:</label>
																			<div class="row">
																				<div class="col-md-9">
																					<div class="row">
																						<div class="col-md-4">
																						<input type="text" name="nama_depan" placeholder="Nama" class="form-control required input-sm">
																						</div>
																						<div class="col-md-5">
																						<input type="text" name="nama_depan" placeholder="Nama Belakang" class="form-control required input-sm">
																						</div>
																						<div class="col-md-2">
																							<select name="sapaan" class="form-control align-center required select-sm" >
																								<option value=""></option>
																								<option value="by">By</option>
																								<option value="an">An</option>
																								<option value="tn">Tn</option>
																								<option value="nn">Nn</option>
																							</select>
																						</div>
																					</div>
																				</div>	
																			</div>
																		</div>																																
																		
																		<!--<div class="col-md-2">
																			<div class="form-group">
																				
																			</div>
																		</div>-->
																	</div>
																	<div class="row">
																		<div class="form-group">
																				<label class="col-md-2 control-label">Nomor Kontak:</label>
																			<div class="row">
																				<div class="col-md-9">
																					<div class="row">
																						<div class="col-md-3">
																						  <input type="text" name="no_kontak" placeholder="kontak" class="form-control required input-sm">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>	
																	
																		<div class="form-actions" style="padding:10px;">
																		<div class="row">
																			<div class="col-md-12">																		
																				<input type="submit" value="Konfirmasi &#9745;" class="btn btn-info btn-xs pull-right">																																								
																			</div> 
																		</div>
																		</div>
																	
																</div>
															</div>	
															<div class="row">
																<div class="col-md-12">
																	<h5><strong>Detail Reservasi</strong></h5>
																
																	<div class="widget-content">
																						<table class="table table-striped table-bordered table-hover datatable align-center">
																						<thead>                                    	
																							<tr>
																								<th>Antrian</th>
																								<th>Rekam Medis</th>
																								<th>Nama Pasien</th>
																								<th>Jenis Asuransi</th>
																								<th>Layanan</th>
																								<th>Jadwal</th>
																								<th>Keterangan</th>
																							</tr>
																						</thead>
																						<tbody>
																							
																						</tbody>
																					</table>
																					</div>
																			</div>		
															</div>
															
														</div>
														<div class="tab-pane" id="tab_1_3">
															<!--<p>I'm in Section 3.</p> -->
															<div class="col-md-12">
																<h5><strong>Data Pemesan</strong></h5> 
																	<div class="row">																
																			<div class="form-group">
																				<label class="col-md-2 control-label">Nama Pasien:</label>
																				<div class="row">
																				<div class="col-md-9">
																					<div class="row">
																						<div class="col-md-4">
																						<input type="text" name="nama_depan" placeholder="Nama" class="form-control required input-sm">
																						</div>
																						<div class="col-md-5">
																						<input type="text" name="nama_belakang" placeholder="Nama Belakang" class="form-control required input-sm">
																						</div>
																						
																						<div class="col-md-2">
																							<select name="sapaan" class="form-control align-center required select-sm" >
																								<option value=""></option>
																								<option value="by">By</option>
																								<option value="an">An</option>
																								<option value="tn">Tn</option>
																								<option value="nn">Nn</option>
																							</select>
																						</div>
																						
																					</div>
																				</div>
																				</div>
																			</div>																																
																		
																	</div>
																	<div class="row">
																		<div class="form-group">
																				<label class="col-md-2 control-label">Nomor Kontak:</label>
																				<div class="row">
																				<div class="col-md-9">
																					<div class="row">
																						<div class="col-md-3">
																						  <input type="text" name="no_kontak" placeholder="kontak" class="form-control required input-sm">
																						</div>
																					</div>
																				</div>
																				</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="form-group">
																			
																			<label class="col-md-2 control-label">Waktu Reservasi:</label>
																			<div class="col-md-8">
																				<div class="row">
																					<div class="col-md-5">
																						<div class="input-group">
																							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																							<input type="text" class="tgl_antrian_pasien form-control align-center">
																							<span class="input-group-addon"><i class="fa fa-caret-down"></i></span>
																						</div>
																					
																					</div>
																						
																						
																				</div>	
																				</div>
																		</div>
																	</div>
																	<div class="row layan_ruang" >
																
																	<div class="form-group">   	 	
																			<label class="col-md-2 control-label">Jenis Layanan :</label>      	
																			<div class="col-md-3">	
																				<select name="layan_ruang" id="id_layan_ruang" class="form-control" data-rule-required="true" data-msg-required="Please select your room" style="padding: 0 0 0 27px;">      
																					<!--<option value="">pilih layan</option>
																						<?php
																							foreach ($layan as $data) { 
																						?>
																							<option value="<?php echo $data['id']?>"><?php echo $data['nama']?></option>
																							<?php } ?>
																					<option value="3">Klinik Umum 1</option>
																						<option value="4">Klinik Umum 2</option>
																						<option value="5"> UGD 1</option>
																						<option value="6"> UGD 2</option>
																						<option value="7"> Klinik Gigi 1</option>
																						<option value="8"> Klinik Gigi 2</option>
																						<option value="9"> Klinik SpOG </option>
																						<option value="10"> Klinik Kebidanan </option>
																						<option value="11"> Laboratorium </option>
																						<option value="12"> Radiologi </option>-->
																				</select>
																			</div> 
																			<div class="col-md-2">
																							<select id="waktu_layan" name="waktu" class="form-control align-center required select-sm" >
																								
																							</select>
																					</div>
																			
																		</div>
																	</div>	
																	
																	<div class="row">
																	<div class="form-group">
																			<label class="col-md-2 control-label pull-left"><a href="<?php echo base_url() ?>cari_pasien"> reservasi + </label></a>
																			
																	</div>
																	</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<h5><strong>Data Pasien</strong></h5>
																
																	<div class="widget-content">
																						<table class="table table-striped table-bordered table-hover datatable align-center">
																						<thead>                                    	
																							<tr>
																								<th>Antrian</th>
																								<th>Rekam Medis</th>
																								<th>Nama Pasien</th>
																								<th>Jenis Asuransi</th>
																								<th>Layanan</th>
																								<th>Jadwal</th>
																								<th>Keterangan</th>
																							</tr>
																						</thead>
																						</table>
																						<tbody>
																						
																						</tbody>
																	</div>
																</div>
															</div>	
														</div>
													</div>
												</div>
												<!--END TABS-->
											</div>
										</div>
							</form>			
							</div>
						</div>
                    </div>
                    
                    <div class="col-md-4 content2" style="padding:5px 5px 5px 0;position:fixed;">
                    	<div class="row" style="margin-bottom:2px;">
                        	<div class="col-md-12">
                            	<div id="sidebar2" class="sidebar-fixed2">
								<div id="sidebar-content2">
					
						<!--=== Navigation ===-->
				
								<div class="widget box">
									<div class="widget-header">
										<h4><i class="fa fa-reorder"></i> Kunjungan Hari ini (<span class="blue">+</span>)</h4>
										<div class="toolbar no-padding">
											<div class="btn-group">
												<span class="btn btn-xs widget-collapse"><i class="fa fa-angle-down"></i></span>
											</div>
										</div>
									</div>
									<!--graph-->
									<div class="widget-content">
										<div id="chart_filled_blue" class="chart"></div>
									</div>	<!--/graph-->
									<div class="divider"></div>
									<div class="widget-content">
										<ul class="stats">
										<div class="col-sm-6 col-md-3 hidden-xs">
											<div class="statbox widget box box-shadow">
												<div class="widget-content">
												
													<div class="visual blue">
														<i class="fa fa-user"></i>
													</div>
													<div class="title">Total Antrian Pasien</div>
													<div class="value">239</div>
																								 
												</div>
											</div> <!-- /.smallstat -->
										</div>
										<div class="col-sm-6 col-md-3 hidden-xs">
											<div class="statbox widget box box-shadow">
												<div class="widget-content">
													<div class="visual green">
															<i class="fa fa-user"></i>
														<!--<div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>-->
													</div>
													<div class="title">Antrian Klinik Umum</div>
													<div class="value">205</div>
													
													</div>
											</div> <!-- /.smallstat -->
										</div> <!-- /.col-md-3 -->
										<div class="col-sm-6 col-md-3 hidden-xs">
											<div class="statbox widget box box-shadow">
												<div class="widget-content">
													<div class="visual yellow">
															<i class="fa fa-user"></i>
														<!--<div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>-->
													</div>
													<div class="title">Antrian Klinik Gigi</div>
													<div class="value">20</div>
													
												</div>
											</div> <!-- /.smallstat -->
										</div> <!-- /.col-md-3 -->
										<div class="col-sm-6 col-md-3 hidden-xs">
											<div class="statbox widget box box-shadow">
												<div class="widget-content">
													<div class="visual red">
															<i class="fa fa-user"></i>
														<!--<div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>-->
													</div>
													<div class="title">Antrian Klinik Bidan</div>
													<div class="value">14</div>
													
												</div>
											</div> <!-- /.smallstat -->
										</div> <!-- /.col-md-3 -->
										</ul>
									</div>	
									
								</div>
					
				
							<!-- /Navigation -->
							</div>
							</div>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-6" style="padding-right:1px;">
                            	<div class="widget box" style="margin-bottom:0px;">
                                    <div class="widget-header">
                                        <h4><a href="pages_user_profile.html"><i class="fa fa-pencil pull-right" style="margin-left:78px"></i></a> PARAMEDIS(<span class="blue"></span>)</h4>
                                    </div>
                                    <div class="widget-content">
                                        <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, in, reprehenderit, enim et libero voluptas debitis excepturi doloribus molestias modi sint autem praesentium natus cum rerum est soluta asperiores minima eligendi atque error inventore sed. Voluptatum, explicabo, eaque quibusdam odit est iure magnam vero distinctio molestias necessitatibus earum facilis enim laboriosam rerum ut eum consequatur officiis excepturi veritatis nam voluptatibus sapiente ipsam dolorum beatae porro. Dolor, cumque, voluptate, rerum ipsam nisi molestias vel eaque consequatur labore sunt libero odio laborum ab dolorum voluptates magnam iure ipsa facilis enim tempora! At, ipsa fugiat soluta pariatur odit porro natus facilis perferendis numquam iusto! Commodi, reprehenderit, deserunt, pariatur atque laudantium sint fugiat consequatur eius assumenda ratione minima vero expedita harum unde ut possimus molestiae repellat suscipit consectetur officiis aperiam quae iusto ducimus facere eum doloribus asperiores ea animi numquam am -->
										<form class="form-vertical" action="#">
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">Umum1</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>	
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">Umum2</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">UGD</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">Gigi1</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">Gigi2</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">Perawat</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">Perawat</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">Bidan</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
												<label class="col-md-3 control-label">Bidan</label>
												<!-- <div class="col-md-8 "><input type="text" name="disabled" disabled="disabled" value="disabled" class="form-control" ></div> -->
												<div class="col-md-9"><input type="text" name="regular" disabled="disabled" class="form-control"></div>
												</div>
											</div>
										</form>
									</div>
                                </div>
                            </div>
                        	<div class="col-md-6" style="padding-left:1px;">
                            	<div class="widget box" style="margin-bottom:0px;">
                                    <div class="widget-header ">
                                        <h4><a href="pages_user_profile.html"><i class="fa fa-envelope pull-right" style="margin-left:110px" ></i></a> MEMO </h4>
                                    
									</div>
                                    <div class="widget-content">
                                        <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, in, reprehenderit, enim et libero voluptas debitis excepturi doloribus molestias modi sint autem praesentium natus cum rerum est soluta asperiores minima eligendi atque error inventore sed. Voluptatum, explicabo, eaque quibusdam odit est iure magnam vero distinctio molestias necessitatibus earum facilis enim laboriosam rerum ut eum consequatur officiis excepturi veritatis nam voluptatibus sapiente ipsam dolorum beatae porro. Dolor, cumque, voluptate, rerum ipsam nisi molestias vel eaque consequatur labore sunt libero odio laborum ab dolorum voluptates magnam iure ipsa facilis enim tempora! At, ipsa fugiat soluta pariatur odit porro natus facilis perferendis numquam iusto! Commodi, reprehenderit, deserunt, pariatur atque laudantium sint fugiat consequatur eius assumenda ratione minima vero expedita harum unde ut possimus molestiae repellat suscipit consectetur officiis aperiam quae iusto ducimus facere eum doloribus asperiores ea animi numquam amet vel debitis tempore quia minus quidem explicabo perspiciatis consequuntur blanditiis similique tempora cupiditate impedit magni quo dolore nam odit? Dicta, tenetur, aliquam ea necessitatibus a autem dignissimos dolorum saepe officiis cupiditate maiores distinctio temporibus beatae eius fugiat. Amet, adipisci, cupiditate quas quo incidunt autem dolor 
										<textarea rows="12" class="form-control wysiwyg" name="wysiwyg">
										</textarea> -->
										 <textarea rows="13" id="area4">
												
										 </textarea>
									</div>
										
								</div>
									
                            </div>
								
						</div>
							
                    </div>
                    
                </div>
            </div>        
        </div><!--content-->
                   
    </div><!--container-->
</body>
</html>