<nav class="navbar navbar-vertical navbar-expand-xl navbar-light" style="display:none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle) {
            document.querySelector('.navbar-vertical').className += ' navbar-' + navbarStyle;
        }
    </script>
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="customer_dashboard">
            <div class="d-flex align-items-center py-3"><img class="mr-2" src="../public/uploads/system_data/pet.svg" alt="" width="40" /><span class="text-sans-serif">Pet MIS</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content perfect-scrollbar scrollbar">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="customer_dashboard">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-home"> </span>
                            </span>
                            <span class="nav-link-text"> Home</span>
                        </div>
                    </a>
                </li>
                <!--  <li class="nav-item">
                    <a class="nav-link" href="admin_specialists">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-user-nurse"> </span>
                            </span>
                            <span class="nav-link-text"> Specialists</span>
                        </div>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link" href="customer_pets">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-cat"> </span>
                            </span>
                            <span class="nav-link-text"> My Pets</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-viruses"></span>
                            </span>
                            <span class="nav-link-text">Knowledge Base</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="customer_ailment">Ailments </a></li>
                        <li class="nav-item"><a class="nav-link" href="customer_category_ailments">Category Ailments</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customer_clinic_vists">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-clinic-medical"> </span>
                            </span>
                            <span class="nav-link-text">My Clinic Visits</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customer_logout">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-power-off"> </span>
                            </span>
                            <span class="nav-link-text"> Log Out</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>