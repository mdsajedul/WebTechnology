
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

<div class="search">
	<b>Find your right job</b><br/>
	<div class="searchform" >
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<input type="text" name="search" required>
			
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

<div class="jobcategory">
	<br/>
	<label for="jobcategoryname">Job Category</label>
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

	<div class="sortJobList" style="float: right;">
		<label for="sortJobList">Sort by</label>
		<select name="sortJobList" value="0">
			<option value="deadline">Deadline</option>
			<option value="atoz">A to Z</option>
		</select>
			
		<br/>
	</div>

	<div class="joblist">

		<p><a href="view/jobdetails/accountManager.php">Accounts Manager</a></p>
		<p>Bridge Pharmaceuticals LTD </p>
		<p>Location: Dhaka</p>
		<p>Education: Masters/BBA/MBA (Finance/Accounting) from any reputed university.or, B.Com/M.Com in Accounting</p>
		<p>Experience: 3 to 5 years</p>
		<br/><br/>

		<p><a href="view/jobdetails/financialOperation.php">Head of Financial Operation</a></p>
		<p>Evercare Hospital Dhaka </p>
		<p>Location: Dhaka</p>
		<p>Education: Graduate in Finance/Accounting/Economics/Banking from any reputed university.or, B.Com/M.Com in Accounting</p>
		<p>Experience: At least 10 years</p>


	</div>

</div>
