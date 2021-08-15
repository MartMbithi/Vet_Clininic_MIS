<?php
/*
 * Created on Sun Aug 15 2021
 *
 * https://martdev.info
 * martdevelopers254@gmail.com
 * +254 740 847 563 / +254 737 229 776 
 *
 * The MIT License (MIT)
 * Copyright (c) 2021 MartDevelopers Inc
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
session_start();
require_once('../config/checklogin.php');
require_once('../config/config.php');
require_once('../partials/customer_analytics.php');
customer();
require_once('../partials/head.php');
?>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <div class="container" data-layout="container">
            <!-- Top Bar -->
            <?php require_once('../partials/customer_topbar.php'); ?>

            <!-- Sidebar -->
            <?php require_once('../partials/customer_sidebar.php'); ?>

            <div class="content">
                <!-- Navigation -->
                <?php require_once('../partials/customer_top_nav.php'); ?>


                <div class="card-deck">
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(../public/img/illustrations/corner-1.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Registered Pets</h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning">
                                <?php echo $my_pets; ?>
                            </div>
                            <a class="font-weight-semi-bold fs--1 text-nowrap" href="customer_pets">See all
                                <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span>
                            </a>
                        </div>
                    </div>
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(../public/img/illustrations/corner-2.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Pets Ailments</h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info">
                                <?php echo $pet_ailments; ?>
                            </div>
                            <a class="font-weight-semi-bold fs--1 text-nowrap" href="customer_pet_ailments">See All
                                <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(../public/img/illustrations/corner-3.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>My Clinic Visits</h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif">
                                <?php echo $clininc_visits; ?>
                            </div>
                            <a class="font-weight-semi-bold fs--1 text-nowrap" href="customer_clininc_visits">See All
                                <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-6">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">My Recent Clinic Visits</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pet </th>
                                    <th>Customer </th>
                                    <th>Specialist </th>
                                    <th>Ailment</th>
                                    <th>Visit Date</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $customer_id = $_SESSION['login_customer_id'];
                                $ret = "SELECT * FROM clinic_visit cv 
                                    INNER JOIN customer_pets cp ON cp.customer_pet_id = cv.visit_customer_pet_id
                                    INNER JOIN pets p ON p.pet_id = cp.customer_pet_pet_id
                                    INNER JOIN customer c ON c.customer_id = cp.customer_pet_customer_id
                                    INNER JOIN pets_categories pc ON pc.category_id = p.pet_category_id
                                    INNER JOIN specialist s ON s.specialist_id = cv.visit_specialist_id 
                                    WHERE c.customer_id = '$customer_id'";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($visit = $res->fetch_object()) {
                                ?>
                                    <tr>
                                        <th>
                                            Name: <?php echo $visit->pet_name; ?><br>
                                            Age: <?php echo $visit->pet_age; ?><br>
                                            Sex:<?php echo $visit->pet_sex; ?> <br>
                                            Category: <?php echo $visit->category_name; ?>
                                        </th>
                                        <th>
                                            Name: <?php echo $visit->customer_name; ?><br>
                                            Email: <?php echo $visit->customer_email; ?><br>
                                            Mobile:<?php echo $visit->customer_mobile; ?> <br>
                                        </th>
                                        <th>
                                            Name: <?php echo $visit->specialist_name; ?><br>
                                            Email: <?php echo $visit->specialist_email; ?><br>
                                            Mobile:<?php echo $visit->specialist_mobile; ?> <br>
                                        </th>
                                        <td><?php echo $visit->visit_ailment; ?></td>
                                        <td><?php echo date('d M Y', strtotime($visit->visit_date)); ?></td>
                                        <td>
                                            <a class="badge badge-success" data-toggle="modal" href="#u-<?php echo $visit->visit_id; ?>">View Report</a>
                                            <!-- Update Modal -->
                                            <div class="modal fade" id="u-<?php echo $visit->visit_id; ?>">
                                                <div class="modal-dialog  modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Visit Report </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                <?php echo $visit->visit_report; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>


                    </div>
                </div>

                <?php require_once('../partials/footer.php'); ?>
            </div>

        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php require_once('../partials/scripts.php'); ?>
</body>



</html>