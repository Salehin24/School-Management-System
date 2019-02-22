<?php

session_start();
error_reporting(0);
include('includes/config.php');
require_once('includes/configpdo.php');

if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
else{


if(isset($_POST['submit']))
 {
    $sname = ['stname'];
    $sclass= ['stclass'];
    $attn= strip_tags($_POST['att']);
  
    
    
   
    
    
    
   $query = "INSERT INTO attendance(student_name,class_name,attn) VALUES('$sname','$sclass','$attn')";

        if ($mysqli->query($query)) 
        {
            $msg = "<div>
                        <span></span> &nbsp; Message successfully Updated!
                    </div>";
        }
        else 
        {
            $msg = "<div>
                        <span> &nbsp; error while Update</span>
                    </div>";
        }
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update news </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        

    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Update head master</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Update head maser</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
            <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                           
                                            <div class="panel-body">

                                                <style type="text/css">

                .co_curricular
                {
                    border-collapse: collapse;
                    font-size: 20px;
                    text-align: center;
                    width: 100%;
                    box-shadow: 0px 2px 6px 2px #CCC;

                }
                .co_curricular a
                {
                    text-decoration: none;

                }

                .co_curricular caption
                {
                    text-shadow: 0px 3px 6px #CCC;
                    
                    font-size: 25px;
                }


            </style>
            <br>

        <table border="1" class="co_curricular" cellspacing="5" cellpadding="10" >
            <caption> Student Attendance</caption>
<br>
<br>
        <thead>
            <th>Student Name</th>
            <th>Class Name</th>
            <th>Attendance of this week</th>
            
          </thead>
          <form>
            <?php
        
        
        //MySQLi Procedural
        //$query=mysqli_query($conn,"select * from sales left join product on product.productid=sales.productid order by product.product_name asc");
        //while($row=mysqli_fetch_array($query)){
        /*  ?>
                <tr>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['sales_qty']; ?></td>
                </tr>
                
            <?php */
        //  $total_qty += $row['sales_qty'];
        //}
        
        //MySQLi OOP
        $query=$mysqli->query("select * from tblstudents left join tblclasses on tblstudents.ClassId=tblclasses.id order by tblclasses.ClassNameNumeric asc");

        while($row=$query->fetch_array())
        {
            ?>

                <tr> 
                   <td name="stname" id="stname"><?php echo $row['StudentName']; ?></td> </input>
                    <td name="stclass" id="stclass"><?php echo $row['ClassName']; ?>(<?php echo $row['Section']; ?>)</td>
                    <form method="post">
                    <td><input type="text" name="att" id="att"></td>
                    </tr> 
                
                
                  
                 

    <?php } ?>
    </table>
    <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
    

    
            


                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
       
    </body>
</html>
<?php } $dbh->close();?>

