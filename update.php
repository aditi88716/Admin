<?php 
include "sidebar.php";
include "header.php";
?>
<?php
include('dbcon.php');

if(isset($_POST['submit']))
{
    $id = $_GET['id'];
    echo $Sname =$_POST['Sname'];
    echo $Mname =$_POST['Mname'];
    echo $Fname =$_POST['Fname'];
    echo $Fmob =$_POST['Fmob'];
    echo $Mmob =$_POST['Mmob'];
    echo $class =$_POST['class'];

    $q ="update student2 set id=$id Sname='$Sname',Mname='$Mname',Fname='$Fname',Fmob='$Fmob',Mmob='$Mmob',class='$class' where id=$id";

    $query = mysqli_query($con,$q);
}


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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Advanced</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        
    <div class="container">
        <br><br>
        <div class="container">
    <div class="card">
                        <div class="card-header"><strong>Add Student</strong><small> Form</small></div>
                        <form method="post">
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Student Name</label><input type="text" name="Sname" id="company" placeholder="Enter your company name" class="form-control"></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Mother's name:</label><input type="text" name="Mname"id="vat" placeholder="DE1234567890" class="form-control"></div>
                                        <div class="form-group"><label for="street" class=" form-control-label">Father's name:</label><input type="text" name="Fname" id="street" placeholder="Enter street name" class="form-control"></div>
                                            <div class="row form-group">
                                                <div class="col-8">
                                                    <div class="form-group"><label for="city" class=" form-control-label">Father's Mob:</label><input type="text" id="city" name="Fmob" placeholder="Enter your city" class="form-control"></div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Mother's Mob:</label><input type="text" name="Mmob" id="postal-code" placeholder="Postal Code" class="form-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="country" class=" form-control-label">Class</label><input type="text" name="class" id="country" placeholder="Country name" class="form-control"></div>
                                                    </div>
                                                    <input type="submit" name="submit" class="btn btn-info">
                                                </div>
                                            </div>
                            </div>
                            </form>
                        </div>
    </div>
    </div>
    </div><!--end of container-->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <?php
include "footer.php";
?>