
<?php

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

}

?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="/final/project/data/css/jobs_style.css">

</head>

<body>


<div class="search">
	
	<div class="searchform" >
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<input type="text" name="search" placeholder="Search.." required>
			
			<select name="searchCategory" value="0">
				<option value="organization">Organization</option>
				<option value="location">Location</option>
				<option value="skill" >Skill</option>
				
			</select>
		
			<button type="search">Search</button>
		</form>
		
		<?php 
		echo "<br/>". $searchErr;
		echo "<br/>".$searchText;
		echo "<br/>".$searchCategory;
		?>
	</div>
</div>


<div class="job_head">

	<div class="jobcategory">
	<br/>
	<label id="jobcategoryname" for="jobcategoryname">Job Category</label>
	  <div class="jobcategoryname">
		<select name="jobcategoryname" value="0">
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

<div class="sortJobList" style="float: right;">
		<label for="sortJobList">Sort by</label>
		<select name="sortJobList" value="0">
			<option value="deadline">Deadline</option>
			<option value="atoz">A to Z</option>
			
		</select>
			
		<br/>
</div>

</div>

<div class="joblist">

	<?php include("../model/model_jobs.php");
		jobList();
		jobListView();
	?>

</div>


	
</body>

</html>