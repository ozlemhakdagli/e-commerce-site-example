﻿		<div class="box-header with-border">
              <h2 align="center" font-weight=" bold">Kullanıcı Düzenleme Formu</h2>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?=base_url()?>admin/kullanicilar/guncellekaydet/<?=$veri[0]->ID?>" method="post">
              <div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Adı Soyadı</label>
                  <input type="text"  name="adiSoyadi" value="<?=$veri[0]->adiSoyadi?>" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Adres</label>
                  <input type="email" name="email" value="<?=$veri[0]->email?>" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Şifre</label>
                  <input type="password" name="sifre" value="<?=$veri[0]->sifre?>" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label>Yetkisi</label>
                  <select class="form-control" name ="yetki">
                    <option><?=$veri[0]->yetki?></option>
					<option>admin</option>
                    <option>editör</option>
                    <option>üye</option>
                    
                    </select>
                </div>
				<div class="form-group">
                  <label>Durumu</label>
                  <select class="form-control" name="durum">
					<option><?=$veri[0]->durum?></option>
                    <option>Onaylanmış</option>
                    <option>Beklemede</option>
                    <option>Engelli</option>
                    
                    
					</select>
                </div>
				<div>
				<div class="form-group">
                
            <div><strong>Resim Seçin:</strong> <input type="file" name="resim" /></div>
            
                </div>

              </div>
              <!-- /.box-body -->

              
                <button type="submit" class="btn btn-primary">Güncelle</button>
             </div>
            </form>
          
    
  
