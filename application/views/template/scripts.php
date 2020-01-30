		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>public/js/ie10-viewport-bug-workaround.js"></script>

		<?php 
        if (isset($scripts)) {
            foreach ($scripts as $scripts_name) {
                $src = base_url() . "public/js/" . $scripts_name; ?>
		<script src="<?= $src?>"></script>
		<?php   }
        } ?>

		</body>
		</html>