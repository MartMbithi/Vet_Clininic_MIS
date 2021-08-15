<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand" style="display:none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand mr-1 mr-sm-3" href="admin_dashboard">
        <div class="d-flex align-items-center"><img class="mr-2" src="../public/uploads/system_data/pet.svg" alt="" width="40" /><span class="text-sans-serif">Pet Health MIS</span></div>
    </a>

    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">


        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../public/uploads/user_data/no-profile.png" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item" href="admin_profile">Profile Settings</a>
                    <a class="dropdown-item" href="logout">Logout</a>
                </div>
            </div>
        </li>
    </ul>
</nav>

<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg navbar-top-combo" data-move-target="#navbarVerticalNav" style="display:none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand mr-1 mr-sm-3" href="admin_dashboard">
        <div class="d-flex align-items-center"><img class="mr-2" src="../public/uploads/system_data/pet.svg" alt="" width="40" /><span class="text-sans-serif">Pet Health MIS</span></div>
    </a>
    <div class="collapse navbar-collapse" id="navbarStandard">
        <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                    <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="admin_dashboard">Dashboard</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">

        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../public/uploads/user_data/no-profile.png" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item" href="admin_profile">Profile Settings</a>
                    <a class="dropdown-item" href="logout">Logout</a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<script>
    var navbarPosition = localStorage.getItem('navbarPosition');
    var navbarVertical = document.querySelector('.navbar-vertical');
    var navbarTopVertical = document.querySelector('.content .navbar-top');
    var navbarTop = document.querySelector('[data-layout] .navbar-top');
    var navbarTopCombo = document.querySelector('.content .navbar-top-combo');

    if (navbarPosition === 'top') {
        navbarTop.removeAttribute('style');
        navbarTopVertical.parentNode.removeChild(navbarTopVertical);
        navbarVertical.parentNode.removeChild(navbarVertical);
        navbarTopCombo.parentNode.removeChild(navbarTopCombo);
    } else if (navbarPosition === 'combo') {
        navbarVertical.removeAttribute('style');
        navbarTopCombo.removeAttribute('style');
        navbarTop.parentNode.removeChild(navbarTop);
        navbarTopVertical.parentNode.removeChild(navbarTopVertical);
    } else {
        navbarVertical.removeAttribute('style');
        navbarTopVertical.removeAttribute('style');
        navbarTop.parentNode.removeChild(navbarTop);
        navbarTopCombo.parentNode.removeChild(navbarTopCombo);
    }
</script>