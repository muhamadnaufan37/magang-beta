</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<script src="<?php echo base_url('assets/template/dist2')?>/js/jquery-3.6.0.min.js"></script>

<script src="<?php echo base_url('assets/template/dist2')?>/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url('assets/template/dist2')?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url('assets/template/dist2')?>/js/script.js"></script>

<script>
        $(document).ready(function(){
            $("#provinsi").change(function (){
                var url = "<?php echo site_url('ketuabidang/add_ajax_kab');?>/"+$(this).val();
                $('#kabupaten').load(url);
                return false;
            })
   
   $("#kabupaten").change(function (){
                var url = "<?php echo site_url('ketuabidang/add_ajax_kec');?>/"+$(this).val();
                $('#kecamatan').load(url);
                return false;
            })
   
   $("#kecamatan").change(function (){
                var url = "<?php echo site_url('ketuabidang/add_ajax_des');?>/"+$(this).val();
                $('#desa').load(url);
                return false;
            })
        });
    </script>

</body>
</html>