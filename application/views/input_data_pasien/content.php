<div id="content"><!--content-->
            <div class="container">
            	<div class="row">
                	<div class="col-md-7 col-sm-7 col-xs-7 col-lg-7" style="padding:5px;">
                    	<div class="widget box" style="margin-bottom:0px;">
							<div class="widget-header">
                                <h4><i class="fa fa-user-plus"></i> INPUT DATA PASIEN</h4>                             
                            </div>
							<div class="widget-content" style="padding:10px 3px 3px 3px;">
                            <form method="post" id="validate-1" class="form-horizontal">                               
								<div class="row">
                                	<div class="col-md-7" style="padding-right:2px;"> <!--Informasi Umum-->
                                    	<div class="widget box" style="margin-bottom:10px;">
                                        	<div class="widget-content" style="padding:0px 2px 0px 2px;">
                                            
                                        <div style="float:left;margin-top:-10px;margin-left:5px;background:white;"><strong>Informasi Umum</strong></div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                 <div class="form-group">
                                                    <label class="col-md-12 control-label"><span style="font-size:12.5px;">Nama Pasien :</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="padding:0px 0px 0px 15px;">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" name="nama_depan" placeholder="Nama Depan" class="form-control required input-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="padding:0px 0px 0px 5px;">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" name="nama_belakang" placeholder="Nama Belakang" class="form-control input-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="padding:0px 15px 0px 5px;">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <select name="sapaan" class="form-control align-center required select-sm" >
                                                            <option value=""></option>
                                                            <option value="By.">By</option>
                                                            <option value="An.">An</option>
                                                            <option value="Tn.">Tn</option>
                                                            <option value="Ny.">Ny</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">NIK :</label>
                                            <div class="col-md-7">
                                                <input type="text" name="nik" class="form-control required digits input-sm" maxlength="16">
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-3" >
                                            	<div class="form-group">
                                                    <label class="col-md-12 control-label"><span style="font-size:9.7px;">Tempat/Tgl.Lahir :</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control required input-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1 align-center" style="padding-top:4px;">
                                            /
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" name="tanggal_lahir" placeholder="dd-mm-yyyy" class="form-control required input-sm align-center" style="background-color:white;" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-3">
                                            	<div class="form-group">
                                                    <label class="col-md-12 control-label">Umur :</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="form-group">
                                                    <div class="col-md-6">
                                                        <input type="text" name="umur_tahun" placeholder="0" class="form-control required input-sm align-center" style="background-color:white;" readonly>
                                                    </div>
                                                    <div class="col-md-6" style="padding-top:4px;">
                                                    	Tahun
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="form-group">
                                                    <div class="col-md-6">
                                                        <input type="text" name="umur_bulan" placeholder="0" class="form-control required align-center input-sm" style="background-color:white;" readonly>
                                                    </div>
                                                    <div class="col-md-6" style="padding-top:4px;">
                                                    	Bulan
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"><span style="font-size:12px;">Jenis Kelamin :</span></label>
                                            <div class="col-md-4">
                                                <select name="jenis_kelamin" class="form-control align-center required select-sm" >
                                                    <option value=""></option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Alamat :</label>
                                            <div class="col-md-9">
                                            	<textarea rows="1" cols="5" name="alamat" class="auto form-control required input-sm"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-3">
                                            	<div class="form-group">
                                                    <label class="col-md-12 control-label">Agama/Suku :</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" name="agama" placeholder="Agama" class="form-control required input-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1 align-center" style="padding-top:4px">
                                            /
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" name="suku" placeholder="Suku" class="form-control required input-sm">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pekerjaan :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="pekerjaan" class="form-control required input-sm">
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-3">
                                            	<div class="form-group">
                                                    <label class="col-md-12 control-label">No. Kontak :</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" name="no_tlp" placeholder="Nomor Telepon" class="form-control required digits input-sm" maxlength="8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1 align-center" style="padding-top:4px">
                                            /
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" name="no_ponsel" placeholder="Nomor Ponsel" class="form-control required digits input-sm" maxlength="13">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Email :</label>
                                            <div class="col-md-9">
                                                <input type="text" name="email" class="form-control required email input-sm">
                                            </div>
                                        </div>
                                        
                                           </div>
                                        </div>                                        
                                    </div><!--Informasi Umum *-->
                                    <div class="col-md-5" style="padding-left:2px;"> <!--Informasi Kesehatan-->
                                    	<div class="widget box" style="margin-bottom:10px;">
                                        	<div class="widget-content" style="padding:0px 2px 0px 2px;">
                                            
                                        <div style="float:left;margin-top:-10px;margin-left:5px;background:white;"><strong>Informasi Kesehatan</strong></div>
                                        <br>
                                        <div class="row">
                                        	<div class="col-md-5">
                                            	<div class="form-group">
                                                    <label class="col-md-12" style="padding-top:7px;"><span style="font-size:12.7px;">Golongan Darah :</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            	<div class="form-group">
                                                    <div class="col-md-12">
                                                        <select name="golongan_darah" class="form-control align-center required select-sm" >
                                                            <option value=""></option>
                                                            <option value="A" >A</option>
                                                            <option value="AB">AB</option>
                                                            <option value="B">B</option>
                                                            <option value="O">O</option>
                                                            <option value="Tidak Tahu">Tidak Tahu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="col-md-3">
                                            	<div class="form-group">
                                                    <div class="col-md-12">
                                                        <select name="rhesus" class="form-control align-center required select-sm" >
                                                            <option value=""></option>
                                                            <option value="+">+</option>
                                                            <option value="-">-</option>
                                                            <option value="Tidak Tahu">Tidak Tahu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" >
                                        	<label class="col-md-5" style="padding-top:7px;">Riwayat Alergi :</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control input-sm" style="visibility:hidden;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" name="alergi" class="form-control tags input-sm">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-7" style="padding-top:7px;">Riwayat Penyakit Dahulu :</label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control input-sm" style="visibility:hidden;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" name="penyakit" class="form-control tags input-sm">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                        	<label class="col-md-6" style="padding-top:7px;">Riwayat Operasi :</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control input-sm" style="visibility:hidden;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" name="operasi" class="form-control tags input-sm">
                                            </div>
                                        </div>
                                        
                                        	</div>
                                        </div>
                                    </div><!--Informasi Kesehatan *-->
                                </div>
                                <div class="row">
                                	<div class="col-md-7 pj" style="padding-right:2px;display:none;"> <!--Penanggung Jawab Pasien (PJ Pasien)-->
                                    	<div class="widget box" style="margin-bottom:5px;">
                                        	<div class="widget-content" style="padding:0px 2px 0px 2px;">
                                    
                                    	 <div style="float:left;margin-top:-10px;margin-left:5px;background:white;"><strong>Penanggung Jawab Pasien (PJ Pasien)</strong></div>														
                                         <br>                                       
                                            <div class="row">
                                                <div class="col-md-3">
                                                     <div class="form-group">
                                                        <label class="col-md-12 control-label">Nama PJ :</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3" style="padding:0px 0px 0px 15px;">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="text" name="nama_pj_depan" placeholder="Nama Depan" class="form-control required input-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="padding:0px 0px 0px 5px;">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="text" name="nama_pj_belakang" placeholder="Nama Belakang" class="form-control input-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2" style="padding:0px 15px 0px 5px;">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <select name="sapaan_pj" class="form-control align-center required select-sm" >
                                                                <option value=""></option>
                                                                <option value="An.">An</option>
                                                                <option value="Tn.">Tn</option>
                                                                <option value="Ny.">Ny</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"><span style="font-size:12px;">NIK PJ Pasien :</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" name="nik_pj" class="form-control required digits input-sm" maxlength="16">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Hubungan :</label>
                                                <div class="col-md-4">
                                                    <select name="hubungan_pj" class="form-control required select-sm" >
                                                        <option value=""></option>
                                                        <option value="Orang Tua">Orang Tua</option>
                                                        <option value="Anak" >Anak</option>
                                                        <option value="Suami">Suami</option>
                                                        <option value="Istri">Istri</option>
                                                        <option value="Kerabat">Kerabat</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Alamat PJ :</label>
                                                <div class="col-md-9">
                                                    <textarea rows="3" cols="1" name="alamat_pj" class="auto form-control required input-sm"></textarea>
                                                </div>
                                            </div>                                            
                                             <div class="form-group">
                                                <div class="col-md-offset-3 col-md-5">
                                                     <label class="checkbox"><input type="checkbox" name="checkbox_alamat_pj">Sama Dengan Pasien</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="col-md-12 control-label"><span style="font-size:11.5px;">No. Kontak PJ :</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="text" name="no_tlp_pj" placeholder="Nomor Telepon" class="form-control required digits input-sm" maxlength="8">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1" style="padding-top:4px">
                                                /
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="text" name="no_ponsel_pj" placeholder="Nomor Ponsel" class="form-control required digits input-sm" maxlength="13">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-offset-3 col-md-5">
                                                     <label class="checkbox"><input type="checkbox" name="checkbox_no_kontak_pj">Sama Dengan Pasien</label>
                                                </div>
                                            </div>
                                            
                                            	</div>
                                            </div>                                   
                                    </div><!--Penanggung Jawab Pasien (PJ Pasien) *-->
                                    <div class="col-md-12 ck"><!--Catatan Khusus-->
                                    	<div class="widget box" style="margin-bottom:5px;">
                                        	<div class="widget-content" style="padding:0px 2px 0px 2px;">
                                        
                                    		<div style="float:left;margin-top:-10px;margin-left:5px;background:white;"><strong>Catatan Khusus</strong></div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea rows="2" cols="1" name="catatan_khusus" class="form-control input-sm"></textarea>
                                                </div>
                                            </div>
                                            
                                            </div>
                                        </div>                                                   
                                    </div><!--Catatan Khusus *-->
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-7 col-md-5">                                  
                                        <input type="submit" value="Simpan &#10004;" class="btn btn-success btn-xs pull-right">
                                        <input type="reset" value="Batal &#10006;" class="btn btn-danger btn-xs">
                                    </div>
                                </div>                               
                            </form>
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