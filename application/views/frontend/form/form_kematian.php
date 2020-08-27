<!-- CONTENT -->
<div class="container mt-3">
    <div class="row" style="margin-left:0; margin-right:0;">
        <div class="col-lg-8 col-12 konten-form">
            <div class="row">
            <?php if($this->session->flashdata('success_message')): ?>
	            <div class="alert alert-success col" id="success-message"><?= $this->session->flashdata('success_message');?></div>
            <?php endif ?>
                <div class="alert alert-danger col d-none" id="error-message"></div> 
            <form id="form" method="POST" action="<?=base_url('form_kematian/store')?>">
                <h3>Form Keterangan Kematian</h3>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="NIK" required>
                    </div>
                    <div class="col-lg-6">
                          <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" readonly >
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="rw">RW</label>
                        <input type="text" name="id_rw" class="form-control" placeholder="RW" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="rt">RT</label>
                        <input type="text" name="id_rt" class="form-control" placeholder="RT" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yy" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="agama">Agama</label>
                        <input type="text" name="agama" class="form-control" placeholder="Agama" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                    </div>
                    <div class="col-lg-6">
                        <label for="tanggal_kematian">Tanggal Kematian</label>
                        <input type="date" name="tanggal_kematian" class="form-control" placeholder="mm/dd/yy">
                    </div>
                    <div class="col-lg-6">
                        <label for="tempat_kematian">Tempat Kematian</label>
                        <input type="text" name="tempat_kematian" class="form-control" placeholder="Tempat Kematian">
                    </div>
                    <div class="col-lg-6">
                        <label for="penyebab">Penyebab Kematian</label>
                        <input type="text" name="penyebab_kematian" class="form-control" placeholder="Penyebab Kematian">
                    </div>
                    <div class="col-lg-6">
                        <label for="captcha">Masukkan Captcha</label><br>
                        <p class="btn btn-primary disabled" style="background-color:grey !important; border-color:grey !important;">ABCDEFG</p>
                        <input type="text" name="captcha" class="form-control" placeholder="Masukkan Captcha">
                    </div>
                </div>
            </form>
            <div class="d-flex">
            <button type="button" class="btn btn-primary active-button align-self-center" onclick="store(base_url+'form_kematian/store','#form')">Simpan</button>
                <div class="spinner-border m-1 align-self-center text-primary d-none" role="status" id="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->