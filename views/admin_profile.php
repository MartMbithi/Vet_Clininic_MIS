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
admin();

/* Update Profile */
if (isset($_POST['update_profile'])) {
    $login_admin_id = $_SESSION['login_admin_id'];
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_mobile = $_POST['admin_mobile'];
    /* Shitty Approach */
    $update_pwd = mysqli_query($mysqli, "UPDATE  admin SET admin_name = '$admin_name', admin_email = '$admin_email', admin_mobile = '$admin_mobile'
     WHERE admin_id = '$login_admin_id'");
    $success = 'Profile Details  Updated';
}


/* Update Login Details */
if (isset($_POST['update_login_details'])) {
    $login_admin_id = $_SESSION['login_admin_id'];
    $new_password = sha1(md5($_POST['new_password']));
    $confirm_password = sha1(md5($_POST['confirm_password']));
    $login_username = $_POST['login_username'];

    /* Check If Old Passwords Match */
    if ($new_password == $confirm_password) {
        $update_pwd = mysqli_query($mysqli, "UPDATE  login SET login_password='$new_password', login_username = '$login_username' WHERE login_admin_id = '$login_admin_id'");
        $success = 'Login Details  Updated';
    } else {
        $err = 'Password Does Not Match';
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
                <?php require_once('../partials/top_nav.php');
                /* Load This partial With Logged In User Session */
                $login_admin_id = $_SESSION['login_admin_id'];
                $ret = "SELECT * FROM admin a
                 INNER JOIN login l ON a.admin_id = l.login_admin_id
                 WHERE a.admin_id = '$login_admin_id'  ";
                $stmt = $mysqli->prepare($ret);
                $stmt->execute(); //ok
                $res = $stmt->get_result();
                while ($user = $res->fetch_object()) {
                ?>

                    <div class="col-12">
                        <div class="card mb-3 btn-reveal-trigger">
                            <div class="card-header position-relative min-vh-25 mb-8">
                                <div class="cover-image">
                                    <div class="bg-holder rounded-soft rounded-bottom-0" style="background-image:url(../public/uploads/system_data/background.jpeg);"></div>
                                </div>
                                <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                                        <img src="../public/uploads/user_data/no-profile.png" width="200" alt="" data-dz-thumbnail>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="mb-1"><?php echo $user->admin_name; ?><small class="fas fa-check-circle text-primary ml-1" data-toggle="tooltip" data-placement="right" title="Verified" data-fa-transform="shrink-4 down-2"></small></h4>
                                        <h5 class="fs-0 font-weight-normal"><?php echo $user->admin_email; ?></h5>
                                        <p class="text-500"><?php echo $user->admin_mobile; ?></p>
                                        <hr class="border-dashed my-4 d-lg-none" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-lg-6 pr-lg-2">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Profile Settings</h5>
                                    </div>
                                    <div class="card-body bg-light">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="first-name">Name</label><input name="admin_name" required value="<?php echo $user->admin_name; ?>" class="form-control" id="first-name" type="text" value="Anthony"></div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="email1">Email</label><input name="admin_email" required value="<?php echo $user->admin_email; ?>" class="form-control" id="email1" type="text" value="anthony@gmail.com"></div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="phone">Phone</label><input name="admin_mobile" required value="<?php echo $user->admin_mobile; ?>" class="form-control" id="phone" type="text" value="+44098098304"></div>
                                                </div>

                                                <div class="col-12 d-flex justify-content-end"><button class="btn btn-primary" name="update_profile" type="submit">Update </button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-lg-2">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Login Settings</h5>
                                    </div>
                                    <div class="card-body bg-light">
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="first-name">Login Username</label><input required name="login_username" value="<?php echo $user->login_username; ?>" class="form-control" id="first-name" type="text" value="Anthony"></div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="email1">New Password</label><input name="new_password" required class="form-control" id="email1" type="password"></div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="phone">Confirm New Password</label><input required name="confirm_password" class="form-control" id="phone" type="password"></div>
                                                </div>

                                                <div class="col-12 d-flex justify-content-end"><button class="btn btn-primary" name="update_login_details" type="submit">Update </button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                } ?>
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