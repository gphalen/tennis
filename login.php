<?php session_start(); ?>

<html>
<head>
<title>
Test Form
</title>
</head>
<body>
        <link rel="stylesheet" type="text/css" href="main.css" />

<?php
include('mydbinfo.php');

$conn = new mysqli( $dbhost, $dbuser, $dbpass,$dbname );
    if ( $conn->connect_error ) {
        echo("<font color='red'><p> Unable to connect to the database system </font>" . //C&P'd from lab
             "<font color='red'> Please try later.</font> </p>");
        exit();
    }
   if($_POST["email"].value == "" or $_POST["password"].value == ""){
                print("<font color='red'><p>Sorry, you must enter values into each field.</font></p>");

}
else{

	$mail=$_POST["email"];
	$_SESSION["sessUsername"] = $mail;
	$pass=$_POST["password"];
	$query="SELECT email FROM logins";
	
	$result=mysqli_query($conn,$query) or die(mysql_error());

	while ($name=mysql_fetch_array($result)){
		array_push($names,$name['email']);
		for( $n = 0; $n < count($names); $n++){
			if($names[$n] == $name['email'])
			{
				$names++;
			}
			//$result= mysqli_query($conn,$query);
		}
	}


if(!mysql_query($query)){        
	print "<font color='red'><p>Welcome back, $mail!</p></font>";
}
 else{
    $result;
    print "<font color='red'>Your reservation was invalid.</font>";
}
}
?>
</body>
</html>
<?php
/*include('mydbinfo.php');

$conn = new mysqli( $dbhost, $dbuser, $dbpass,$dbname );
    if ( $conn->connect_error ) {
        echo("<p> Unable to connect to the database system" . //C&P'd from lab
             " Please try later. </p>");
        exit();
    }

   if($_POST["email"].value == "" or $_POST["password"].value == ""){
                print("<p>Sorry, you must enter values into each field.</p>");

	}
	else{

	$mail=$_POST["email"];
	$_SESSION["sessUsername"] = $mail;
	$pass=$_POST["password"];

	$query="SELECT * FROM logins";
	$result=mysql_query($conn,$query) or die(mysql_error());

while ($name=mysql_fetch_array($result)){
array_push($names,$name['email']);
for( $n = 0; $n < count($name); $n++){
                                        if($names[$n] == $name['email'])
                $result= mysqli_query($conn,$query);

	
	
	

 if(mysql_query($query)){        
print "Welcome back, $mail!";
}
 else{
                        $result;
                        print "Your reservation was invalid.";
                
}
}
}
}
        ?>
        </body>
        </html>
*/
?>
