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
specialist();

/* Add Pet  */
if (isset($_POST['add_pet'])) {
    $pet_id = $sys_gen_id;
    $pet_name = $_POST['pet_name'];
    $pet_category_id  = $_POST['pet_category_id'];
    $pet_age  = $_POST['pet_age'];
    $pet_sex  = $_POST['pet_sex'];

    /* Pet Customer Details */
    $customer_pet_id = $sys_gen_id_alt_1;
    $customer_pet_customer_id  = $_POST['customer_pet_customer_id'];

    $query = "INSERT INTO pets (pet_id, pet_name, pet_category_id, pet_age, pet_sex  ) VALUES(?,?,?,?,?)";
    $pet_owner = "INSERT INTO customer_pets (customer_pet_id, customer_pet_customer_id, customer_pet_pet_id) VALUES(?,?,?)";

    $stmt = $mysqli->prepare($query);
    $pet_owner_stmt = $mysqli->prepare($pet_owner);

    $rc = $stmt->bind_param('sssss', $pet_id, $pet_name, $pet_category_id, $pet_age, $pet_sex);
    $rc = $pet_owner_stmt->bind_param('sss', $customer_pet_id, $customer_pet_customer_id, $pet_id);

    $stmt->execute();
    $pet_owner_stmt->execute();

    if ($stmt && $pet_owner_stmt) {
        $success = "$pet_name Added";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}


/* Update Pet */
if (isset($_POST['update_pet'])) {
    $pet_id = $_POST['pet_id'];
    $pet_name = $_POST['pet_name'];
    $pet_age  = $_POST['pet_age'];
    $pet_sex  = $_POST['pet_sex'];


    $query = "UPDATE pets  SET pet_name =?, pet_age =?, pet_sex = ? WHERE pet_id = ?";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssss', $pet_name, $pet_age, $pet_sex, $pet_id);
    $stmt->execute();

    if ($stmt) {
        $success = "Pet Updated";
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
            <?php require_once('../partials/specialist_topbar.php'); ?>

            <!-- Sidebar -->
            <?php require_once('../partials/specialist_sidebar.php'); ?>

            <div class="content">
                <!-- Navigation -->
                <?php require_once('../partials/specialist_top_nav.php'); ?>
                <h2 class="text-center">Pets</h2>
                <hr>
                <div class="text-right">
                    <a href="#add_modal" class="btn btn-primary" data-toggle="modal">
                        Add Pet
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
                                                <label for="">Pet Name</label>
                                                <input type="text" required name="pet_name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Pet Age</label>
                                                <input type="text" required name="pet_age" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Pet Sex</label>
                                                <select type="text" required name="pet_sex" class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Pet Category</label>
                                                <select type="text" required name="pet_category_id" class="form-control">
                                                    <?php
                                                    $ret = "SELECT * FROM pets_categories";
                                                    $stmt = $mysqli->prepare($ret);
                                                    $stmt->execute(); //ok
                                                    $res = $stmt->get_result();
                                                    while ($category = $res->fetch_object()) {
                                                    ?>
                                                        <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Pet Owner Name</label>
                                                <select type="text" required name="customer_pet_customer_id" class="form-control">
                                                    <?php
                                                    $ret = "SELECT * FROM customer";
                                                    $stmt = $mysqli->prepare($ret);
                                                    $stmt->execute(); //ok
                                                    $res = $stmt->get_result();
                                                    while ($user = $res->fetch_object()) {
                                                    ?>
                                                        <option value="<?php echo $user->customer_id; ?>"><?php echo $user->customer_name; ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="add_pet" class="btn btn-primary">Add Pet</button>
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
                                        <th>Pet Owner Details</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM customer_pets cp 
                                    INNER JOIN pets p ON p.pet_id = cp.customer_pet_pet_id
                                    INNER JOIN customer c ON c.customer_id = cp.customer_pet_customer_id
                                    INNER JOIN pets_categories pc ON  pc.category_id = p.pet_category_id";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($pet = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <th>
                                                Name: <?php echo $pet->pet_name; ?><br>
                                                Age: <?php echo $pet->pet_age; ?><br>
                                                Sex: <?php echo $pet->pet_sex; ?><br>
                                                Category : <?php echo $pet->category_name; ?>
                                            </th>
                                            <th>
                                                Name: <?php echo $pet->customer_name; ?><br>
                                                Email: <?php echo $pet->customer_email; ?><br>
                                                Mobile No: <?php echo $pet->customer_mobile; ?><br>
                                            </th>
                                            <td>
                                                <a class="badge badge-primary" data-toggle="modal" href="#update-<?php echo $pet->pet_id; ?>">Update</a>
                                                <!-- Update Modal -->
                                                <div class="modal fade" id="update-<?php echo $pet->pet_id; ?>">
                                                    <div class="modal-dialog  modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Fill All Fields </h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" enctype="multipart/form-data" role="form">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="">Pet Name</label>
                                                                                <input type="text" value="<?php echo $pet->pet_name; ?>" required name="pet_name" class="form-control">
                                                                                <input type="hidden" value="<?php echo $pet->pet_id; ?>" required name="pet_id" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="">Pet Age</label>
                                                                                <input type="text" value="<?php echo $pet->pet_age; ?>" required name="pet_age" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="">Pet Sex</label>
                                                                                <select type="text" required name="pet_sex" class="form-control">
                                                                                    <option>Male</option>
                                                                                    <option>Female</option>
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button type="submit" name="update_pet" class="btn btn-primary">Update Pet</button>
                                                                    </div>
                                                                </form>
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