<!DOCTYPE html>
<html>
<head>
<style>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

h2 {
    text-align: center;
    color: #333;
}

h3 {
    text-align: center;
    color: green;
}

p {
    text-align: center;
    color: #333;
}


div {
    width: 300px;
    margin: 30px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px #ccc;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>

</style>
</head>
<body>
<h2>Registration Form</h2>
<div>
<form method="POST" action="#">
<label for="name">Name:</label>
<input type="text" name="name" id="name"><br>
<label for="email">Email:</label>
<input type="text" name="email" id="email"><br>
<label for="mobile">Mobile:</label>
<input type="text" name="mobile" id="mobile"><br>
<label for="password">Password:</label>
<input type="password" name="password" id="password"><br><br>
<input type="submit" value="Register">
</form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
echo "<script>alert('name is required')</script>";
} else if(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])){
echo "<script>alert('Enter Your Name correctly')</script>";
}
else if (empty($_POST["email"])) {
echo "<script>alert('email is required')</script>";
} else if (!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/",$_POST["email"])) {
echo "<script>alert('email is not correct format')</script>";
}
else if(empty($_POST["mobile"])) {
echo "<script>alert('mobile is required')</script>";
} else if(strlen($_POST["mobile"]) != 10) {
echo "<script>alert('mobile number should be 10 number')</script>";
}
else if(empty($_POST["password"])) {
echo "<script>alert('password is required')</script>";
} else if(strlen($_POST["password"]) < 8) {
echo "<script>alert('Password must be at least 8 characters');</script>";
}
else if(!preg_match("/^[a-zA-Z]+@[0-9]*$/",$_POST["password"]))
{
echo "<script>alert('password is not correct format')</script>";
}
else {
    echo "<div style='text-align:center;'>";
    echo "<h3>Form Submitted</h3>";
    echo "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
    echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
    echo "<p><strong>Mobile:</strong> " . $_POST["mobile"] . "</p>";
    echo "</div>";
}




}
?>
</body>
</html>