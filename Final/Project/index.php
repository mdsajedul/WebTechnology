

<?php
session_start();
 error_reporting(0);
 include("model/model_jobs.php");
 jobList();
 $name="";
 $cat="";
$searchText=$searchCategory=$searchStatus=$searchErr="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$counter=0;
	if(isset($_POST["search"]) & !empty($_POST["search"])){
		$searchText=$_POST["search"];

	}
	else{
		$searchErr="Search box blank";
		}
	
	if(isset($_POST["searchCategory"]) & !empty($_POST["searchCategory"])){
		$searchCategory=$_POST["searchCategory"];
	}
	
		jobSearch($searchText,$searchCategory);

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Find your job</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/final/project/data/css/index.css">
	<link rel="stylesheet" type="text/css" href="/final/project/data/css/jobs_style.css">
</head>


<body>

	<div>
		<?php include 'view/header.php' ?>
	</div>

	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="view/jobseeker.php">My Jobs</a>
		<a href="view/contact.php" >Contact with us</a>

		<?php
			
			if ($_SESSION["id"]==null){

				?><a href="view/login.php" style="float: right;">Login</a> 
				<a href="view/signup.php" style="float: right;">Sign Up</a>
				 <?php
			}
			else{
				?>
				<a href="/final/project/controller/action_logout.php" style="float: right;">Sign out</a>
				<a href="view/jhome.php" style="float: right;"><?php echo ucfirst($_SESSION["id"]) ; ?></a>  


				<?php

			}
		?>
	</div>


	<div class="row">

		<div class="leftcolumn">
			
			<div class="noticeboard">

				<div class="card">
					<?php
						include("model/model_noticeboard.php");
						viewNoticeboard();
					?>
						<h2 style="text-align:center;">Noticeboard</h2>
						<h3><?php echo $noticeHeader; ?></h3>
						<p><?php echo $noticeBody ; ?></p>
				</div>
				
			</div>


			<div class="jobindex">
				<div class="card">

					<div class="search">
	
						<div class="searchform" >
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
								<input type="text" name="search" id="search" placeholder="Search.." required>
			
								<select name="searchCategory" value="0">
									<option value="">Select</option>
									<option value="organization">Organization</option>
									<option value="location">Location</option>
								</select>
		
								<button type="submit" name="searchbtn">Search</button>
							</form>
		
						

						</div>
					</div>

					<div class="job_head">
						<div class="jobcategory">
							<br/>
							<label id="jobcategoryname" for="jobcategoryname">Job Category</label>
						 	<div class="jobcategoryname">
								<select name="jobcategoryname" value="0"  onchange="showJobs(this.value)">
								<option value="">Select a Category</option>
								<option value="accounting">Accounting/Finance</option>
								<option value="production">Production/Operation</option>
								<option value="agro">Agro</option>
								<option value="education">Education</option>
								<option value="engineer/architects">Engineer/Architects</option>

								</select>
								<br/>
								<br/><br/>
							</div>
   						</div>

   						<!--       Ajax  :Job Category    -->

   						<script>
								function showJobs(str) {
  									var xhttp;
 									 if (str == "") {
  									  //document.getElementById("search").innerHTML = "";
  									  return;
 									 }
 									 xhttp = new XMLHttpRequest();
 									xhttp.onreadystatechange = function() {
  									  if (this.readyState == 4 && this.status == 200) {
    										document.getElementById("joblist").innerHTML = this.responseText;
   									  }
  										}; 
  									xhttp.open("GET", "/final/project/model/model_jobs.php?q="+str, true);
 									 xhttp.send();
									}
							</script>



   						<div class="sortJobList" style="float: right;">
							<label for="sortJobList">Sort by</label>
							<select name="sortJobList" value="0" onchange="sortJobs(this.value)">
							<option value="">Select a Category</option>
							<option value="deadline">Deadline</option>
							<option value="ASC">A to Z</option>
							<option value="DESC">Z to A</option>
			
							</select>
			
							<br/>
						</div>



						<!--   Ajax : Sort Job  -->

   						<script>
								function sortJobs(str) {
  									var xhttp;
 									 if (str == "") {
  									  //document.getElementById("search").innerHTML = "";
  									  return;
 									 }
 									 xhttp = new XMLHttpRequest();
 									xhttp.onreadystatechange = function() {
  									  if (this.readyState == 4 && this.status == 200) {
    										document.getElementById("joblist").innerHTML = this.responseText;
   									  }
  										}; 
  									xhttp.open("GET", "/final/project/model/model_jobs.php?sort="+str, true);
 									 xhttp.send();
									}
							</script>





					</div>

					<div class="joblist" id="joblist">

						<?php
						//jobList();
						jobListView();
						?>
					</div>
				</div>
			</div>

		</div>
		
	</div>


	<div>
		 <?php include 'view/footer.php' ?>
	</div>

</body>
</html>