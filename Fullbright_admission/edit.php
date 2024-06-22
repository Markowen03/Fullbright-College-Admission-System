<?php

$servername = "localhost:3307 ";
$username = "root";
$password = "";
$database = "registration_db";

$connection = new mysqli($servername, $username, $password, $database);

$ID = "";
$Full_name = "";
$Course = "";
$Email = "";
$Contact_Number = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

	if (!isset($_GET["id"])) {

		header("location: /Fullbright_admission/index.php");
		exit;
	}

	$ID = $_GET['id'];

	$sql = "SELECT * FROM students_ WHERE id=$ID";
	$result = $connection->query($sql);
	$row = $result->fetch_assoc();

	if (!$row) {

		header("location: /Fullbright_admission/index.php");
		exit;
	}

	$Full_name = $row["Full_name"];
	$Course = $row["Course"];
	$Email = $row["Email"];
	$Contact_Number = $row["Contact_Number"];

}
else{

	$ID = $_POST["ID"];
	$Full_name = $_POST["Full_name"];
	$Course = $_POST["Course"];
	$Email = $_POST["Email"];
	$Contact_Number = $_POST["Contact_Number"];

	do {

		if (empty($ID) || empty($Full_name) || empty($Course) || empty($Email) || empty($Contact_Number)) {
			$errorMessage = "All the fields are required";
			break;
		}

	$sql = "UPDATE students_ " .
			"SET Full_name = '$Full_name', Course = '$Course', Email = '$Email', Contact_Number = '$Contact_Number' " .
			"WHERE id = $ID"; 

	$result = $connection->query($sql);

	if (!$result) {

		$errorMessage = "Invalid query: " . $connection->error;
		break;
	}

	$successMessage = "Student updated correctly";

	header("location: /Fullbright_admission/index.php");
	exit;

	}while (true);
}	
?>	






<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>My Registration</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</head>
<body>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Fullbright Admission</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="Fullbright_logo_removebg.PNG" alt="" width="80px"></a><br><hr>
  <a class="navbar-brand" href="#" style="font-size:30px;"><strong>Fullbright Admission</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Inquiries</a>
          <a class="dropdown-item" href="#">Information</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Admin</a>
        </div>
      </li>

<div class="back_btn">

      			<a class="btn btn-danger" href="/Fullbright_admission/index.php" role="button">Back</a></br>
			<br>
</div>


    </ul>
  </div>
</nav>




	<div class="container my-5">
		<center><h2>Edit Student</h2></br></center>

		<?php
		if ( !empty($errorMessage)){
			echo"
				<div class='alert alert-warning aler-dismissible fade show' role='alert'>
					<strong>$errorMessage</strong>
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
				</div>	
			";

		}
		?>

		<form method="post">
			<input type="hidden" name="ID" value="<?php echo $ID; ?>">
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Full Name</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="Full_name" value="<?php echo $Full_name; ?>">
					</div>	
			</div>

			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Course</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="Course" value="<?php echo $Course; ?>">
					</div>	
			</div>	
	
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="Email" value="<?php echo $Email; ?>">
					</div>	
			</div>

			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Contact Number</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="Contact_Number" value="<?php echo $Contact_Number; ?>">
					</div>	
			</div>

		<?php
		if ( !empty($successMessage)){

			echo "
				<div class='row mb-3'>
					<div class='offset-sm-3 col-sm-6'>
						<div class ='alert alert-success aler-dismissible fade show' role='alert'>
							<strong>$successMessage</strong>
							<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
						</div>
					</div>
				</div>

			";
		}
		?>


			<div class="row mb-3">
				<div class="offset-sm-3 col-sm-3 d-grid">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>	

			<div class="col-sm-3 d-grid">
				<a class="btn btn-danger" href="/Fullbright_admission/index.php" role="button">Cancel</a>
			</div>	

	</div>

</body>
</html>

<style type="text/css">


				body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40 !important;
        }

        .navbar-brand {
            font-size: 30px;
        }

        .alert {
            margin-top: 20px;
        }

        .form-control {
            border-radius: 0;
        }

        .btn {
            border-radius: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

				.back_btn {
			        position: absolute;
			        top: 0;
			        right: 0;
			        margin: 20px; 
			    }