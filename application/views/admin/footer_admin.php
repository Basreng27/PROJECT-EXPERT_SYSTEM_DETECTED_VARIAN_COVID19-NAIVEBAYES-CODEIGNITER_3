<div class="footer">
    <div class="copyright">
        <p>Copyright ©R2022</p>
        <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
    </div>
</div>

</div>
<!-- Required vendors -->
<script src="<?php echo base_url() ?>assets/vendor/global/global.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/quixnav-init.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>

<!-- Vectormap -->
<script src="<?php echo base_url() ?>assets/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/morris/morris.min.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/gaugeJS/dist/gauge.min.js"></script>

<!--  flot-chart js -->
<script src="<?php echo base_url() ?>assets/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/flot/jquery.flot.resize.js"></script>

<!-- Owl Carousel -->
<script src="<?php echo base_url() ?>assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!-- Counter Up -->
<script src="<?php echo base_url() ?>assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/dashboard/dashboard-1.js"></script>

<!-- Datatable -->
<script src="<?php echo base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins-init/datatables.init.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/nouislider/nouislider.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/wnumb/wNumb.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins-init/nouislider-init.js"></script>



<!-- Vendor -->
<script src="<?php echo base_url() ?>assets/octopus/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/octopus/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="<?php echo base_url() ?>assets/octopus/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/octopus/vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?php echo base_url() ?>assets/octopus/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/octopus/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo base_url() ?>assets/octopus/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="<?php echo base_url() ?>assets/octopus/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="<?php echo base_url() ?>assets/octopus/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url() ?>assets/octopus/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url() ?>assets/octopus/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url() ?>assets/octopus/javascripts/theme.init.js"></script>


<!-- Demo Purpose Only -->
<script>
    (function() {
        $('#listenSlider').change(function() {
            $('.output b').text(this.value);
        });

        $('#listenSlider2').change(function() {
            var min = parseInt(this.value.split('/')[0], 10);
            var max = parseInt(this.value.split('/')[1], 10);

            $('.output2 b.min').text(min);
            $('.output2 b.max').text(max);
        });
    })();
</script>

</body>

</html>