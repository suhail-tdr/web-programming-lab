<html>
<head>
    <title>Electricity Bill</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        form {
            background-color: white;
            padding: 20px;
            width: 300px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 5px gray;
        }

        input {
            padding: 8px;
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: darkgreen;
        }
    </style>
</head>

<body>

<center>
    <h2>Electricity Bill</h2>

    <form name="form" action="" method="POST">

        <label>Enter Your Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>How Many Units Are Used?</label><br>
        <input type="number" name="unit" min="0" required><br><br>

        <input type="submit" value="Submit">

    </form>
</center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["name"]);
    $units = $_POST["unit"];

    $rate1 = 2;
    $rate2 = 5;
    $rate3 = 10;

    if (empty($name))
    {
        echo "<script>alert('Please enter your name correctly')</script>";
    }
    else if ($units == "")
    {
        echo "<script>alert('Units are required')</script>";
    }
    else
    {
        if ($units <= 100)
        {
            $bill = $units * $rate1;
        }
        else if ($units <= 300)
        {
            $bill = (100 * $rate1) + (($units - 100) * $rate2);
        }
        else
        {
            $bill = (100 * $rate1) + (200 * $rate2) + (($units - 300) * $rate3);
        }

        echo "<center>";
        echo "<h3>Electricity Bill Details</h3>";
        echo "Name: $name <br>";
        echo "Units Used: $units <br>";
        echo "Electricity Bill: ₹" . number_format($bill, 2);
        echo "</center>";
    }
}
?>

</body>
</html>
