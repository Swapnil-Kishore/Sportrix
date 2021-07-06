<?php
include_once("db_con.php");

if(isset($_POST['create']))
{
	
	$u_id=$_POST['u_id'];
	$file=$_FILES['file'];
	$file_name=$file['name'];
	$file_tmp=$file['tmp_name'];
	$file_sep=explode('.', $file_name);
	$file_ext=strtolower(end($file_sep));
	$file_type=array('png','jpg','jpeg');
	if(in_array($file_ext, $file_type)){
		$loc='uploads/'.$file_name;
		move_uploaded_file($file_tmp, $loc);
		$sql_insert="INSERT INTO `upload`( `u_id` , `img`) VALUES ('$u_id','$loc') ";
		$query_insert=mysqli_query($con,$sql_insert);
		header('location:2.php');
	}else{
		echo "Upload Valid Image(png,jpg,jpeg)";
	}
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sportrix Registration - KGEC</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-image: url('football.jpg');">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title"> Sportrix Registration</h2>
                </div>
                <div class="card-body">
				<div class="form-row m-b-55" style="font-size: 150%; font-weight: bold;">
                            <span>STEP - 2<br>
                            Payment Details<br>
                            Amount = Rs XXX <br>
                            G-Pay/PhonePe - ABCDE  (9876543210)<br>
                            Upload the screenshot of payment page<br>

                            </span>
                        </div>


						<!DOCTYPE html>


<div class="container">
		<h1 class="text-white bg-dark text-center"></h1>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<h4>Unique Id</h4>
		<input type="text" name="u_id" id="u_id" class="form-control">
	</div>
	<div class="form-group">
	<input id="uploadImage" type="file" name="file" id="file" class="form-control">

	</div>
	<button type="submit" name="create" style="margin-bottom: 10px;" class="btn btn-success">Upload</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>