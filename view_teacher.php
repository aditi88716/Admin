<?php 
include "sidebar.php";
include "header.php";
?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">View Teacher</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Teacher's name</th>
                                            <th scope="col">Eamil Address</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Qualification</th>
                                            <th scope="col">Subject chosen</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                        <?php
                                            include ('dbcon.php');

                                            $q = "select * from teacher";
                                            $query = mysqli_query($con,$q);

                                            while ($result = mysqli_fetch_array($query)) 
                                            {
    
                                        ?>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?php echo $result['tname'];?></td>
                                            <td><?php echo $result['email'];?></td>
                                            <td><?php echo $result['mob'];?></td>
                                            <td><?php echo $result['qualification'];?></td>
                                            <td><?php echo $result['sub'];?></td>
                                            <td><?php echo $result['class'];?></td>
        
                                            <td><a class="btn-primary btn" href="update_teacher.php?id=<?php echo $result['id'];?>" class="text-white">Update</a></td>

                                            <td><a class="btn-danger btn" href="delete_teacher.php?id=<?php echo $result['id'];?>" class="text-white">delete</a></td>
                                        </tr>
                                        
                                    </tbody>
                                    <?PHP
                                         }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
</div><!-- /#right-panel -->

    <!-- Right Panel -->
    <?php
include "footer.php";
?>