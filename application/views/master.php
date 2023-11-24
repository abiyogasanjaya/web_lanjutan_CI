<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view($header); ?>
<body>
    <?php $this->load->view($navbar); ?>
    <?php $this->load->view($sidebar); ?>

  <main id="main" class="main">
    <?php $this->load->view($content); ?>
  </main>

  <?php $this->load->view($footer); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/backend/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
  <script src="<?= base_url('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/backend/vendor/chart.js/chart.umd.js'); ?>"></script>
  <script src="<?= base_url('assets/backend/vendor/echarts/echarts.min.js'); ?>"></script>
  <script src="<?= base_url('assets/backend/vendor/quill/quill.min.js'); ?>"></script>
  <script src="<?= base_url('assets/backend/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
  <script src="<?= base_url('assets/backend/vendor/tinymce/tinymce.min.js'); ?>"></script>
  <script src="<?= base_url('assets/backend/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/backend/js/main.js'); ?>"></script>

  <?php
    if(isset($js)){
        $this->load->view($js);
    }
  ?>
</body>

</html>