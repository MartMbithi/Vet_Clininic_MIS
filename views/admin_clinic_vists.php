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

/* Add Clinic Visit  */
if (isset($_POST['add_visit'])) {
    $visit_id = $sys_gen_id;
    $visit_date = $_POST['visit_date'];
    $visit_customer_pet_id  = $_POST['visit_customer_pet_id'];
    $visit_ailment = $_POST['visit_ailment'];
    $visit_specialist_id = $_POST['visit_specialist_id'];
    $visit_report = $_POST['visit_report'];

    $query = "INSERT INTO clinic_visit (visit_id, visit_date, visit_customer_pet_id, visit_ailment, visit_specialist_id, visit_report) VALUES(?,?,?,?,?)";

    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssssss', $visit_id, $visit_date, $visit_customer_pet_id, $visit_ailment, $visit_specialist_id, $visit_report);
    $stmt->execute();

    if ($stmt) {
        $success = "Clinic Visit Added";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}


/* Update Clinic Visit */
if (isset($_POST['update_clinic_visit'])) {
    $visit_id = $_POST['visit_id'];
    $visit_date = $_POST['visit_date'];
    $visit_ailment = $_POST['visit_ailment'];
    $visit_report = $_POST['visit_report'];


    $query = "UPDATE clinic_visit  SET visit_date =?, visit_ailment =?, visit_report=? WHERE visit_id = ?";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssss', $visit_date, $visit_ailment, $visit_report, $visit_id);
    $stmt->execute();

    if ($stmt) {
        $success = "Clinic Visit Updated";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}


/* Delete  */
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $adn = "DELETE FROM  clinic_visit WHERE visit_id = ? ";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $delete);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=admin_clinic_vists");
    } else {
        $info = "Please Try Again Or Try Later";
    }
}

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
                <h2 class="text-center">Clinic Visits</h2>
                <hr>
                <div class="text-right">
                    <a href="#add_modal" class="btn btn-primary" data-toggle="modal">
                        Add Clinic Visit
                    </a>
                </div>
                <br>
                <!-- Add Modal -->
                <div class="modal fade" id="add_modal">
                    <div class="modal-dialog  modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Fill All Fields </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add Module Form -->
                                <form method="post" enctype="multipart/form-data" role="form">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">Visit Date</label>
                                                <input type="date" required name="visit_date" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Pet Name</label>
                                                <select type="text" required name="visit_customer_pet_id" class="form-control">
                                                    <?php
                                                    $ret = "SELECT * FROM customer_pets cp 
                                                    INNER JOIN customers c ON c.customer_id = cp.customer_pet_customer_id
                                                    INNER JOIN pets p ON p.pet_id =cp.customer_pet_pet_id ";
                                                    $stmt = $mysqli->prepare($ret);
                                                    $stmt->execute(); //ok
                                                    $res = $stmt->get_result();
                                                    while ($pets = $res->fetch_object()) {
                                                    ?>
                                                        <option value="<?php echo $pets->customer_pet_id; ?>"><?php echo $pets->pet_name; ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Visit Ailment</label>
                                                <select type="text" required name="visit_ailment" class="form-control">
                                                    <?php
                                                    $ret = "SELECT * FROM ailment";
                                                    $stmt = $mysqli->prepare($ret);
                                                    $stmt->execute(); //ok
                                                    $res = $stmt->get_result();
                                                    while ($ailment = $res->fetch_object()) {
                                                    ?>
                                                        <option><?php echo $ailment->ailment_name; ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Clinic Specialist</label>
                                                <select type="text" required name="visit_ailment" class="form-control">
                                                    <?php
                                                    $ret = "SELECT * FROM specialist";
                                                    $stmt = $mysqli->prepare($ret);
                                                    $stmt->execute(); //ok
                                                    $res = $stmt->get_result();
                                                    while ($user = $res->fetch_object()) {
                                                    ?>
                                                        <option value="<?php echo $user->specialist_id; ?>"><?php echo $user->specialist_name; ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="">Visit Report</label>
                                                <textarea type="text" required name="visit_report" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="add_visit" class="btn btn-primary">Add Ailment</button>
                                    </div>
                                </form>
                                <!-- End Module Form -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                <div class="card mb-6">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Pet Details</th>
                                        <th>Customer Details</th>
                                        <th>Ailment</th>
                                        <th>Visit Date</th>
                                        <th>Specialist Details</th>
                                        <th>Manage</th>
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
                                            <td><?php echo $visit->visit_ailment; ?></td>
                                            <td><?php echo date('d M Y', strtotime($visit->visit_date)); ?></td>
                                            <td>
                                                <a class="badge badge-primary" data-toggle="modal" href="#update-<?php echo $visit->visit_id; ?>">Update</a>
                                                <!-- Update Modal -->
                                                <div class="modal fade" id="update-<?php echo $visit->visit_id; ?>">
                                                    <div class="modal-dialog  modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Fill All Fields </h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Add Module Form -->

                                                                <!-- End Module Form -->
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->

                                                <a class="badge badge-danger" data-toggle="modal" href="#delete-<?php echo $visit->visit_id; ?>">Delete Category</a>
                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete-<?php echo $visit->visit_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">CONFIRM DELETE</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center text-danger">
                                                                <h4>Delete Clinic Visit Record</h4>
                                                                <br>
                                                                <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                                <a href="admin_clinic_vists?delete=<?php echo $visit->visit_id; ?>" class="text-center btn btn-danger"> Delete </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->
                                            </td>
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