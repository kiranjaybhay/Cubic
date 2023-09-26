<?php

include_once('../../config/connetion.php');
include_once('../layouts/header.php')
?>
<!-- ===== Main-Wrapper ===== -->
<div id="wrapper">
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <!-- ===== Top-Navigation ===== -->
    <?php
    include_once('../layouts/navbar.php')
    ?>
    <!-- ===== Top-Navigation-End ===== -->
    <!-- ===== Left-Sidebar ===== -->
    <?php
    include_once('../layouts/sidebar.php')
    ?>
    <!-- ===== Left-Sidebar-End ===== -->
    <!-- ===== Page-Content ===== -->
    <div class="page-wrapper">
        <!-- ===== Page-Container ===== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0"> Table Data</h3>
                        <p class="text-muted m-b-30"> table </p>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr no</th>
                                        <th>Date</th>
                                        <th>Categary</th>
                                        <th>Perticular</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $sql = "SELECT * FROM user";
                                // var_dump($sql);die;
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    $sr = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><?php echo $row['id']; ?></td>
                                        <td class="text-center"><?php echo $row['date']; ?></td>
                                        <td class="text-center"><?php echo $row['categary']; ?></td>
                                        <td class="text-center"><?php echo $row['perticular']; ?></td>
                                        <td class="text-center"><?php echo $row['description']; ?></td>
                                        <td>
                                            <a href="view.php?id=<?php echo $row['id']; ?>">View</a>
                                            <a href="form_layout.php?id=<?php echo $row['id']; ?>">Edit</a>
                                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete-button">Delete</a>

                                        </td>
                                    </tr>

                                    <?php }
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== Right-Sidebar ===== -->
            <?php
            include_once('../layouts/right-sidebar.php')
            ?>
            <!-- ===== Right-Sidebar-End ===== -->
        </div>
        <!-- ===== Page-Container-End ===== -->
        <?php
        include_once('../layouts/footer.php')
        ?>

    </div>
    <!-- ===== Page-Content-End ===== -->
</div>
<!-- ===== Main-Wrapper-End ===== -->
<!-- ==============================
        Required JS Files
    =============================== -->
<!-- ===== jQuery ===== -->

<?php
include_once('../layouts/scripts.php')
?>