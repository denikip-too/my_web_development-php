<!doctype html>
<html lang="en">
<head>
    <style>
        .error {
            color: #FF0000;
        }
        body{
            background-color: aqua;
            color: brown;
            font-size: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<?php
$fnameERR = $snameERR = $emailERR = $dateERR = " ";
$fname = $sname = $email = $date = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["fname"])) {
    $fnameErr = "First name is required";
} else {
    $fname = test_input($_POST["fname"]);
}
if(empty($_POST["sname"])){
    $snameERR = "First name is required";
}else{
    $sname = test_input($_POST["sname"]);
}
if (empty($_POST["email"])){
    $emailERR = "Email required";
}else{
    $email = test_input($_POST["email"]);
}
if(empty($_POST["date"])){
    $dateERR = "Date is required";
}else{
    $date = test_input($_POST["date"]);
}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p><span class="error">*Required fields</span></p>
    First Name: <input type="text" name="fname" placeholder="Enter your first name" >
    <span class="error">* <?php echo $fnameERR; ?></span>
    <br>
    <br>
    Second Name: <input type="text" name="sname" placeholder="Enter your second name"  >
    <span class="error">* <?php echo $snameERR; ?></span>
    <br>
    <br>
    Email: <input type="email" name="email" placeholder="Enter your email" >
    <span class="error">* <?php echo $emailERR; ?></span>
    <br>
    <br>
    DOB: <input type="date" name="date">
    <span class="error">* <?php echo $dateERR ?></span>
    <br>
    <br>
    <input type="submit" name="submit" placeholder="SUBMIT">
</form>

<?php
echo "<h1>My Details:</h1>";
echo "<br>";
echo $fname." ".$sname;
echo "<br>";
echo $email;
echo "<br>";
echo $date;
echo "<br>";
?>
</body>
</html>
