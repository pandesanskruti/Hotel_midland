<?php
     $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $db = "hotel";
        
        $conn = new mysqli($servername,$username,$password,$db);
        if($conn->connect_error)
        {
            die("connection failed:".$conn->connect_error);
        }
          $firstname=$_REQUEST['first_name'];
      //  echo $firstname;
        //die;
        $lastname=$_REQUEST['last_name'];
         $uname=$_REQUEST['username'];
         $password=md5($_REQUEST['password']);
         $email=$_REQUEST['email'];
         $number=$_REQUEST['number'];
        
        $gender=$_REQUEST['gender'];
        $address=$_REQUEST['address'];
      // $hobbies=$_REQUEST['hobbies'];
        
        
       // $hooby=implode(",",$hobbies);
     $sql = "insert into user (first_name,last_name,username,password,email,mobile,gender,address)VALUES('".$firstname."','".$lastname."','".$uname."','".$password."','".$email."','".$number."','".$gender."','".$address."')";
        
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
    </head>
<body>
    
    REGISTRATION SUCESSFUL <button class="btn btn-danger"><a href="home.html">Go Back!</a></button>
   
   <!--  <button class="btn btn-danger"><a href="clienlist.php">login</a></button>-->
    
    </body>
</html>