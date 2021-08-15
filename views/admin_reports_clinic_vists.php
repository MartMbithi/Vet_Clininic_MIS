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
require_once('../config/codeGen.php');
require_once('../config/config.php');
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
                <h2 class="text-center">Clinic Visits Reports</h2>
                <hr>

                <div class="card mb-6">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-0">
                        <div class="table-responsive">
                            <table id="export-data-table" class="">
                                <thead>
                                    <tr>
                                        <th>Pet </th>
                                        <th>Customer </th>
                                        <th>Specialist </th>
                                        <th>Ailment</th>
                                        <th>Visit Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM clinic_visit cv 
                                    INNER JOIN customer_pets cp ON cp.customer_pet_id = cv.visit_customer_pet_id
                                    INNER JOIN pets p ON p.pet_id = cp.customer_pet_pet_id
                                    INNER JOIN customer c ON c.customer_id = cp.customer_pet_customer_id
                                    INNER JOIN pets_categories pc ON pc.category_id = p.pet_category_id
                                    INNER JOIN specialist s ON s.specialist_id = cv.visit_specialist_id ";
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

                                        </tr>
                                    <?php
                                    }
                                    ?>

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