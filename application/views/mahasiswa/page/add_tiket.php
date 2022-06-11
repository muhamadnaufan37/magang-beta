<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4><?php echo $page_title ?></h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('mahasiswa'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $page_title ?></a></li>
                </ol>
            </div>
        </div>
        <div class="row mx-0">
            <div class="card col-md-12 shadow">
                  <div class="card-header">
                        <h3 class="card-title"><strong><?php echo $page_title ?> | Form Isian dengan tanda <font color="red">(*)</font>, WAJIB DIISI !</strong>
                        </h3>
                  </div>
                <div class="card-body">
                    <div class="block-content">
                        <div class="col-md-12">
                            <form method="post" action="<?php echo base_url('mahasiswa/add_tiket'); ?>" enctype="multipart/form-data">
                                <div class="form-row" hidden>
                                    <div class="form-group col-md-12">
                                    <label for="id">id_user <font color="red">(*)</font></label>
                                    <input type="number" class="form-control" value="<?= $user['id']; ?>" id="id" name="id" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="nama">Nama Anda <font color="red">(*)</font></label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="email">Alamat Email <font color="red">(*)</font></label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="perihal">Perihal <font color="red">(*)</font></label>
                                    <input type="text" class="form-control" id="perihal" name="perihal"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="bidang">Bidang <font color="red">(*)</font></label>
                                        <select class="selectpicker form-control form-select-lg mb-3" data-live-search="true" id="bidang" name="bidang" required>
                                            <option class="text-center" value="" selected="" disabled="">--- PILIH ---</option>
                                            <?php foreach($bidang1 as $bidang){ ?>
                                              <option value="<?= $bidang['nama_bidang']; ?>"><?= $bidang['nama_bidang']; ?></option>
                                            <?php } ?>
                                              <option value="Belum Mengikuti Magang">Belum Mengikuti Magang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <label for="deskripsi">Deskripsi <font color="red">(*)</font></label>
                                    <h6 class="text-muted">Silakan masukkan detail pertanyaan Anda</h6>
                                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="images[]">Lampiran</label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="images[]" name="images[]">
                                            <label class="custom-file-label" for="images[]">Choose file</label>
                                          </div>
                                          <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>