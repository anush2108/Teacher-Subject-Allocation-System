<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['tsasaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$adminid=$_SESSION['tsasaid'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$sql ="SELECT ID FROM tbladmin WHERE ID=:adminid and Password=:cpassword";
$query= $dbh -> prepare($sql);
$query-> bindParam(':adminid', $adminid, PDO::PARAM_STR);
$query-> bindParam(':cpassword', $cpassword, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
{
$con="update tbladmin set Password=:newpassword where ID=:adminid";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':adminid', $adminid, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();

echo '<script>alert("Your password successully changed")</script>';
 echo "<script>window.location.href ='change-password.php'</script>";
} else {
echo '<script>alert("Your current password is wrong")</script>';

}
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>TSAS Admin : Change Password </title>
    <!-- Styles -->
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   

</script>
</head>

<body style="background-color:black";>

<?php include_once('includes/sidebar.php');?>
   
    <?php include_once('includes/header.php');?>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header"style="background-color:black";>
                            <div class="page-title"style="background-color:black";>
                                <h1 style="color: white">Change Password</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header" style="background-color:black";>
                            <div class="page-title" style="background-color:black";>
                                <ol class="breadcrumb text-right" style="background-color:black";>
                                    <li><a style="color: white" href="dashboard.php">Dashboard</a></li>
                                    <li style="color: white" class="active">Change Password</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="background-color: #cdcece"; class="card alert">
                                <div style="background-color: #cdcece"; class="card-header">
                                    <h4>Change Password</h4>
                                </div>
                                <div style="background-color: #cdcece"; class="card-body">
                                    <div class="basic-form">
                    <form method="post"  name="changepassword" onsubmit="return checkpass();" name="changepassword">
                                     <div class="form-group"> <label for="exampleInputEmail1">Current Password</label> <input type="password" class="form-control" name="currentpassword" id="currentpassword"required='true'> </div> 
                                     <div class="form-group"> <label for="exampleInputEmail1">New Password</label> <input type="password" class="form-control" name="newpassword"  class="form-control" required="true"> </div>
                                     <div class="form-group"> <label for="exampleInputEmail1">Confirm Password</label> <input type="password" class="form-control"  name="confirmpassword" id="confirmpassword"  required='true'> </div>
                                     
                                       
                         <button style="background-color:black"; type="submit" class="btn btn-default" name="submit">Change</button> </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
         
                   <?php include_once('includes/footer.php');?>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html><?php }  ?>