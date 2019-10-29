<div id="content"><!--content-->
            <div class="container">
            	<div class="row">
                	<div class="col-md-7 col-sm-7 col-xs-7 col-lg-7" style="padding:5px;">
                    	<div class="widget box" style="margin-bottom:0px;">
							<div class="widget-header">
                                <h4><i class="fa fa-flask"></i> PENDAFTARAN LABORATORIUM</h4>                             
                            </div>
							<div class="widget-content" style="padding:10px 3px 3px 3px;">
                            	<div class="row">
                                	<div class="col-md-7" style="padding-right:1px;">
                                    	<div class="widget box" style="margin-bottom:10px;">
                                        	<div class="widget-content" style="padding:0px 2px 0px 2px;">                                            
                                        	<div style="float:left;margin-top:-10px;margin-left:5px;background:white;"><strong>Identitas Pasien</strong></div>
                                            <br>
                                             <form class="form-horizontal">
                                             <div class="form-group">
                                                <label class="col-md-4 control-label"><span style="font-size:12px;">Nomor Rekam Medis :</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" name="medrec" class="form-control required input-sm" readonly style="background-color:white;" value="<?php echo ucwords($pasien->medrec); ?>">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-4 control-label">Nama Pasien :</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="nama" class="form-control required input-sm" readonly style="background-color:white;" value="<?php echo ucwords($pasien->nama_depan).' '.ucwords($pasien->nama_belakang).' '.$pasien->sapaan; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-md-12 control-label">Umur :</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="col-md-6" style="padding-right:1px;">
                                                            <input type="text" name="umur_tahun" placeholder="0" class="form-control required input-sm align-center" style="background-color:white;" readonly>
                                                        </div>
                                                        <div class="col-md-6" style="padding-left:1px;padding-top:4px;">
                                                            Tahun
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="col-md-6" style="padding-right:1px;">
                                                            <input type="text" name="umur_bulan" placeholder="0" class="form-control required align-center input-sm" style="background-color:white;" readonly>
                                                        </div>
                                                        <div class="col-md-6" style="padding-left:1px;padding-top:4px;">
                                                            Bulan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Jenis Asuransi :</label>
                                                <div class="col-md-5">
                                                    <select name="asuransi" class="form-control select-sm required">
                                                        <option value=""></option>
                                                        <option value="Pribadi">Pribadi</option>
                                                        <option value="BPJS">BPJS</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-5" style="padding-left:1px;">
                                    	<div class="widget box" style="margin-bottom:10px;">
                                        	<div class="widget-content" style="padding:0px 2px 0px 2px;">                                            
                                        	<div style="float:left;margin-top:-10px;margin-left:5px;background:white;"><strong>Data Pengirim</strong></div>
                                            <br>
                                             <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label"><span style="font-size:12px;">Dokter Pengirim :</span></label>
                                                    <div class="col-md-7">
                                                        <input type="text" name="nama_dokter" class="form-control input-sm" readonly style="background-color:white;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label">Asal Layanan :</label>
                                                    <div class="col-md-7">
                                                        <input type="text" name="asal_layan" class="form-control input-sm" readonly style="background-color:white;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label">Tanggal Periksa :</label>
                                                    <div class="col-md-6">
                                                        <input type="text" name="tanggal_periksa" class="form-control input-sm align-center" readonly style="background-color:white;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label">Diagnosis Klinis :</label>
                                                    <div class="col-md-7">
                                                        <input type="text" name="diagnosis" class="form-control input-sm">
                                                    </div>
                                                </div>
                                                </form>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
							</div>                            
						</div>
                    </div>
                    
                    <div class="col-md-5 content2" style="padding:5px 5px 5px 25px;position:fixed;right:0;">
                    </div>
                    
                    <div class="todays_visit" style="display:none;">
                    	<div class="row" style="margin-bottom:2px;">
                        	<div class="col-md-12">
                            	<div class="widget box" style="margin-bottom:0px;">
                            <div class="widget-header align-center">
                                <h4><i class="fa fa-line-chart"></i> TODAY'S VISIT</h4>
                            </div>
                            <div class="widget-content">
                            	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, in, reprehenderit, enim et libero voluptas debitis excepturi doloribus molestias modi sint autem praesentium natus cum rerum est soluta asperiores minima eligendi atque error inventore sed. Voluptatum, explicabo, eaque quibusdam odit est iure magnam vero distinctio molestias necessitatibus earum facilis enim laboriosam rerum ut eum consequatur officiis excepturi veritatis nam voluptatibus sapiente ipsam dolorum beatae porro. Dolor, cumque, voluptate, rerum ipsam nisi molestias vel eaque consequatur labore sunt libero odio laborum ab dolorum voluptates magnam iure ipsa facilis enim tempora! At, ipsa fugiat soluta pariatur odit porro natus facilis perferendis numquam iusto! Commodi, reprehenderit, deserunt, pariatur atque laudantium sint fugiat consequatur eius assumenda ratione minima vero expedita harum unde ut possimus molestiae repellat suscipit consectetur officiis aperiam quae iusto ducimus facere eum doloribus asperiores ea
                            </div>
                        </div>
                            </div>
                        </div>
                    	<div class="row">
                        	<div class="col-md-6" style="padding-right:1px;">
                            	<div class="widget box" style="margin-bottom:0px;">
                                    <div class="widget-header">
                                        <h4><i class="fa fa-line-chart"></i> TODAY'S VISIT</h4>
                                    </div>
                                    <div class="widget-content discroll2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, in, reprehenderit, enim et libero voluptas debitis excepturi doloribus molestias modi sint autem praesentium natus cum rerum est soluta asperiores minima eligendi atque error inventore sed. Voluptatum, explicabo, eaque quibusdam odit est iure magnam vero distinctio molestias necessitatibus earum facilis enim laboriosam rerum ut eum consequatur officiis excepturi veritatis nam voluptatibus sapiente ipsam dolorum beatae porro. Dolor, cumque, voluptate, rerum ipsam nisi molestias vel eaque consequatur labore sunt libero odio laborum ab dolorum voluptates magnam iure ipsa facilis enim tempora! At, ipsa fugiat soluta pariatur odit porro natus facilis perferendis numquam iusto! Commodi, reprehenderit, deserunt, pariatur atque laudantium sint fugiat consequatur eius assumenda ratione minima vero expedita harum unde ut possimus molestiae repellat suscipit consectetur officiis aperiam quae iusto ducimus facere eum doloribus asperiores ea animi numquam am
                                    </div>
                                </div>
                            </div>
                        	<div class="col-md-6" style="padding-left:1px;">
                            	<div class="widget box" style="margin-bottom:0px;">
                                    <div class="widget-header align-center">
                                        <h4><i class="fa fa-line-chart"></i> TODAY'S VISIT</h4>
                                    </div>
                                    <div class="widget-content discroll2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, in, reprehenderit, enim et libero voluptas debitis excepturi doloribus molestias modi sint autem praesentium natus cum rerum est soluta asperiores minima eligendi atque error inventore sed. Voluptatum, explicabo, eaque quibusdam odit est iure magnam vero distinctio molestias necessitatibus earum facilis enim laboriosam rerum ut eum consequatur officiis excepturi veritatis nam voluptatibus sapiente ipsam dolorum beatae porro. Dolor, cumque, voluptate, rerum ipsam nisi molestias vel eaque consequatur labore sunt libero odio laborum ab dolorum voluptates magnam iure ipsa facilis enim tempora! At, ipsa fugiat soluta pariatur odit porro natus facilis perferendis numquam iusto! Commodi, reprehenderit, deserunt, pariatur atque laudantium sint fugiat consequatur eius assumenda ratione minima vero expedita harum unde ut possimus molestiae repellat suscipit consectetur officiis aperiam quae iusto ducimus facere eum doloribus asperiores ea animi numquam amet vel debitis tempore quia minus quidem explicabo perspiciatis consequuntur blanditiis similique tempora cupiditate impedit magni quo dolore nam odit? Dicta, tenetur, aliquam ea necessitatibus a autem dignissimos dolorum saepe officiis cupiditate maiores distinctio temporibus beatae eius fugiat. Amet, adipisci, cupiditate quas quo incidunt autem dolor
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