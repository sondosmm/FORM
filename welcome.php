<!DOCTYPE html>
<html>
<body>
    <h2> Registration is done </h2>

<?php
if(isset($_POST["submit"])){
echo "<h4>Your Input:</h4>";
echo "Your Name :";
echo  $_POST["firstname"];
echo " ";
echo $_POST["secondname"];
echo "<br>";
echo "Your E-mail :";
echo $_POST["email"];
echo "<br>";
echo "Your Address :";
echo $_POST["address"];
echo "<br>";
echo "Your Birthday :";
echo $_POST["birthday"];

echo "<br>";

}
?>

</body>
</html>