<html
<header><title>This is title</title>
    <link rel="stylesheet" href="css/styles.css">
</header>
<body>
<table>

<?php
/**
 * Created by PhpStorm.
 * User: flyberson
 * Date: 10/4/17
 * Time: 9:15 AM
 */

echo "hello <br>";

for ($i=0;$i<=10;$i++){
    echo $i;
}


?>
<br>
<?php
for ($i=0;$i<=10;$i++){
echo "<tr>";
   // echo $i*$i;
    for ($j=0;$j<=10;$j++){
        echo "<td>";
        echo $i."*".$j."=". $i*$j."<br>";
        echo "</td>";
    }
echo "</tr>";
}
?>
</table>
<?php
//http://localhost:63342/PHPExercises/index.php?name=friend
// tilføj efter ? get variabler
print_r($_GET);
echo "<br> hello"." ".$_GET['name'];

$username1 = "firstusername";
$username2 = "secondusername";
$password1 = "firstpasswrod";
$password2 = "secondpassword";
$array1 =array($userarray = array("username1","username2"), $passarray =array("password1","password2"));
echo"<br>";
echo $array1[0][0]."<br>";
echo $array1[0][1] ."<br>";
echo $array1[1][0]."<br>";
echo $array1[1][1]."<br>";

$inputuser = $_GET['username'];
$inputpass = $_GET['password'];
echo $inputuser;
echo $inputpass;

//for ($i=0;$i < $userarray)
if($inputuser) {
    for ($i = 0; $i <= count($userarray); $i++) {
        if ($inputuser == $userarray[$i]) {
            if ($inputpass == $passarray[$i]) {
                echo "logged in";

            }
        }

    }
}
?>
</body>
</html>
