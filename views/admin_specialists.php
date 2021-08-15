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
/* Add Specialist */
if (isset($_POST['add_specialist'])) {
    /* Specialist Attributes */
    $specialist_id = $sys_gen_id;
    $specialist_name = $_POST['specialist_name'];
    $specialist_email  = $_POST['specialist_email'];
    $specialist_mobile  = $_POST['specialist_mobile'];
    $specialist_major  = $_POST['specialist_major'];

    /*  Login Attributes */
    $login_id = $sys_gen_id_alt_1;
    $login_username = $_POST['login_username'];
    $login_password = sha1(md5($_POST['login_password']));
    $login_rank = 'Specialist';


    /* Prevent Double Entries */
    $sql = "SELECT * FROM  specialist WHERE  specialist_email='$specialist_email' || specialist_mobile = '$custspecialist_mobileomer_mobile'  ";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($specialist_email == $row['specialist_email'] || $specialist_mobile == $row['specialist_mobile']) {
            $err =  "User With This Email Or Phone Number Exists";
        }
    } else {
        /* Persist Customer Details */
        $query = "INSERT INTO specialist (specialist_id, specialist_name, specialist_email, specialist_mobile, specialist_major) VALUES(?,?,?,?,?)";
        $login = "INSERT INTO login (login_id, login_username, login_password, login_rank, login_specialist_id) VALUES(?,?,?,?,?)";

        $stmt = $mysqli->prepare($query);
        $loginstmt = $mysqli->prepare($login);

        $rc = $stmt->bind_param('sssss', $specialist_id, $specialist_name, $specialist_email, $specialist_mobile, $specialist_major);
        $rc = $loginstmt->bind_param('sssss', $login_id, $login_username, $login_password, $login_rank, $specialist_id);

        $stmt->execute();
        $loginstmt->execute();

        if ($stmt && $loginstmt) {
            $success = "$specialist_name Account Created";
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}
/* Update Specialist Profile */
if (isset($_POST['update_specialist'])) {
    /* Specialist Attributes */
    $specialist_id = $_POST['specialist_id'];
    $specialist_name = $_POST['specialist_name'];
    $specialist_email  = $_POST['specialist_email'];
    $specialist_mobile  = $_POST['specialist_mobile'];
    $specialist_major  = $_POST['specialist_major'];

    $query = "UPDATE specialist SET specialist_name = ?, specialist_email =? , specialist_mobile =?, specialist_major =? WHERE specialist_id = ?";

    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sssss', $specialist_name, $specialist_email, $specialist_mobile, $specialist_major, $specialist_id);
    $stmt->execute();

    if ($stmt) {
        $success = "$specialist_name Account Updated";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}

/* Update Login Details */
if (isset($_POST['add_specialist'])) {
    /*  Login Attributes */
    $login_specialist_id = $_POST['login_specialist_id'];
    $login_username = $_POST['login_username'];
    $login_password = sha1(md5($_POST['login_password']));

    $login = "UPDATE login SET login_username =?, login_password =? WHERE login_specialist_id =?";

    $loginstmt = $mysqli->prepare($login);

    $rc = $loginstmt->bind_param('sss', $login_username, $login_password, $login_specialist_id);

    $loginstmt->execute();

    if ($loginstmt) {
        $success = "$login_username Account Updated";
    } else {
        $info = "Please Try Again Or Try Later";
    }
}

/* Delete Specialist */
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $adn = "DELETE FROM  specialist WHERE specialist_id = ? ";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $delete);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=admin_specialists");
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
                <h2 class="text-center">Specialists</h2>
                <hr>
                <div class="text-right">
                    <a href="#add_modal" class="btn btn-primary" data-toggle="modal">
                        Add Specialist
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
                                                <input type="text" required name="specialist_name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Email Address</label>
                                                <input type="text" required name="specialist_email" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="">Mobile</label>
                                                <input type="text" required name="specialist_mobile" class="form-control">
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
                                                <label for="">Specialization / Major</label>
                                                <textarea type="text" required name="specialist_major" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="add_specialist" class="btn btn-primary">Add Specialist</button>
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
                                        <th>Specialization</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM specialist s
                                    INNER JOIN login l ON s.specialist_id = l.login_admin_id";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($user = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <th><?php echo $user->specialist_name; ?></th>
                                            <td>
                                                Email : <?php echo $user->specialist_email; ?><br>
                                                Phone : <?php echo $user->specialist_mobile; ?>
                                            </td>
                                            <td><?php echo $user->specialist_major; ?></td>
                                            <td>
                                                <a class="badge bg-warning" data-toggle="modal" href="#update-<?php echo $user->specialist_id; ?>">Update</a>
                                                <a class="badge bg-warning" data-toggle="modal" href="#login-<?php echo $user->specialist_id; ?>">Update Login</a>
                                                <a class="badge bg-danger" data-toggle="modal" href="#delete-<?php echo $user->specialist_id; ?>">Delete</a>
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