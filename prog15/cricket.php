<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }

        th {
            background-color: lightgrey;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center;">
        List of Indian Cricket Players
    </h2>

    <?php
    $players = array(
        "Rohit Sharma",
        "Virat Kohli",
        "KL Rahul",
        "Hardik Pandya",
        "Jasprit Bumrah"
    );

    echo "<table>";
    echo "<tr><th>Sl. No.</th><th>Player Name</th></tr>";

    foreach ($players as $key => $player) {
        echo "<tr>";
        echo "<td>" . ($key + 1) . "</td>";
        echo "<td>" . htmlspecialchars($player) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>
</html>
