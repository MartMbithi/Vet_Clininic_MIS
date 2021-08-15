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

/* Add Ailment  */
if (isset($_POST['add_ailment'])) {
    $ailment_id = $sys_gen_id;
    $ailment_name = $_POST['ailment_name'];
    $ailment_desc  = $_POST['ailment_desc'];
    $ailment_signs = $_POST['ailment_signs'];

    /* Prevent Double Entries */
    $sql = "SELECT * FROM  ailment WHERE  ailment_name='$ailment_name' ";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if ($ailment_name == $row['ailment_name']) {
            $err =  "Ailment Name Already Exists";
        }
    } else {
        $query = "INSERT INTO ailment (ailment_id, ailment_name, ailment_desc, ailment_signs ) VALUES(?,?,?,?)";

        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('ssss', $ailment_id, $ailment_name, $ailment_desc, $ailment_signs);
        $stmt->execute();

        if ($stmt) {
            $success = "$ailment_name Added";
        } else {
            $info = "Please Try Again Or Try Later";
        }
    }
}

/* Update Ailment */
if (isset($_POST['update_ailment'])) {
    $ailment_id = $_POST['ailment_id'];
    $ailment_name = $_POST['ailment_name'];
    $ailment_desc  = $_POST['ailment_desc'];
    $ailment_signs = $_POST['ailment_signs'];


    $query = "UPDATE ailment  SET ailment_name =?, ailment_desc =?, ailment_signs=? WHERE ailment_id = ?";

    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssss', $ailment_name, $ailment_desc, $ailment_signs, $ailment_id);
    $stmt->execute();

    if ($stmt) {
        $success = "$ailment_name Updated";
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
                <h2 class="text-center">Pets Ailments</h2>
                <hr>
                <div class="text-right">
                    <a href="#add_modal" class="btn btn-primary" data-toggle="modal">
                        Add Ailment
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
                                            <div class="form-group col-md-12">
                                                <label for="">Ailment Name</label>
                                                <input type="text" required name="ailment_name" class="form-control">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="">Ailment Description</label>
                                                <textarea type="text" required name="ailment_desc" rows="5" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="">Ailment Symptoms</label>
                                                <textarea type="text" required name="ailment_signs" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="add_ailment" class="btn btn-primary">Add Ailment</button>
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
                                        <th>Ailment Name</th>
                                        <th>Ailment Details</th>
                                        <th>Ailment Signs And Symptoms</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM ailment";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($ailment = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <th><?php echo $ailment->ailment_name; ?></th>
                                            <td><?php echo $ailment->ailment_desc; ?></td>
                                            <td><?php echo $ailment->ailment_signs; ?></td>
                                            <td>
                                                <a class="badge badge-primary" data-toggle="modal" href="#update-<?php echo $ailment->ailment_id; ?>">Update</a>
                                                <!-- Update Modal -->
                                                <div class="modal fade" id="update-<?php echo $ailment->ailment_id; ?>">
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
                                                                            <div class="form-group col-md-12">
                                                                                <label for="">Ailment Name</label>
                                                                                <input type="text" value="<?php echo $ailment->ailment_name; ?>" required name="ailment_name" class="form-control">
                                                                                <input type="hidden" value="<?php echo $ailment->ailment_id; ?>" required name="ailment_id" class="form-control">

                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <label for="">Ailment Description</label>
                                                                                <textarea type="text" required name="ailment_desc" rows="5" class="form-control"><?php echo $ailment->ailment_desc; ?></textarea>
                                                                            </div>

                                                                            <div class="form-group col-md-12">
                                                                                <label for="">Ailment Symptoms</label>
                                                                                <textarea type="text" required name="ailment_signs" rows="5" class="form-control"><?php echo $ailment->ailment_signs; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button type="submit" name="update_ailment" class="btn btn-primary">Update Ailment</button>
                                                                    </div>
                                                                </form>
                                                                <!-- End Module Form -->
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