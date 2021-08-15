<nav class="navbar navbar-vertical navbar-expand-xl navbar-light" style="display:none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle) {
            document.querySelector('.navbar-vertical').className += ' navbar-' + navbarStyle;
        }
    </script>
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="admin_dashboard">
            <div class="d-flex align-items-center py-3"><img class="mr-2" src="../public/uploads/system_data/pet.svg" alt="" width="40" /><span class="text-sans-serif">Pet MIS</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content perfect-scrollbar scrollbar">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="admin_dashboard">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-home"> </span>
                            </span>
                            <span class="nav-link-text"> Home</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_specialists">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-home"> </span>
                            </span>
                            <span class="nav-link-text"> Specialists</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_customers">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-home"> </span>
                            </span>
                            <span class="nav-link-text"> Customers</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_pets_categories">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-home"> </span>
                            </span>
                            <span class="nav-link-text"> Pets Categories</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_pets">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-home"> </span>
                            </span>
                            <span class="nav-link-text"> Pets</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-copy"></span>
                            </span>
                            <span class="nav-link-text">Ailments</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="admin_ailment">Ailment </a></li>
                        <li class="nav-item"><a class="nav-link" href="admin_category_ailments">Category Ailments</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_clinic_vists">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-home"> </span>
                            </span>
                            <span class="nav-link-text"> Clinic Visits</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#page" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-copy"></span>
                            </span>
                            <span class="nav-link-text">Reports</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="page" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item"><a class="nav-link" href="admin_reports_customer_pets">Customer Pets </a></li>
                        <li class="nav-item"><a class="nav-link" href="admin_reports_pets_ailments">Pets Ailments</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin_reports_clinic_vists">Clinic Visits</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin_reports_customers">Customers</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin_reports_specialists">Specialists</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">
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