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
if (isset($_POST['Reset_Password'])) {
    $login_username = $_POST['login_username'];
    $query = mysqli_query($mysqli, "SELECT * from `login` WHERE Login_username = '" . $login_username . "' ");
    $num_rows = mysqli_num_rows($query);

    if ($num_rows > 0) {
        $n = date('y'); //Load Mumble Jumble
        $new_password = bin2hex(random_bytes($n));
        $query = "UPDATE login SET  login_password=? WHERE  login_username =? ";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('ss', $new_password, $login_username);
        $stmt->execute();
        if ($stmt) {
            $_SESSION['login_username'] = $login_username;
            $success = "Password Reset" && header("refresh:1; url=confirm_password");
        } else {
            $err = "Password reset failed";
        }
    } else {
        $err = "User Account Does Not Exist";
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
                                        <h3>Reset Password</h3>
                                    </div>
                                    <form method="POST">
                                        <div class="form-group">
                                            <label for="split-email">
                                                Login Username
                                            </label>
                                            <input class="form-control" required name="login_username" type="text" id="split-email" />
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block mt-3" type="submit" name="Reset_Password">Reset Password</button>
                                        </div>
                                    </form>
                                    <a class="fs--1 text-600" href="../">Remebered Password<span class="d-inline-block ml-1">&rarr;</span></a>
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