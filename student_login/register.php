<?php
session_start();
if (isset($_SESSION['mysession'])!="") 
{
	header("Location: student_home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
 {
	
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) 
	{
		
		$query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";

		if ($DBcon->query($query)) 
		{
			$msg = "<div>
						<span></span> &nbsp; successfully registered !
					</div>";
		}
		else 
		{
			$msg = "<div>
						<span></span> &nbsp; error while registering !
					</div>";
		}
		
	}
	 else
	 {
		
		
		$msg = "<div>
					<span></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Register &nbps; </title>
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
                                                        <h4>Student Register</h4>
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
                                                    		<label for="username" class="col-sm-2 control-label">User&nbsp;Name</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="text" name="username" class="form-control"  placeholder="Enter your Username" required/>
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="email" class="col-sm-2 control-label">Email</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="email" name="email" class="form-control" placeholder=" Enter your Email" required />
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
                                                           
                                                    			<button type="submit" name="btn-signup" id="btn-signup" class="btn btn-success btn-labeled pull-left">Create Account<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>

                                                    			<button type="submit"  class="btn btn-success btn-labeled pull-right"><a href="index.php" style="text-decoration: none; color: white;">Log IN Here</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>


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