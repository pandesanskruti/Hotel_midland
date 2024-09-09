<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
    </head>
    <body>
        <?php 
        
     
        $servername = "localhost";
        $username = "pravin";
        $password = "hotel";
        $db = "hotel";
        
        //create coonection
        $conn = new mysqli($servername,$username,$password,$db);
        
        //check connection
        if($conn->connect_error)
        {
            die("connection failed:".$conn->connect_error);
        }
        
       $sql = "select * from user";
        
      $result = $conn->query($sql);
        if($result->num_rows>0)
        {
            ?>
         <button class="btn btn-danger"><a href="logout.php">logout</a></button>
       
        
           <table class="table table-striped ">
               <tr>      
                   <th>id</th>
                   <th>firstname</th>
                   <th>lastname</th>
                  
                   
                   <th>email</th>
                   <th>mobile</th>
                   <th>message</th>
                 
                 
                   
               </tr>

        <?php
            //echo "recrd found";
            while($row = $result->fetch_assoc())
            {
                if($row['gender']==0)
                {
                    $gender="male";
                }
                else
                {
                    $gender="female";
                }
            ?>
        
           
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
               
               
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['message'] ?></td>
                
              
              
              
            </tr>
     
                <!--//echo $row['id']."-> ".$row['gender']."-> ".$row['hobbies']."<br/>";-->
            <?php
            }
        }
        else
        {
            echo "no record found";
        }
        ?>
                  </table>
       
      
    
    
    </body>
</html>