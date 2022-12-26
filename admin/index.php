<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
 ?>

        

        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
            <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Reg. Admin
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                        $query="SELECT * FROM register ORDER BY id";

                                        $query_run=mysqli_query($connection,$query);

                                        $row=mysqli_num_rows($query_run);
                                        echo'<h1>' .$row.'</h1>';

                                        ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Notice</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php
                                        $query="SELECT * FROM notice ORDER BY id";

                                        $query_run1=mysqli_query($connection,$query);

                                        $row1=mysqli_num_rows($query_run1);
                                        echo'<h1>' .$row1.'</h1>';

                                        ?>  </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comment-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Carousel
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
                                        $query="SELECT * FROM carousel ORDER BY id";

                                        $query_run3=mysqli_query($connection,$query);

                                        $row3=mysqli_num_rows($query_run3);
                                        echo'<h1>' .$row3.'</h1>';

                                        ?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-image fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                        $query="SELECT * FROM career where remark=''";

                                        $query_run4=mysqli_query($connection,$query);

                                        $row4=mysqli_num_rows($query_run4);
                                        echo'<h1>' .$row4.'</h1>';

                                        ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
    

    <?php include('includes/script.php');
    include('includes/footer.php');
    ?>