<!DOCTYPE html>

<html lang="en-US">
  <head>
    <title>Information</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/logo-icon.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="css/bootstrap.min2.css" rel="stylesheet" />
	<link type="text/css" href="css/bootstrap-switch.css" rel="stylesheet">
	<style>
		*{
			font-family:"微软雅黑","黑体","宋体"; 
		}
		.space_lg{
			height:50px;
			clear: both;
			text-align:right;
		}
		.space_md{
			height:30px;
			clear: both;
		}
		.space_sm{
			height:10px;
			clear: both;
			
		}
		.space_demo{
			border-bottom:1px solid black;
		}
		
		@media (min-width: 768px) {
		.container {
			width: 750px;
		  }
		  #scrollDiv{
			left:0px;
		  }
		}
		@media (min-width: 992px) {
		  .container {
			width: 990px;
		  }
		  #scrollDiv{
			left:0px;
		  }
		}
		@media (min-width: 1200px) {
		  .container {
			width: 1200px;
		  }
		}
		@media (min-width: 1400px) {
		  .container {
			width: 1350px;
		  }
		}
		@media (min-width: 1800px) {
		  .container {
			width: 1750px;
		  }
		  #scrollDiv{
			left:180px;
		  }
		}
		
		.lnk-tools {
			position:fixed;
			bottom:180px;
			right: 80px;
			_position:absolute;
			z-index:999;
			_top:expression(documentElement.scrollTop);
		}
		.lnk-tools button{width: 100px;}
	</style>
  </head>
  
  

  <body data-target="#scrollDiv" data-offset="0" data-spy="scroll">
  <?php
    	$servername='localhost';
		$username="root";
		$password="12345678";
		$dbname="hospital";
	
		$conn=new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error)
		{
			die("链接失败".$connect_error);
		}
		$username = $_GET['username'];
		
		$sql="select * from customers where cuser = '$username'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			while ($row=$result->fetch_assoc()) {
				$fname = $row['cfname'];
				$lname = $row['clname'];
				$age = $row['cage'];
				$gender = $row['cgender'];
				$marital = $row['marital'];
				$tel = $row['ctel'];
				$address = $row['cstreet'];
				$city = $row['ccity'];
				$state = $row['cstate'];
				$country = $row['ccountry'];
				$zip = $row['czip'];
			}
		}
	?>	
		
	
    <!-- 导航栏 -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
		    <div class="navbar-header">
				<a class="navbar-brand" href="javascript:void(0);"><span class="glyphicon glyphicon-home"></span> Customer </a>
		    </div>

		    <ul class="nav navbar-nav navbar-right">
				<li class="dropdown" style="">
			      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
			        <span class="glyphicon glyphicon-screenshot"></span> Menu<span class="caret"></span>
			      </a>
			      <ul class="dropdown-menu" role="menu">
			    	<li><a href="doctor/book.php?username=<?php echo $username;?>"">Make a appointment</a></li>
			    	<li class="divider"></li>
			    	<li><a href="../login-cus.html">Log out</a></li>
			      </ul>
			    </li>
		    </ul>
        </div>
    </div>


	<div class="container" style="margin-top:80px;">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-success">
				   <div class="panel-heading">
					  <h3 class="panel-title" style="font-family:微软雅黑">Information</h3>
				   </div>
				   <div class="panel-body">
					  <span class="text-info"><strong>First name：</strong></span><span class="text-primary"><?php echo $fname ?></span>&nbsp;<strong>|</strong>&nbsp;
					   <span class="text-info"><strong>Last name：</strong></span><span class="text-primary"><?php echo $lname ?></span>&nbsp;<strong>|</strong>&nbsp;
					  <span class="text-info"><strong>Age：</strong></span><span class="text-primary"><?php echo $age ?></span>&nbsp;<strong>|</strong>&nbsp;
					  <span class="text-info"><strong>Gender：</strong></span><span class="text-primary"><?php echo $gender ?></span>&nbsp;<strong>|</strong>&nbsp;
					  <span class="text-info"><strong>Marital Status：</strong></span><span class="text-primary"><?php echo $marital ?></span>
					  <span class="text-info"><strong>Telephone：</strong></span><span class="text-primary"><?php echo $tel ?></span>&nbsp;<strong>|</strong>&nbsp;
					  <span class="text-info"><strong>Address：</strong></span><span class="text-primary"><?php echo $address ?></span>&nbsp;<strong>|</strong>&nbsp;
					  <span class="text-info"><strong>City：</strong></span><span class="text-primary"><?php echo $city ?></span>&nbsp;<strong>|</strong>&nbsp;
					  <br>
					  <span class="text-info"><strong>State：</strong></span><span class="text-primary"><?php echo $state ?></span>
					  <strong>|</strong>&nbsp;
					  <span class="text-info"><strong>Country：</strong></span><span class="text-primary"><?php echo $country ?></span>
					  <strong>|</strong>&nbsp;
					  <span class="text-info"><strong>Zipcode：</strong></span><span class="text-primary"><?php echo $zip ?></span>
				   </div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul id="myTab1" class="nav nav-tabs bg-info">
				  <li class="active"><a href="#myLi1" data-toggle="tab">Overview</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					
					<!-- 第一块操作区 -->
					<div class="tab-pane fade in active" id="myLi1">
					    <div id="myLi11">
							<div class="space_sm"></div>
							<div class="row">
								
								<div class="col-md-4">
									<div class="panel-group " id="accordion">
									  <div class="panel panel-primary panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" 
											  href="#collapseOne1">
											  Diseases History
											</a>
										  </h4>
										</div>
										<div id="collapseOne1" class="panel-collapse collapse in">
										  <div class="panel-body">
											Diseases History 
										  </div>
										</div>
									  </div>
									  <div class="panel panel-info panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" 
											  href="#collapseOne2">
											  Infection History
											</a>
										  </h4>
										</div>
										<div id="collapseOne2" class="panel-collapse collapse">
										  <div class="panel-body">
											Infection History
										  </div>
										</div>
									  </div>
									  <div class="panel panel-danger panel-default">
										<div class="panel-heading">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" 
											  href="#collapseOne3">
											   Vaccination
											</a>
										  </h4>
										</div>
										<div id="collapseOne3" class="panel-collapse collapse">
										  <div class="panel-body">
											Vaccination
										  </div>
										</div>
									  </div>
									</div>
								</div><!-- /.col-历史 -->
								
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-12">
											<ul id="myTab4" class="nav nav-tabs">
											   <li class="active"><a href="#reco1" data-toggle="tab">Medical Record</a></li>
											</ul>
											<div id="myTabContent2" class="tab-content">
											   <div class="tab-pane fade in active" id="reco1">
												  <table class="table">
												   <thead>
													  <tr>
														 <th>Diseases</th>
														 <th>Time</th>
														 <th>Hospital</th>
													  </tr>
												   </thead>
												   <tbody>
													  <tr class="active">
														 <td>Cold</td>
														 <td>23/11/2018</td>
														 <td>Mayo Clinic</td>
													  </tr>
													  <tr  class="danger">
														 <td>Fracture</td>
														 <td>20/10/2017</td>
														 <td>Massachusetts General Hospital</td>
													  </tr>
												   </tbody>
												</table>
											   </div>
											</div>
										</div>
									</div>									
								</div><!-- /.col-记录 -->
							
							</div>
						</div> 
					</div>
				</div>
			</div>
	    </div>
	</div>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/switch-need1.js"></script>
	<script type="text/javascript" src="js/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="js/switch-need2.js"></script>
	<script>
		$(function(){
			$('#modalTest').modal({
				backdrop:true,//true:有遮罩背景&点击可关闭modal;false:没遮罩&不可点击关闭;'static':有遮罩不可点击关闭（默认是true）
				keyboard:true,//键盘上的esc键被按下时关闭模态框（默认是true）
				show:false,//模态框初始化之后就立即显示出来（默认是true）
			});
			$('#switch-offColor').on('switchChange.bootstrapSwitch', function(event, state) {
				if(state){
					$("#myLi22").show();
					$("#myLi21").hide();
				}else{
					$("#myLi21").show();
					$("#myLi22").hide();
				}
			  console.log(this); // DOM element
			  console.log(event); // jQuery event
			  console.log(state); // true | false
			});
			
			$('#switch-offColor2').on('switchChange.bootstrapSwitch', function(event, state) {
				if(state){
					$("#myLi32").show();
					$("#myLi31").hide();
				}else{
					$("#myLi31").show();
					$("#myLi32").hide();
				}
			  console.log(this); // DOM element
			  console.log(event); // jQuery event
			  console.log(state); // true | false
			});
		})
	</script>
  </body>
</html>
