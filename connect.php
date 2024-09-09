<?php
     $servername = "localhost";
        $username = "pravin";
        $password = "hotel";
        $db = "hotel";
        
        $conn = new mysqli($servername,$username,$password,$db);
        if($conn->connect_error)
        {
            die("connection failed:".$conn->connect_error);
        }
          $firstname=$_REQUEST['first_name'];
     //  echo $firstname;
    //    die;
        $lastname=$_REQUEST['last_name'];
      
         $email=$_REQUEST['email'];
         $number=$_REQUEST['number'];
        $message=$_REQUEST['txtMsg'];
       
      // $hobbies=$_REQUEST['hobbies'];
        
        
       // $hooby=implode(",",$hobbies);
     $sql = "insert into user (first_name,last_name,email,mobile,message)VALUES('".$firstname."','".$lastname."','".$email."','".$number."','".$message."')";
        
         if($conn->query($sql)===true)
        {
           // echo "data inserted";
            //echo $conn->insert_id;
        }
        else
        {
            echo "error".$conn->error;
        }
     
        
      
           
        
?>
<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
        <style>
        
            body{
                background-color: bisque;
            }
        
        </style>
    </head>
<body>
    
   
    
    <h1>THANKS FOR VISITING HOTEL MIDLAND</h1><br>
    <h4>WE WILL GET IN TOUCH IN A WHILE</h4><br>
     REGISTRATION SUCESSFUL <button class="btn btn-danger"><a href="home.html">Go Back!</a></button>
    
    </body>
</html>