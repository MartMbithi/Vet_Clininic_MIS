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
require_once('../config/config.php');
/* Login */
if (isset($_POST['login'])) {
    $login_username = trim($_POST['login_username']);
    $login_password = sha1(md5($_POST['login_password']));
    $stmt = $mysqli->prepare("SELECT login_username, login_password, login_rank, login_customer_id, login_specialist_id, login_admin_id  
    FROM login  WHERE  login_username =? AND login_password =? ");
    $stmt->bind_param('ss', $login_username, $login_password);
    $stmt->execute();
    $stmt->bind_result($login_username, $login_password, $login_rank, $login_customer_id, $login_specialist_id, $login_admin_id);
    $rs = $stmt->fetch();

    //Persist User Sessions
    $_SESSION['login_admin_id'] = $login_admin_id;
    $_SESSION['login_customer_id'] = $login_customer_id;
    $_SESSION['login_specialist_id'] = $login_specialist_id;
    $_SESSION['login_rank'] = $login_rank;

    if ($rs && $login_rank == 'Administrator') {
        header("location:admin_dashboard");
    } else if ($rs && $login_rank == 'Specialist') {
        header("location:specialist_dashboard");
    } else if ($rs && $login_rank == 'Customer') {
        header("location:customer_dashboard");
    } else {
        $err = "Incorrect Login Username Or Password";
    }
}
require_once('../partials/head.php');
?>

<body class="bg-white">
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <div class="container-fluid">
            <div class="row min-vh-100 bg-100">
                <div class="col-6 d-none d-lg-block">
                    <div class="bg-holder" style="background-image:url(../public/uploads/system_data/background.jpeg);background-position: 50% 20%;"></div>
                    <!--/.bg-holder-->
                </div>
                <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-lg-9 col-xl-8 col-xxl-6">
                            <div class="card">
                                <div class="card-header bg-circle-shape text-center p-2"><a class="text-white text-sans-serif font-weight-extra-bold fs-4 z-index-1 position-relative" href="../">Pet Health Management System</a></div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3>Sign Up</h3>
                                        <p class="mb-0 fs--1"><span class="font-weight-semi-bold">Already Has Account ? </span><a href="../">Login</a></p>
                                    </div>
                                    <form method="POST">
                                        <div class="form-group">
                                            <label for="split-name">
                                                Full Name
                                            </label>
                                            <input class="form-control" required type="text" name="customer_name" id="split-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="split-name">
                                                Mobile Phone Number
                                            </label>
                                            <input class="form-control" required type="text" name="customer_mobile" id="split-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="split-email">
                                                Email Address
                                            </label>
                                            <input class="form-control" required name="customer_email" type="email" id="split-email" />
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label for="split-password">
                                                    Login Username
                                                </label>
                                                <input class="form-control" required type="login_username" id="split-password" />
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="split-confirm-password">
                                                    Login Password
                                                </label>
                                                <input class="form-control" required type="password" name="login_password" id="split-confirm-password" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block mt-3" type="submit" name="register">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>