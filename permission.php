<?php
include("adheader.php");

include("dbconnection.php");
if(!isset($_SESSION[patientid]))
{
	echo "<script>window.location='patientlogin.php';</script>";
}

$sqlpatient = "SELECT * FROM patient WHERE patientid='$_SESSION[patientid]' ";
$qsqlpatient = mysqli_query($con,$sqlpatient);
$rspatient = mysqli_fetch_array($qsqlpatient);

$sqlpatientappointment = "SELECT * FROM appointment WHERE patientid='$_SESSION[patientid]' ";
$qsqlpatientappointment = mysqli_query($con,$sqlpatientappointment);
$rspatientappointment = mysqli_fetch_array($qsqlpatientappointment);
?>
<div class=" container-fluid">
    <div class="block-header">
        <h2>Dashboard</h2>
        <small class="text-muted"></small>
    </div>




    <body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
						  <li class="active"><a href="#create_permission">Give Create Permission</a></li>
						  <li><a href="#view_form">View Records</a></li>
						</ul>
					  </div>
					</div>
			</nav>

		<div class="container">
			<div class="row" id="create_permission"><h3>Give Create Permission</h3></div>
			<hr>
			<form class="form-horizontal" id="register_form" >
				<div class="form-group">
					<label class="control-label col-sm-2" for="doc_addr">Doctor's Ethereum address</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="doc_addr" placeholder="" name="doc_addr">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="patient_addr">Your Ethereum address</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="patient_addr" placeholder="" name="patient_addr">
					</div>
				</div>

				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" id="btnsubmit" class="btn btn-default">Give Permission!!</button>
					</div>
				</div>
			</form>

			<!--<div id="postPermit"> </div>

			<div class="row" id="view_permission"><h3>View Records</h3></div>
			<hr>
			<form class="form-horizontal" id="view_form" >
				<div class="form-group">
					<label class="control-label col-sm-2" for="viewer_addr">Your Ethereum address</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="viewer_addr" placeholder="" name="viewer_addr">
						</div>
					</div>-->
	
					<!--<div class="form-group">
						<label class="control-label col-sm-2" for="viewee_addr">Friend's Ethereum address</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="viewee_addr" placeholder="" name="viewee_addr">
						</div>
					</div>-->
	
					<!--<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" id="btnsubmit" class="btn btn-default">View!!</button>
						</div>
					</div>-->
				</form>

				<!-- <button id="all_records" type="button" class="btn btn-default">Records</button> -->
				<div class="panel-group" id="getResultDiv">
					<ul class="list-group">
					</ul>
				</div>
		</div>
	</body>


    </div>
</div>

<?php
include("adfooter.php");
?>