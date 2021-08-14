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
