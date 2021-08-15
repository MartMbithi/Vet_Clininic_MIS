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

/* Add Pet CAtegory  */
if (isset($_POST['add_category'])) {
    $category_id = $sys_gen_id;
    $category_name = $_POST['category_name'];
    $category_desc  = $_POST['category_desc'];

    /* Prevent Double Entries */
    $sql = "SELECT * FROM  pets_categories WHERE  category_name='$category_name' ";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($category_name == $row['category_name']) {
            $err =  "Category Name Already Exists";
        }
    } else {
        $query = "INSERT INTO pets_categories (category_id, category_name, category_desc) VALUES(?,?,?)";

        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('sss', $category_id, $category_name, $category_desc);
        $stmt->execute();

        if ($stmt) {
            $success = "$category_name Created";
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}

/* Update Category */
if (isset($_POST['update_category'])) {
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    $category_desc  = $_POST['category_desc'];


    $query = "UPDATE pets_categories  SET category_name =?, category_desc =? WHERE category_id = ?";

    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sss', $category_name, $category_desc, $category_id);
    $stmt->execute();

    if ($stmt) {
        $success = "$category_name Updated";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}


/* Delete  */
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $adn = "DELETE FROM  pets_categories WHERE category_id = ? ";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $delete);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=admin_pets_categories");
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
                <h2 class="text-center">Customers</h2>
                <hr>
                <div class="text-right">
                    <a href="#add_modal" class="btn btn-primary" data-toggle="modal">
                        Add Customer
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
                                                <label for="">Full Name</label>
                                                <input type="text" required name="customer_name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Email Address</label>
                                                <input type="text" required name="customer_email" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Mobile</label>
                                                <input type="text" required name="customer_mobile" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Login Username</label>
                                                <input type="text" required name="login_username" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Login Password</label>
                                                <input type="password" required name="login_password" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Profession</label>
                                                <textarea type="text" required name="customer_major" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="add_customer" class="btn btn-primary">Add Customer</button>
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
                                        <th>Name</th>
                                        <th>Contacts</th>
                                        <th>Profession</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM customer c
                                    INNER JOIN login l ON c.customer_id = l.login_customer_id";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($user = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <th><?php echo $user->customer_name; ?></th>
                                            <td>
                                                Email: <?php echo $user->customer_email; ?><br>
                                                Phone: <?php echo $user->customer_mobile; ?>
                                            </td>
                                            <td><?php echo $user->customer_major; ?></td>
                                            <td>
                                                <a class="badge badge-primary" data-toggle="modal" href="#update-<?php echo $user->customer_id; ?>">Update Profile</a>
                                                <!-- Update Modal -->
                                                <div class="modal fade" id="update-<?php echo $user->customer_id; ?>">
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
                                                                            <div class="form-group col-md-4">
                                                                                <label for="">Full Name</label>
                                                                                <input type="text" value="<?php echo $user->customer_name; ?>" required name="customer_name" class="form-control">
                                                                                <input type="hidden" value="<?php echo $user->customer_id; ?>" required name="customer_id" class="form-control">

                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="">Email Address</label>
                                                                                <input type="text" required value="<?php echo $user->customer_email; ?>" name="customer_email" class="form-control">
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="">Mobile</label>
                                                                                <input type="text" value="<?php echo $user->customer_mobile; ?>" required name="customer_mobile" class="form-control">
                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <label for="">Profession / Major</label>
                                                                                <textarea type="text" required name="customer_major" rows="5" class="form-control"><?php echo $user->customer_major; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button type="submit" name="update_customer" class="btn btn-primary">Update Customer</button>
                                                                    </div>
                                                                </form>
                                                                <!-- End Module Form -->
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->
                                                <a class="badge badge-warning" data-toggle="modal" href="#login-<?php echo $user->customer_id; ?>">Update Login</a>
                                                <!-- Update Login -->
                                                <div class="modal fade" id="login-<?php echo $user->customer_id; ?>">
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
                                                                                <label for="">Login Username</label>
                                                                                <input type="text" value="<?php echo $user->login_username; ?>" required name="login_username" class="form-control">
                                                                                <input type="hidden" value="<?php echo $user->login_customer_id; ?>" required name="login_customer_id" class="form-control">

                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="">Login Password</label>
                                                                                <input type="password" required name="login_password" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button type="submit" name="update_login" class="btn btn-primary">Update Customer</button>
                                                                    </div>
                                                                </form>
                                                                <!-- End Module Form -->
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->
                                                <a class="badge badge-danger" data-toggle="modal" href="#delete-<?php echo $user->customer_id; ?>">Delete Account</a>
                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete-<?php echo $user->customer_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">CONFIRM DELETE</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center text-danger">
                                                                <h4>Delete <?php echo $user->customer_name; ?> Account?</h4>
                                                                <br>
                                                                <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                                                                <a href="admin_customers?delete=<?php echo $user->customer_id; ?>" class="text-center btn btn-danger"> Delete </a>
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