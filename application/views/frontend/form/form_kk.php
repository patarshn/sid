<!-- CONTENT -->
<div class="container mt-3">
    <div class="row" style="margin-left:0; margin-right:0;">
        <div class="col-lg-8 col-12 konten-form">
            <div class="row">
            <?php if($this->session->flashdata('success_message')): ?>
	            <div class="alert alert-success col" id="success-message"><?= $this->session->flashdata('success_message');?></div>
            <?php endif ?>
                <div class="alert alert-danger col d-none" id="error-message"></div> 
            <form method="POST" id="form" action="<?=base_url('form_kk/store')?>">
                <h3>Form Surat Pengantar KK</h3>
                <div class="form-row">
                    <div class="col-lg-6">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK">
                    </div>
                    <div class="col-lg-6">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" id="nama">
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3" id="alamat"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" readonly id="tempat_lahir">
                    </div>
                    <div class="col-lg-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yy" readonly id="tanggal_lahir">
                    </div>
                    <div class="col-lg-6">
                        <label for="agama">Agama</label>
                        <input type="text" name="agama" class="form-control" placeholder="Agama" readonly id="agama"> 
                    </div>
                    <div class="col-lg-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" readonly id="jenis_kelamin">
                    </div>
                    <div class="col-lg-6">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" readonly id="pekerjaan">
                    </div>
                    <div class="col-lg-6">
                        <label for="pendidikan">Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" readonly id="pendidikan">
                    </div>
                    <div class="col-lg-6">
                        <label for="status">Status Pernikahan</label>
                        <input type="text" name="status_pernikahan" class="form-control" placeholder="Status Pernikahan" readonly id="status_perkawinan">
                    </div>
                    <div class="col-lg-3">
                        <label for="rw">RW</label>
                        <input type="text" name="id_rw" class="form-control" placeholder="RW" readonly id="rt">
                    </div>
                    <div class="col-lg-3">
                        <label for="rw">RT</label>
                        <input type="text" name="id_rt" class="form-control" placeholder="RT" readonly id="rw">
                    </div>
                </div>
            </form>
            <div class="d-flex">
            <button type="button" class="btn btn-primary active-button align-self-center" onclick="store(base_url+'form_kk/store','#form')">Simpan</button>
                <div class="spinner-border m-1 align-self-center text-primary d-none" role="status" id="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->

<script>
var timer = null;
$('#nik').keyup(function(){
    var nik = $('#nik').val();
    clearTimeout(timer); 
    timer = setTimeout($.get(base_url+'kependudukan/nik/'+nik, function(data){
        var obj = JSON.parse(data);
        $('#nama').val(obj['data']['nama']);
        $('#alamat').html(obj['data']['alamat']);
        $('#tempat_lahir').val(obj['data']['tempat_lahir']);
        $('#tanggal_lahir').val(obj['data']['tanggal_lahir']);
        $('#agama').val(obj['data']['agama']);
        $('#jenis_kelamin').val(obj['data']['jenis_kelamin']);
        $('#pekerjaan').val(obj['data']['pekerjaan']);
        $('#pendidikan').val(obj['data']['pendidikan']);
        $('#status_perkawinan').val(obj['data']['status_perkawinan']);
        $('#rt').val(obj['data']['rt']);
        $('#rw').val(obj['data']['rw']);
    }), 3000);
});
</script>