</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/global/global.min.js"></script>
	<script src="<?php echo base_url('assets/template')?>/dist3/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url('assets/template')?>/dist3/js/custom.min.js"></script>
    <script src="<?php echo base_url('assets/plugins/') ?>alert.js"></script>
    <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
    <script src="<?php echo base_url('assets/template')?>/dist3/js/dlabnav-init.js"></script>
		
    <!-- Chart Morris plugin files -->
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/morris/morris.min.js"></script>
		
	
	<!-- Chart piety plugin files -->
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/peity/jquery.peity.min.js"></script>
	
		<!-- Demo scripts -->
    <script src="<?php echo base_url('assets/template')?>/dist3/js/dashboard/dashboard-2.js"></script>

    <!-- Datatable -->
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/template')?>/dist3/js/plugins-init/datatables.init.js"></script>
	
	<!-- Svganimation scripts -->
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/svganimation/vivus.min.js"></script>
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/svganimation/svg.animation.js"></script>
    <script src="<?php echo base_url('assets/template')?>/dist3/js/styleSwitcher.js"></script>
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/moment/moment.min.js"></script>

    <script src="<?php echo base_url('assets/template')?>/dist3/vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url('assets/template')?>/dist3/js/plugins-init/fullcalendar-init.js"></script>

		
	
</body>
</html>