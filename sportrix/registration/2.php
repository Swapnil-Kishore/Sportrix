<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
		<h1 class="text-white bg-dark text-center"></h1>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
		
		<tbody>
		<?php
			include_once("db_con.php");
			$sql_select="select * from upload";
			$query_select=mysqli_query($con,$sql_select);
			while($row =mysqli_fetch_array($query_select)){
                $u_id= $row['u_id'];
                $img= $row['img'];
                $sql_select1="select * from registration where u_id IN ('$u_id') ";
                $query_select1=mysqli_query($con,$sql_select1);
                while($row1 =mysqli_fetch_array($query_select1)){
                $first_name= $row1['first_name'];
                $last_name= $row1['last_name'];
                $college= $row1['college'];
                $phone= $row1['phone'];
                $email= $row1['email'];

                $sql_insert="INSERT INTO `full`(`first_name`, `last_name`, `email`, `college`, `phone`, `u_id`, `img`) VALUES ('$first_name','$last_name','$email','$college','$phone','$u_id','$img')";
                $query_insert=mysqli_query($con,$sql_insert);
                
            }
        }
        ?>
        <h5>You will receive a confirmation mail soon within few days.</h5>
        <h5>For queries regarding confirmation , contact Kailash Mandi (8240087651)</h5>
        <div><a href="../index.html"> <div >Click here for Homepage</div>
		</tbody>
	</table>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>