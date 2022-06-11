        <div class="content-body">
            <!-- row -->
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
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info">
                          <h5><i class="la la-info-circle"></i> Note:</h5>
                          <font color="black">Selamat Kamu Telah Menyelesaikan Magang, Silahkan Download Nilai Hasil Magang</font>
                        </div>
                    </div>
                </div>
                <div class="card p-3 mb-3">
                  <div class="row">
                        <div class="col-12">
                              <h4>
                                <img style="width: 150px" src="<?php echo base_url('assets/images/web')?>/logo1.jpg"> 
                                    <strong><?=$web['title'];?></strong>
                                    <small class="float-right">Date :  <?=$this->M_data->hari(date('D')).', '.$this->M_data->tgl_indo(date('Y-m-d'));?></small>
                              </h4>
                        </div>
                  </div>
                  <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                      <address>
                        <strong><?php echo $page_title ?></strong><br>
                        Jl. Gandanegara No.25, Nagri Kidul, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41111<br>
                        (0264) 200036<br>
                        info@diskominfo.purwakartakab.go.id
                      </address>
                    </div>
                  </div>
                      <div style="text-align: justify;">
                        <h5>
                            Dengan ini kami mengucapkan banyak terima kasih atas keterampilan maupun wawasan yang telah diberikan selama program magang dilakukan, dengan adanya program magang ini kami beserta seluruh karyawan memberi penilaian diri. Dengan data yang terlampir sebagai berikut:
                        </h5>
                      </div><br>    
                  <div class="row">
                    <div class="col-6 table-responsive">
                      <table class="table table-bordered table-striped">
                          <tr>
                            <th class="text-center" colspan="2">Biodata Peserta</th>
                          </tr>
                          <tr>
                            <th>Nama</th>
                            <td><?= $user['nama']; ?></td>
                          </tr>
                          <tr>
                            <th>Nama</th>
                            <td><?= $user['kampus']; ?></td>
                          </tr>
                          <tr>
                            <th>Jenjang</th>
                            <td><?= $user['jenjang']; ?></td>
                          </tr>
                          <tr>
                            <th>Jurusan</th>
                            <td><?= $user['p_studi']; ?></td>
                          </tr>
                          <tr>
                            <th>Nomor Induk Sisw</th>
                            <td><?= $user['nim']; ?></td>
                          </tr>
                        </table>
                    </div>
                        <div class="col-6 table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th class="text-center">Penilaian</th>
                                    <td class="text-center">Angka</td>
                                    <td class="text-center">Grade</td>
                                </tr>
                                <tr>
                                    <th>Nilai Keterampilan</th>
                                    <td class="text-center">90</td>
                                    <td class="text-center">A</td>
                                </tr>
                                <tr>
                                    <th>Nilai Kedisiplinan</th>
                                    <td class="text-center">95</td>
                                    <td class="text-center">A</td>
                                </tr>
                                <tr>
                                    <th>Nilai Keinformatikan & Teori</th>
                                    <td class="text-center">98</td>
                                    <td class="text-center">A</td>
                                </tr>
                            </table>
                        </div>
                  </div>
                      <div style="text-align: justify;">
                        <h5>
                           Nilai rapor ini diterbitkan di Kabupaten Purwakarta, Tanggal <?=$this->M_data->hari(date('D')).', '.$this->M_data->tgl_indo(date('Y-m-d'));?> oleh <strong>Nama Ketua Bidang</strong> selaku Ketua Bidang Aplikasi Informatika.
                        </h5>
                      </div><br>
                  <div class="row no-print">
                    <div class="col-12">
                      <a href="<?php echo base_url('mahasiswa/magang_selesai'); ?>" class="btn btn-danger">Kembali</a>
                      <a href="<?=base_url('mahasiswa/rapor_print?id='.$user['id'])?>" target="_blank" class="btn btn-primary"><i class="la la-print"></i> Print</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>