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

/* Add Category Ailments  */
if (isset($_POST['add_category'])) {
    $category_ailment_id = $sys_gen_id;
    $category_ailment_category_id = $_POST['category_ailment_category_id'];
    $category_ailment_ailment_id  = $_POST['category_ailment_ailment_id'];


    $query = "INSERT INTO category_ailments (category_ailment_id, category_ailment_category_id, category_ailment_ailment_id) VALUES(?,?,?)";

    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sss', $category_ailment_id, $category_ailment_category_id, $category_ailment_ailment_id);
    $stmt->execute();

    if ($stmt) {
        $success = "Category Ailment Added";
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
                <h2 class="text-center">Pet Categories Ailments</h2>
                <hr>
                <div class="text-right">
                    <a href="#add_modal" class="btn btn-primary" data-toggle="modal">
                        Add Category Ailment
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
                                                <label for="">Pet Category Name</label>
                                                <select type="text" required name="category_ailment_category_id" class="form-control">
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

                                            <div class="form-group col-md-6">
                                                <label for="">Ailment </label>
                                                <select type="text" required name="category_ailment_ailment_id" class="form-control">
                                                    <?php
                                                    $ret = "SELECT * FROM ailment";
                                                    $stmt = $mysqli->prepare($ret);
                                                    $stmt->execute(); //ok
                                                    $res = $stmt->get_result();
                                                    while ($ailment = $res->fetch_object()) {
                                                    ?>
                                                        <option value="<?php echo $ailment->ailment_id; ?>"><?php echo $ailment->ailment_name; ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
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
                                        <th>Pet Category Name</th>
                                        <th>Ailment Name</th>
                                        <th>Ailment Description</th>
                                        <th>Ailment Symptoms</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ret = "SELECT * FROM category_ailments ca 
                                    INNER JOIN pets_categories pc ON pc.category_id = ca.category_ailment_category_id
                                    INNER JOIN ailment a ON a.ailment_id = ca.category_ailment_ailment_id";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($category_ailment = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <th><?php echo $category_ailment->category_name; ?></th>
                                            <td><?php echo $category_ailment->ailment_name; ?></td>
                                            <td><?php echo $category_ailment->ailment_desc; ?></td>
                                            <td><?php echo $category_ailment->ailment_signs; ?></td>

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