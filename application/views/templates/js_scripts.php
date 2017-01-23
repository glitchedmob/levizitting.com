<!-- jQuery -->
<script src="<?php echo base_url(); ?>public/js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>public/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/mdb.min.js"></script>

<?php
    if ($custom_js !== NULL) {
      foreach ($custom_js as $js_file) {
  ?>
        <script type="text/javascript" src="<?php echo $js_file; ?>"></script>
  <?php
      }
    }
  ?>
</body>