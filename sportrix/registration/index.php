<?php
include_once("connection-pdo.php"); 
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
                    <form method="POST" id="myform" >
                        <div class="form-row m-b-55" style="font-size: 150%; font-weight: bold;">
                            <span>Registration Fees : Rs. 2000<br>
                            (Rs. 500 to be paid online and the remaining amount (Rs. 1500) should be paid on the day of reporting.)<br><br>
                            11 Players per side<br><br>
                            For more Details <a href="https://drive.google.com/file/d/12RAo3CxSESFa_n6JPC7BYP4CwjC8STe5/view">Click Here</a><br><br>
                            G pay/PhonePe No. 8967087758<br>
                            WhatsaApp No. 8240087651<br><br>

                            Registration Details
                            </span>
                            
                        </div>
                        <p style="color: red;">All fields are necessary.</p>
                        <span><br></span>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" id="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" id="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">College</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="college" id="college">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email"  id="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name" >Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input pattern="[0-9]{10}" class="input--style-5" type="text" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                            <button class="btn btn--radius-2 btn--red" type="button"  onclick="save_data()">Register</button>

                            
                            <div id="my_msg1"></div>
                            <a href="1.php">
                                <div id="next_page" ></div>
                            </a>
                        </div>
                        

                    </form>
                    
                        
                   
                </div>
            </div>
        </div>
    </div>

    <script>
    
    function save_data()
    {
        //Store content of Textbox into Variable
        var first_name=$("#first_name").val(); 
        var last_name=$("#last_name").val();
        var college=$("#college").val();
        var email=$("#email").val();
        var phone=$("#phone").val();

 $.ajax({
            url :'registration-db.php', //Which server-side page to move on
            type:'POST',    //Enycrption methodlogy
            data :{
                'first_name':first_name,        //Key->Value
                'last_name':last_name,
                'college':college,
                'email':email,
                'phone':phone,
                
            },
            // beforeSend:function(){
            //     $('#my_data').html('<img src="images/ajax-loader.gif" alt="Loading...">');
            // },
            dataType:'html',
            success  :function(data)
            {
                    $('#my_msg1').html(data);
                    $('#next_page').html("Confirm");
                    $('#myform')[0].reset();
            }
    	});
}
    
    </script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->