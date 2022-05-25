<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/register')?>/css/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title><?php echo $page_title ?> - <?= $web['title']; ?> </title> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form method="post" action="<?php echo base_url('register/mahasiswa'); ?>">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="nama">Full Name</label>
                            <input type="text" name="nama" id="nama" placeholder="Enter your full name" value="<?= set_value('nama'); ?>" required>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field">
                            <label for="jk">Gender</label>
                            <select id="jk" name="jk" required>
                                <option value="" selected="" disabled="">--- Select gender ---</option>
                                <option value="1">Laki - Laki</option>
                                <option value="0">Perempuan</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="agama">Agama</label>
                            <select id="agama" name="agama" required>
                                <option value="" selected="" disabled="">--- Pilih ---</option>
                                <option value="1">Islam</option>
                                <option value="2">Protestan</option>
                                <option value="3">Katolik</option>
                                <option value="4">Hindu</option>
                                <option value="5">Buddha</option>
                                <option value="6">Khonghucu</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?= set_value('email'); ?>" placeholder="Enter your email" required>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field">
                            <label for="password1">Password</label>
                            <input type="password" name="password1" id="password1" placeholder="Enter your password" value="<?= set_value('password1'); ?>" required>
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field">
                            <label for="telepon">Mobile Number</label>
                            <input type="number" name="telepon" id="telepon" placeholder="Enter mobile number" value="<?= set_value('telepon'); ?>" required>
                            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field">
                            <label for="keperluan">Keperluan</label>
                            <select name="keperluan" id="keperluan" required>
                                <option value="" selected="" disabled="">--- Pilih ---</option>
                                <option value="1">Magang</option>
                                <option value="2">Penelitian Skripsi</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Enter your location" value="<?= set_value('tempat_lahir'); ?>" required>
                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field">
                            <label for="tanggal_lahir">Date of Birth</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Enter birth date" value="<?= set_value('tanggal_lahir'); ?>" required>
                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>

                <!-- <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" placeholder="Enter ID number" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Authority</label>
                            <input type="text" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Issued State</label>
                            <input type="text" placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" placeholder="Enter your issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Expiry Date</label>
                            <input type="date" placeholder="Enter expiry date" required>
                        </div>
                    </div>
                </div> -->

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Masukan Data</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="kampus">Address Type</label>
                            <select class="selectpicker" data-live-search="true" id="kampus" name="kampus">
                                <option class="text-center" value="" selected="" disabled="">--- PILIH PERGURUAN TINGGI ---</option>
                                <?php foreach($pt1 as $pt){ ?>
                                <option value="<?= $pt['nama_pt']; ?>"><?= $pt['nama_pt']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="jenjang">Jenjang</label>
                            <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" id="jenjang" name="jenjang">
                        <option class="text-center" value="" selected="" disabled="">--- PILIH JENJANG ---</option>
                              <option value="D3">D3</option>
                              <option value="D4">D4</option>
                              <option value="S1">S1</option>
                        </select>
                        </div>

                        <div class="input-field">
                            <label for="p_studi">Program Studi</label>
                            <input type="text" id="p_studi" name="p_studi" placeholder="Contoh: Teknik pelayaran" value="<?= set_value('p_studi'); ?>" required>
                            <?= form_error('p_studi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field">
                            <label for="nim">Nomor Induk Mahasiswa (NIM)</label>
                            <input type="number" id="nim" name="nim" value="<?= set_value('nim'); ?>" placeholder="Enter your nim" required>
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field">
                            <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                            <input type="number" id="nik" name="nik" value="<?= set_value('nik'); ?>" placeholder="Enter your nik" required>
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Domisili</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="provinsi">Provinsi</label>
                            <select name="provinsi" class="selectpicker form-control" data-live-search="true" id="provinsi">
                           <option value="" selected="" disabled="">- Select Provinsi -</option>
                           <?php foreach($provinsi as $prov){
                            echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                           } ?>
                        </select>
                        </div>

                        <div class="input-field">
                            <label for="kabupaten">Kabupaten</label>
                            <select name="kabupaten" class="form-select form-select-sm" id="kabupaten">
                           <option value="" selected="" disabled="">- Select Kabupaten -</option>
                        </select>
                        </div>

                        <div class="input-field">
                            <label for="kecamatan">kecamatan</label>
                            <select name="kecamatan" class="form-select form-select-sm" id="kecamatan">
                           <option value="" selected="" disabled="">- Select Kecamatan -</option>
                        </select>
                        </div>

                        <div class="input-field">
                            <label for="desa">desa</label>
                            <select name="desa" class="form-select form-select-sm" id="desa">
                            <option value="" selected="" disabled="">- Select Desa -</option>
                        </select>
                        </div>

                        <div class="input-field">
                            <label for="kode_pos">Kode Pos</label>
                            <input class="form-control" id="kode_pos" name="kode_pos" value="<?= set_value('kode_pos'); ?>" type="text" placeholder="Program studi" />
                            <?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="input-field">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" type="text" placeholder="Program studi"></textarea>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url('assets/register')?>/js/script.js"></script>
            <script>
                $(document).ready(function(){
                    $("#provinsi").change(function (){
                        var url = "<?php echo site_url('register/add_ajax_kab');?>/"+$(this).val();
                        $('#kabupaten').load(url);
                        return false;
                    })
                    
                    $("#kabupaten").change(function (){
                        var url = "<?php echo site_url('register/add_ajax_kec');?>/"+$(this).val();
                        $('#kecamatan').load(url);
                        return false;
                    })
                    
                    $("#kecamatan").change(function (){
                        var url = "<?php echo site_url('register/add_ajax_des');?>/"+$(this).val();
                        $('#desa').load(url);
                        return false;
                    })
                });
            </script>
</body>
</html>