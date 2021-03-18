<!doctype html>
<html lang="en">
<head>
    <style>
        body{
            background-color: aqua;
        }
        .error{
            color: brown;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
<?php
$name = $email = $gender = $password = " ";
$nameErr = $emailErr = $genderErr = $passwordErr = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailErr= "Email address is required";
    }else{
        $email = test_input($_POST["email"]);
    }
    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
    if(empty($_POST["password"])){
        $passwordErr = "Enter the password";
    }else{
        if($password !== "Denis"){
            $passwordErr = "Invalid Password";
        }else{
            $password = test_input($_POST["password"]);
        }
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    <p><b><span>* <?php echo "Required field" ?></span></b></p>
    <br>
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Email: <input type="email" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Gender: Male<input type="radio" name="gender" value="Male">
    Female<input type="radio" name="gender" value="female">
    Other<input type="radio" name="gender" value="other">
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    Password: <input type="password" name="password">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    <input type="submit" name="submit" placeholder="SUBMIT">
</form>
<?php
echo "<h1>My details:</h1>";
echo $name;
echo "<br><br>";
echo $email;
echo "<br><br>";
echo $gender;




?>

</body>
</html>

