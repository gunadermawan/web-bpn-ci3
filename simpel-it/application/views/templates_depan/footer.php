<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container">
        <div class="copyright text-center my-auto">
            <span>SIMPEL IT App Version 1.0.0.Copyright &copy; Unit Sistem Informasi UPT. BALAI YASA TEGAL - <?= date('Y'); ?></span>
            <!-- costum hr -->
            <!-- <hr class="one" style="height: 5px;width: 50vh;border-radius: 20px;background: linear-gradient(to right, #2D2A70,#ed6b23);"> -->
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Keluar Laman ini ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">pastikan semua data telah tersimpan sebelum Anda keluar laman ini!</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Keluar</a>
        </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>
</body>
</html>
