<!-- CONTENT -->
<div class="container mt-3">
    <div class="row" style="margin-left:0; margin-right:0;">
        <div class="col-lg-8 col-12 konten-form">
            <div class="row">
            <?php if($this->session->flashdata('success_message')): ?>
	            <div class="alert alert-success col" id="success-message"><?= $this->session->flashdata('success_message');?></div>
            <?php endif ?>
                <div class="alert alert-danger col d-none" id="error-message"></div>  
            <form id="form" method="POST" action="<?=base_url('form_jualbeli/store')?>">
                <h3>Form Keterangan Jual Beli</h3>
                <h5 style="margin-top:20px;">Penanggung Jawab</h5>
                <div class="form-row">
                    <div class="col-lg-12">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik1" class="form-control" placeholder="NIK">
                    </div>
                </div>
                <h5 style="margin-top:20px;">Pihak Pertama</h5>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama1" class="form-control" placeholder="Nama">
                    </div>
                    <div class="col-lg-6">
                        <label for="umur">Umur</label>
                        <input type="text" name="umur1" class="form-control" placeholder="Umur">
                    </div>
                    <div class="col-lg-12">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan1" class="form-control" placeholder="Pekerjaan">
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat1" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <h5 style="margin-top:20px;">Pihak Kedua</h5>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama2" class="form-control" placeholder="Nama">
                    </div>
                    <div class="col-lg-6">
                        <label for="umur">Umur</label>
                        <input type="text" name="umur2" class="form-control" placeholder="Umur">
                    </div>
                    <div class="col-lg-12">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan2" class="form-control" placeholder="Pekerjaan">
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat2" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <h5 style="margin-top:20px;">Isi</h5>
                <div class="form-row">
                    <div class="col-lg-3">
                        <label for="hari">Hari</label>
                        <input type="text" name="hari" class="form-control" placeholder="Hari">
                    </div>
                    <div class="col-lg-3">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" name="tanggal" class="form-control" placeholder="Tanggal">
                    </div>
                    <div class="col-lg-3">
                        <label for="bulan">Bulan</label>
                        <input type="text" name="bulan" class="form-control" placeholder="Bulan">
                    </div>
                    <div class="col-lg-3">
                        <label for="tahun">Tahun</label>
                        <input type="text" name="tahun" class="form-control" placeholder="Tahun">
                    </div>
                    <div class="col-lg-12">
                        <label for="dijual">Dijual</label>
                        <input type="text" name="dijual" class="form-control" placeholder="Barang yang dijual">
                    </div>
                    <div class="col-lg-6">
                        <label for="rw">RW</label>
                        <select name="id_rw" class="form-control" id="rw">
                            <option>--Pilih--</option>
                            <option>001</option>
                            <option>002</option>
                            <option>003</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="rt">RT</label>
                        <select name="id_rt" class="form-control" id="rt">
                            <option>--Pilih--</option>
                            <option>001</option>
                            <option>002</option>
                            <option>003</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <label for="nominal">Nominal</label>
                        <input type="text" name="nominal" class="form-control" placeholder="Nominal Jual Beli">
                    </div>
                </div>
                <h5 style="margin-top:20px;">Batas - batas</h5>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="timur">Sebelah Timur</label>
                        <input type="text" name="timur" class="form-control" placeholder="Batas Timur">
                    </div>
                    <div class="col-lg-6">
                        <label for="barat">Sebelah Barat</label>
                        <input type="text" name="barat" class="form-control" placeholder="Batas Barat">
                    </div>
                    <div class="col-lg-6">
                        <label for="selatan">Sebelah Selatan</label>
                        <input type="text" name="selatan" class="form-control" placeholder="Batas Selatan">
                    </div>
                    <div class="col-lg-6">
                        <label for="utara">Sebelah Utara</label>
                        <input type="text" name="utara" class="form-control" placeholder="Batas Utara">
                    </div>
                    <div class="col-lg-6">
                        <label for="captcha">Masukkan Captcha</label><br>
                        <p class="btn btn-primary disabled" style="background-color:grey !important; border-color:grey !important;">ABCDEFG</p>
                        <input type="text" name="captcha" class="form-control" placeholder="Masukkan Captcha">
                    </div>
                </div>
            </form>
            <div class="d-flex">
            <button type="button" class="btn btn-primary active-button align-self-center" onclick="store(base_url+'form_jualbeli/store','#form')">Simpan</button>
                <div class="spinner-border m-1 align-self-center text-primary d-none" role="status" id="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->