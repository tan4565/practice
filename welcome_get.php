<?php      
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "login info";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
	   $username = $_POST['uname'];  
       $password = $_POST['psw'];  
      
        //to prevent from mysqli injection  
     /*   $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); */
      
        $sql = "select *from login_info where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $ss = mysqli_fetch_array($result);  
        
          
        if($ss["username"] == $username && $ss["password"] == $password){  
            echo readfile("index.html");
        }  
        else{  
            echo readfile("page2.html");  
        }   
?>  

