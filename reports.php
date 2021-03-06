<?php include "sections/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Expense Report System</title>

	 <!-- CSS -->

	<link href="../css/jquery-ui.min.css" rel="stylesheet"  type="text/css" >
	<!-- Foundation -->
	 <link href="../foundation/css/foundation.min.css" rel="stylesheet"  type="text/css" >
	 <link href="../foundation/css/datepicker.css" rel="stylesheet"  type="text/css" >
	<!-- JTABLE -->
	<link href="../jtable/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css" >
	<!-- Custom -->
	<link rel="stylesheet" type="text/css" href="../css/main-styles.css" >
	<link rel="stylesheet" type="text/css" href="../css/manage-expenses-styles.css" >

	<!-- JS -->
	<!-- Jquey -->
	<script type="text/javascript" src="../js/jquery-3.2.0.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<!-- Foundation -->
	<script type="text/javascript" src="../foundation/js/vendor/foundation.min.js"></script>
	<script type="text/javascript" src="../foundation/js/datepicker.js"></script>
	<!-- JTABLE -->
	<script src="../jtable/jquery.jtable.min.js" type="text/javascript"></script>
	<!-- Custom -->
	<script type="text/javascript" src="../js/main-functions.js"></script>
	<script type="text/javascript" src="../js/manage-expenses-functions.js"></script>
</head>

<body>
	<?php
	//header
	include "sections/header.php";
	//menu 
	$currentOption="reports";
	include "sections/menu.php"; 
	?>
	<!-- /menu -->
	
	<!-- page-content -->
	<?php if($_SESSION["current_user"]["UserTypeId"]==1){ ?>
	<div id="content" class="row">
		<!-- search filter -->
		<div class="columns small-12">
			<h1>Expenses Managment</h1>
			Search Expense Report by:
			<form class="filter-section small-12 columns">
				
				<div class="small-2 columns" >
					<label for="expId">Id</label>
					<input type="text" name="expId">
				</div>
				<div class="small-2 columns">
					<label for="expUser" >User</label>
					<input type="text" name="expUser">
				</div>
				<div class="small-2 columns">
					<label for="expProyect" >Proyect</label>
					<input type="text" name="expProyect">
				</div>
				<div class="small-2 columns">
					<label for="expDpt" >Department</label>
					<input type="text" name="expDpt">
				</div>
				<div class="small-2 columns">
					<label class="left">Status
					  <select id="expStatus">
					    <option value="1">Open</option>
					    <option value="2">Waiting Approval</option>
					    <option value="3">Approved</option>
						<option value="4">Closed</option>
					  </select>
					</label>
				</div>
				<div class="small-1 columns">
					<label for="billiable">Billiable</label> 
					<input type="radio" name="expBill" id="billiable" value="billiable">
				</div>
				<div class="small-1 columns">
					<input class="button" type="submit" value="Search">
				</div>
			</form>
		</div>
		<!-- /expenses-list -->
		<!-- table -->
		<div id="tableContainer" class="columns small-12">
			<div id="expensesTableContainer"></div>
		</div>
		<!-- /table -->
	</div>
	<!-- /page-content -->
	<footer>
		
	</footer>

</body>

</html>