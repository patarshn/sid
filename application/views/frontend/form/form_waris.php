<!-- CONTENT -->
<div class="container mt-3 mb-4">
    <div class="row" style="margin-left:0; margin-right:0;">
        <div class="col-lg-8 col-12 konten-form">
            <div class="row">
            <?php if($this->session->flashdata('success_message')): ?>
	            <div class="alert alert-success col" id="success-message"><?= $this->session->flashdata('success_message');?></div>
            <?php endif ?>
                <div class="alert alert-danger col d-none" id="error-message"></div>
            <form method="POST" id="form" action="<?=base_url('form_waris/store')?>">
                <h3>Form Keterangan Waris</h3>
                <h5 style="margin-top:20px;">Penanggung Jawab</h5>
                <div class="form-row">
                    <div class="col-lg-12">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="NIK">
                    </div>
                </div>
                <h5 style="margin-top:20px;">Pewaris</h5>
                <div class="form-row">
                    <div class="col-lg-12">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama1" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <h5 style="margin-top:20px;">Penerima Waris</h5>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama2" class="form-control" placeholder="Nama">
                    </div>
                    <div class="col-lg-6">
                        <label for="umur">Umur</label>
                        <input type="text" name="umur" class="form-control" placeholder="Umur">
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <h5 style="margin-top:20px;">Isi</h5>
                <div class="form-row">
                    <div class="col-lg-12">
                        <label for="barang">Barang Waris</label>
                        <input type="text" name="brg_waris" class="form-control" placeholder="Barang Warisan">
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
                </div>
                <h5 style="margin-top:20px;">Ukuran</h5>
                <div class="form-row">
                    <div class="col-lg-12">
                        <label for="luas">Luas</label>
                        <input type="text" name="luas" class="form-control" placeholder="Luas">
                    </div>
                </div>
                <h5 style="margin-top:20px;">Ahli Waris Lain</h5>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nama_1">1. Nama</label>
                        <input type="text" name="nama_lain1" class="form-control" placeholder="Nama Waris Lain">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_2">2. Nama</label>
                        <input type="text" name="nama_lain2" class="form-control" placeholder="Nama Waris Lain">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_3">3. Nama</label>
                        <input type="text" name="nama_lain3" class="form-control" placeholder="Nama Waris Lain">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_4">4. Nama</label>
                        <input type="text" name="nama_lain4" class="form-control" placeholder="Nama Waris Lain">
                    </div>
                </div>
                <h5 style="margin-top:20px;">Saksi</h5>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nama_1">1. Nama</label>
                        <input type="text" name="nama_saksi1" class="form-control" placeholder="Nama Saksi">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_2">2. Nama</label>
                        <input type="text" name="nama_saksi2" class="form-control" placeholder="Nama Saksi">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_3">3. Nama</label>
                        <input type="text" name="nama_saksi3" class="form-control" placeholder="Nama Saksi">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama_4">4. Nama</label>
                        <input type="text" name="nama_saksi4" class="form-control" placeholder="Nama Saksi">
                    </div>
                </div>
                <h5 style="margin-top:20px;">Batas - batas</h5>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="timur">Sebelah Timur</label>
                        <input type="text" name="b_timur" class="form-control" placeholder="Batas Timur">
                    </div>
                    <div class="col-lg-6">
                        <label for="barat">Sebelah Barat</label>
                        <input type="text" name="b_barat" class="form-control" placeholder="Batas Barat">
                    </div>
                    <div class="col-lg-6">
                        <label for="selatan">Sebelah Selatan</label>
                        <input type="text" name="b_selatan" class="form-control" placeholder="Batas Selatan">
                    </div>
                    <div class="col-lg-6">
                        <label for="utara">Sebelah Utara</label>
                        <input type="text" name="b_utara" class="form-control" placeholder="Batas Utara">
                    </div>
                    <div class="col-lg-6">
                        <label for="captcha">Masukkan Captcha</label><br>
                        <p class="btn btn-primary disabled" style="background-color:grey !important; border-color:grey !important;">ABCDEFG</p>
                        <input type="text" name="captcha" class="form-control" placeholder="Masukkan Captcha">
                    </div>
                </div>
            </form>
            <div class="d-flex">
            <button type="button" class="btn btn-primary active-button align-self-center" onclick="store(base_url+'form_waris/store','#form')">Simpan</button>
                <div class="spinner-border m-1 align-self-center text-primary d-none" role="status" id="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->