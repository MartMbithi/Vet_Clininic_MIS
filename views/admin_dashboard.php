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
require_once('./partials/admin_analytics.php');
admin();
require_once('../partials/head.php');
?>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <div class="container" data-layout="container">
            <!-- Top Bar -->
            <?php require_once('../partials/topbar.php'); ?>

            <!-- Sidebar -->
            <?php require_once('../partials/sidebar.php'); ?>

            <div class="content">
                <!-- Navigation -->
                <?php require_once('../partials/top_nav.php'); ?>


                <div class="card-deck">
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(../public/img/illustrations/corner-1.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Customers</h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning">
                                <?php echo $customers; ?>
                            </div>
                            <a class="font-weight-semi-bold fs--1 text-nowrap" href="admin_customers">See all
                                <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span>
                            </a>
                        </div>
                    </div>
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(../public/img/illustrations/corner-2.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Specialists</h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info">
                                <?php echo $specialists; ?>
                            </div>
                            <a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">See All
                                <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(../public/img/illustrations/corner-3.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Pets</h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif">
                                <?php echo $pets; ?>
                            </div>
                            <a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">See All
                                <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-6">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Recent Clinic Visits</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Pet Details</th>
                                        <th>Ailment</th>
                                        <th>Specialist</th>
                                        <th>Visit Date</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Steven</td>
                                        <td>Speilberg</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


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