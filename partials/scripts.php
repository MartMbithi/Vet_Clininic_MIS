<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
</script>

<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/plugins/%40fortawesome/all.min.js"></script>
<script src="../public/plugins/stickyfilljs/stickyfill.min.js"></script>
<script src="../public/plugins/sticky-kit/sticky-kit.min.js"></script>
<script src="../public/plugins/is_js/is.min.js"></script>
<script src="../public/plugins/lodash/lodash.min.js"></script>
<script src="perfect-scrollbar/perfect-scrollbar.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<script src="../public/js/theme.min.js"></script>
<script src="../public/plugins/leaflet/leaflet.js"></script>
<script src="../public/plugins/leaflet.markercluster/leaflet.markercluster.js"></script>
<script src="../public/plugins/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
<!-- iZi Toast Js -->
<script src="../public/plugins/iziToast/iziToast.min.js" type="text/javascript"></script>
<?php if (isset($success)) { ?>
    <!--This code for injecting success alert-->
    <script>
        iziToast.success({
            title: 'Success',
            position: 'topRight',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            transitionInMobile: 'fadeInUp',
            transitionOutMobile: 'fadeOutDown',
            message: '<?php echo $success; ?>',
        });
    </script>

<?php } ?>

<?php if (isset($err)) { ?>
    <!--This code for injecting error alert-->
    <script>
        iziToast.error({
            title: 'Error',
            timeout: 10000,
            resetOnHover: true,
            position: 'topRight',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            transitionInMobile: 'fadeInUp',
            transitionOutMobile: 'fadeOutDown',
            message: '<?php echo $err; ?>',
        });
    </script>

<?php } ?>

<?php if (isset($info)) { ?>
    <!--This code for injecting info alert-->
    <script>
        iziToast.warning({
            title: 'Warning',
            position: 'topLeft',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            transitionIn: 'fadeInUp',
            transitionInMobile: 'fadeInUp',
            transitionOutMobile: 'fadeOutDown',
            message: '<?php echo $info; ?>',
        });
    </script>

<?php }
?>