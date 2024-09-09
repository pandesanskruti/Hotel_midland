<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    </head>
<?php
    session_start();
   
     $servername = "localhost";
        $username = "pravin";
        $password = "hotel";
        $db = "hotel";
        
        $conn = new mysqli($servername,$username,$password,$db);
        if($conn->connect_error)
        {
            die("connection failed:".$conn->connect_error);
        }
         $username=$_REQUEST['username'];
         $password=md5($_REQUEST['password']);
        
        $sql="select * from user where username='".$username."' AND  password='".$password."'";
  
         $result = $conn->query($sql);
      //  echo $result->num_rows;

        if($result->num_rows>0)
        {
        
                 
               
                 $_SESSION['login']=1;
            while($row=$result->fetch_assoc()){
                $_SESSION['username']=$row['username'];
            }
                header("Location: list.php");
            }
            
        
        
        else{
                header("Location: stafflogin.html");
        }
        
?>


</html>