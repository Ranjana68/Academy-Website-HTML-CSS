<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("database", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dob = $_POST['DOB'];
$email= $_POST['email'];
$pwd = $_POST['password'];
$repwd = $_POST['repassword'];
$pro = $_POST['profession'];
$course = $_POST['SPORT'];
$gender= $_POST['Gender'];

if($fname !='')
{
    if($pwd==$repwd)
	{
                      $query = mysql_query("insert into form(firstname,lastname,DOB,email,password,repassword,profession,SPORT,Gender) values ('$fname', '$lname','$dob','$email','$pwd',
                       '$repwd','$pro','$course','$gender')");
                      echo "<script type='text/javascript'>alert('account created successfully!');";
                         echo'window.location.href="submit.html";</script>';   
                     
                          
                }
    else
        echo"failure";
  
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>