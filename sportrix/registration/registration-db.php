<?php
include_once("connection-pdo.php");
        $first_name=$_REQUEST['first_name'];        //Key->Value
        $last_name=$_REQUEST['last_name'];
        $college=$_REQUEST['college'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $flag=1;
        
        if($first_name=="" )
        {
                echo nl2br("Enter first name\n");
                $flag=0;
        }
        if($last_name=="")
        {
                echo nl2br("Enter last name\n");
                $flag=0;
        }
        if($college=="" )
        {
                echo nl2br("Enter college\n");
                $flag=0;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo nl2br("Enter valid Email Id\n");
                $flag=0;
        }

        if(!preg_match('/^[0-9]{10}$/', $phone))
        {
                echo nl2br("Enter valid Phone Number\n");
                $flag=0;
        }

        $charset="0123456789";
        $u_id=substr(str_shuffle($charset), 0,6);

                $sql = "INSERT INTO `registration`(`first_name`, `last_name`, `email`, `college`, `phone`,`u_id`) VALUES ('$first_name','$last_name','$email','$college','$phone','$u_id')";
                $query  = $pdoconn->prepare($sql);
                $query->execute();

                if($flag==1)
                {
                        echo nl2br("\n\nRegistration Successful\n");
                        echo "Send the screenshot of your payment to the above whatsApp number with your Unique ID  - ".$u_id;
                }
        
?>