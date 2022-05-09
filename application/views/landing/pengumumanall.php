
        <section id="header" class="text-center">
            <div class="h1">Terkini</div>
            <div class="row justify-content-center">
                <?php $no=1; foreach($landing1 as $landing){ ?>
                <a class="col-md-2 shadow rounded text-start mx-2 p-3" style="text-decoration: none;" href="<?=base_url('auth/pengumuman/?id='.$landing['id'])?>">
                    <p class="text-muted"><?= $landing['date_created']; ?></p>
                    <p class="text-dark textwrapp text-left"><b><?= $landing['judul']; ?></b></p>
                </a>
                <?php } ?>
                <p><p><p><p>
                <div class="footer">
                    <a class="btn btn-outline-danger d-grid gap-2 col-3 mx-auto" href="<?php echo base_url('auth'); ?>"><b>Kembali</b></a>
                </div>
            </div>
        </section>