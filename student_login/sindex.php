<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['mysession'])!="")
 {
	header("Location:student_home.php");
	exit;
}

if (isset($_POST['btn-login']))
 {
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	if (password_verify($password, $row['password']) && $count==1) 
	{
		$_SESSION['mysession'] = $row['user_id'];
		header("Location:student_home.php");
	}
	 else 
	 {
		$msg = "<div>
					<span></span> &nbsp; Incorrect Username or Password !
				</div>";
	}
	$DBcon->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Login &nbps; </title>
<link rel="stylesheet" href="style.css" type="text/css" />


<link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>



</head>
<body>

<div class="col-md-12">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-6 col-md-offset-3">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Student Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    

                                                  <div>
                                                  <h6 style="color: red;">
                                            <strong>
                                            		 <?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>   
											</strong>  
											</h6>
                                        </div>

                                                    <form class="form-horizontal" method="post">
                                                    	<div class="form-group">
                                                    		<label for="email" class="col-sm-2 control-label">Email</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="email" name="email" class="form-control"  placeholder="Enter your Email here" required/>
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="password" class="col-sm-2 control-label">Password</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="password" name="password" class="form-control" placeholder=" Enter your Password" required />
                                                    		</div>
                                                    	</div>
                                                    
                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">
                                                           
                                                    			<button type="submit" name="btn-login" id="btn-login" class="btn btn-success btn-labeled pull-left">login<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>

                                                    			<button type="submit"  class="btn btn-success btn-labeled pull-right"><a href="register.php" style="text-decoration: none; color: white;">Sign UP Here</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>


                                                    		</div>
                                                    	</div>
                                                    </form>

                                            

                                                 
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>

</body>
</html>