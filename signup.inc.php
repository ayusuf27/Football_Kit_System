<?php

  
   $username = $POST['username'];
   $password = $POST['password'];    


   
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysql_real_escape_string($username);
   $password = mysql_real_escape_string($password);
     
   $Database = mysql_select_db($con, 'Football_Kit_System');
if(isset($_POST['login'])) {
   $username = $POST['username'];
   $password = $POST['password']; 
    
}
 
  
    
   $result = mysql_query("select * from admin where username = '$username' and password = '$password'")
       or die("Failed to query database " mysql_error());
   $row = mysql_fetch_array($result);
   if ($row['username'] == $username && $row['password'] == $password) {
       echo "login success!!! welcome " $row['username'];
   } else {
       echo "Failed to login! ";
   }
    }
?>