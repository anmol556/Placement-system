<?php
$server = "localhost";
$username = "root";
$password = "" ;
$db ="placement";

$con = mysqli_connect($server, $username, $password, $db); 
if (!$con)
{ 
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "Sucess connecting to the db ";

$USN = $_POST['usn'];
$Name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dateofbirth'];
$email_id = $_POST['email_id'];
$contactno = $_POST['contactnumber'];
$backlog = $_POST['backlog'];
$marks10th = $_POST['10thmarks'];
$board10th = $_POST['10thboard'];
$yrpass10th = $_POST['yearpassing10th'];
$marks12th = $_POST['12thmarks'];
$board12th = $_POST['12thboard'];
$yrpass12th = $_POST['yearpassing12'];
$graduation = $_POST['graduation'];
$branch = $_POST['branch'];
$aggregate = $_POST['aggregate'];
$college = $_POST['college'];
$skills = $_POST['skills'];

$sql = "INSERT INTO `myname` (`usn`, `name`, `gender`, `dateofbirth`, `emailid`, `contactno`, `numberofbacklog`, `marksin10th`, `10thboard`, `yearpass10th`, 
`marks12th`, `board12th`, `yearpass12th`, `graduationdegree`, `branch`, `aggregateinug`,
 `college`, `skills`) VALUES ('$USN', '$Name', '$gender',  '$dob', '$email_id', '$contactno', 
'$backlog', '$marks10th', '$board10th', '$yrpass10th', '$marks12th', 
'$board12th', '$yrpass12th', '$graduation', '$branch', '$aggregate', '$college',
'$skills');";
$sql = mysqli_query($con, "INSERT INTO `myname` (`usn`, `name`, `gender`, `dateofbirth`, `emailid`, `contactno`, `numberofbacklog`, `marksin10th`, `10thboard`, `yearpass10th`, 
`marks12th`, `board12th`, `yearpass12th`, `graduationdegree`, `branch`, `aggregateinug`,
 `college`, `skills`) VALUES ('$USN', '$Name', '$gender',  '$dob', '$email_id', '$contactno', 
'$backlog', '$marks10th', '$board10th', '$yrpass10th', '$marks12th', 
'$board12th', '$yrpass12th', '$graduation', '$branch', '$aggregate', '$college',
'$skills');");
if($sql)
{
    echo "data nsertd successfuly";
}
else{

echo("Failed");
}
?>
 