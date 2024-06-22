<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration Form</title>
		<meta charset="UTF-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


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

<div class="new_student_btn">

      			<a class="btn btn-primary" href="/Fullbright_admission/create.php" role="button">New Student</a></br>
			<br>
</div>


    </ul>
  </div>
</nav>

<center><img src="Fullbright_logo_removebg.PNG" alt="" width="200px"></a><hr></center>



		<div class="container my-5">

			<center><table class="table table-striped table-hover" id="myTable"></center>

				<thead>
					<tr>
						<th class="text-center" scope="col">Profile</th>
						<th class="text-center" scope="col">ID</th>
						<th class="text-center" scope="col">Full Name</th>
						<th class="text-center" scope="col">Course</th>
						<th class="text-center" scope="col">Email</th>
						<th class="text-center" scope="col">Contact Number</th>
						<th class="text-center" scope="col">Edit</th>
						<th class="text-center" scope="col">Delete</th>
					</tr>	
				</thead>

				<tbody>

				<?php

//Connection to Database

					$servername = "localhost:3307 ";
					$username = "root";
					$password = "";
					$database = "registration_db";

					$connection = new mysqli($servername, $username, $password, $database);

					if($connection->connect_error) {

						die("Connection failed: " . $connection->connect_error);
					}

					$sql = "SELECT * FROM students_";
					$result = $connection->query($sql);

					if (!$result) {

						die("Invalid query: " . $connection->error);
					}


//Read data of each row

					while($row = $result->fetch_assoc()) {

						echo "
						<tr>
							<td class='text-center'><img src='upload_image/{$row['image']}' alt='Image' style='width: 100px; height: auto;'></td>
							<td class='text-center'>$row[ID]</td>
							<td class='text-center'>$row[Full_name]</td>
							<td class='text-center'>$row[Course]</td>
							<td class='text-center'>$row[Email]</td>
							<td class='text-center'>$row[Contact_Number]</td>
							<td>
							<a class='btn btn-warning btn-sm' href='/Fullbright_admission/edit.php?id=$row[ID]' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>
							</td>

							<td class='text-center'>
							<span>
							<a class='btn btn-danger btn-sm' href='/Fullbright_admission/delete.php?id=$row[ID]' title='Delete'><i class='fa fa-trash-o fa-lg'></i></a>
							</span>
							</td>
							</td>
						</tr>

						";
					}

				?>

					
				</tbody>	
			</table>


<body>
  <footer class="footer">
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-tiktok"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <p>&copy;2024 ECT DEPARTMENT | FULLBRIGHT COLLEGE | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>


	</div>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  	<script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
 	 </script>


	</body>

</html>

<style type="text/css">


.footer {
  position: relative;
  width: 100%;
  background: darkred;
  min-height: 5px;
  padding: 20px 100px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.new_student_btn {
        position: absolute;
        top: 0;
        right: 0;
        margin: 20px; 
    }