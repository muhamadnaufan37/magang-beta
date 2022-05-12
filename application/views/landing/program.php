
        <section id="header" class="text-center">
            <div class="h1">Program</div>
            <div class="row justify-content-center">
                <?php $no=1; foreach($bidang1 as $bidang){ ?>
                <div class="card" style="width: 18rem;">
                  <img src="https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2021/10/hero-mobile-legend-featured-1-640x360.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><h6><?= $bidang['kode_bidang']; ?></h6> - <?= $bidang['nama_bidang']; ?></h5>
                    <p class="card card-text"><?= $bidang['deskripsi']; ?></p>
                    <a href="#" class="btn btn-primary">Apply</a>
                  </div>
                </div><p>
                <?php } ?>
                <div class="footer">
                    <a class="btn btn-outline-danger d-grid gap-2 col-3 mx-auto" href="<?php echo base_url('auth'); ?>"><b>Kembali</b></a>
                </div>
            </div>
        </section>