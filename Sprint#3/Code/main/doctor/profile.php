<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Hospital System</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet">
<!-- Custom Css -->

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<?php
    $servername='localhost';
	$username="root";
	$password="12345678";
	$dbname="hospital";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("fail".$connect_error);
	}
	$username = $_GET['username'];
		
	$sql="select * from doctor where Duser = '$username'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		while ($row=$result->fetch_assoc()) {
			//$username = $row['Duser'];
			$lname = $row['DLname'];
			$fname = $row['DFname'];
			$DoB = $row['DDoB'];
			$gender = $row['Gender'];
			$speciality = $row['Speciality'];
			$tel = $row['Dtel'];
			$email = $row['Demail'];
		}
	}
?>
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader --> 
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.php?username=<?php echo $username;?>">Hospital System</a> </div>
        <ul class="nav navbar-nav navbar-right">
            
            
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
            <div class="admin-action-info"> <span>Welcome</span>
                <h3>Dr.<?php echo "$lname" ?></h3>
                <ul>
                    <li><a data-placement="bottom" title="Go to Profile" href="profile.php?username=<?php echo $username;?>"><i class="zmdi zmdi-account"></i></a></li>                    
                    <li><a data-placement="bottom" title="Full Screen" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
            <div class="quick-stats">
                <h5>Today Report</h5>
                <ul>
                    <li><span>16<i>Patient</i></span></li>
                    <li><span>20<i>Panding</i></span></li>
                    <li><span>04<i>Visit</i></span></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="index.php?username=<?php echo $username;?>"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>                                               
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                    <ul class="ml-menu">
                        <li><a href="doctor-schedule.php?username=<?php echo $username;?>">Doctor Schedule</a></li>
                        <li><a href="book-appointment.php?username=<?php echo $username;?>">Book Appointment</a></li>
                    </ul>
                </li>
                <li  class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                    <ul class="ml-menu">
                        <li><a href="doctors.php?username=<?php echo $username;?>">All Doctors</a></li>                       
                        <li class="active"><a href="profile.php?username=<?php echo $username;?>">Doctor Profile</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar --> 
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar --> 
</section>

<section class="content profile-page">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 p-l-0 p-r-0">
                <section class="boxs-simple">
                    <div class="profile-header">
                        <div class="profile_info">
                            <div class="profile-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
                            <h4 class="mb-0"><strong>Dr. <?php echo "$fname" ?></strong> <?php echo "$lname" ?></h4>
                            <span class="text-muted col-white"><?php echo "$speciality" ?></span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
				<form action="updateok.php?username=<?php echo $username;?>" method="post">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Setting</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="mypost">
                            <div role="tabpanel" class="tab-pane" id="usersettings">
                               <div class="body"> 
                                    <h2 class="card-inside-title">Account Settings</h2>
                                    <form action="updateok.php?username=<?php echo $id;?>" method="post">
								   	<div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="First Name" name = 'Fname' id = 'Fname' value=<?php echo "$fname"; ?> required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Last Name" name = 'Lname' id = 'Lname' value=<?php echo "$lname"; ?> required="">
                                                </div>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" class="form-control" placeholder="Date of Birth" name = "DoB" id = "DoB" value=<?php echo "$DoB"; ?> required="">
                                                </div>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Speciality" name = "Speciality" id = "Speciality" value=<?php echo "$speciality"; ?> required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" name = "gender" id = "gender">
                                        				<option value="" <?php if($gender == "") echo "selected";?>>-- Gender --</option>
                                        				<option value="Male" <?php if($gender == "Male") echo "selected";?>>Male</option>
                                        				<option value="Female" <?php if($gender == "Female") echo "selected";?>>Female</option>
                                    				</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Phone" name = "tel" id = "tel" value=<?php echo "$tel"; ?> required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Enter Your Email" name = "email" id = "email" value=<?php echo "$email"; ?> required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn-raised btn-success">Save Changes</button>
                                        </div>
                                    </div>
								   </form>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</form>
        </div>
    </div>
</section>
<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
</body>
</html>