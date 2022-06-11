<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title ?> <?=$this->session->userdata('name')?></title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
        text-align:center;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
        text-align:center;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;

    }
    
    .invoice-box table tr.total {
        border-top: 2px solid #eee;
        font-weight: bold;

    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>
<body>
        <div class="content-body">
            <div class="container-fluid">
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
                      </div>    
                  <div class="row">
                    <div class="col-6 table-responsive">
                      <table class="table table-bordered table-striped" style="margin-left:auto;margin-right:auto" border="1">
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
                    </div><br>
                        <div class="col-6 table-responsive">
                            <table class="table table-bordered table-striped" style="margin-left:auto;margin-right:auto" border="1">
                                <tr>
                                    <th>Penilaian</th>
                                    <td>Angka</td>
                                    <td>Grade</td>
                                </tr>
                                <tr>
                                    <th>Nilai Keterampilan</th>
                                    <td>90</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <th>Nilai Kedisiplinan</th>
                                    <td>95</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <th>Nilai Keinformatikan & Teori</th>
                                    <td>98</td>
                                    <td>A</td>
                                </tr>
                            </table>
                        </div>
                  </div>
                      <div style="text-align: justify;">
                        <h5>
                           Nilai rapor ini diterbitkan di Kabupaten Purwakarta, Tanggal <?=$this->M_data->hari(date('D')).', '.$this->M_data->tgl_indo(date('Y-m-d'));?> oleh <strong>Nama Ketua Bidang</strong> selaku Ketua Bidang Aplikasi Informatika.
                        </h5>
                      </div>
                </div>
            </div>
        </div>
</body>
</html>
<script type="text/javascript">
    function PrintWindow() {                    
       window.print();            
       CheckWindowState();
    }

    function CheckWindowState()    {           
        if(document.readyState=="complete") {
            window.close(); 
        } else {           
            setTimeout("CheckWindowState()", 1000)
        }
    }
    PrintWindow();
</script>