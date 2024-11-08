<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Hours</title>
    <style>
        table {
            width: 100%;
            max-width: 300px;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<?php
$office_hours = [
    "Monday" => "9am - 5pm",
    "Tuesday" => "9am - 5pm",
    "Wednesday" => "9am - 5pm",
    "Thursday" => "9am - 5pm",
    "Friday" => "9am - 5pm",
    "Saturday" => "10am - 2pm",
    "Sunday" => "Closed"
];

echo "<table>";
echo "<tr><th>Day</th><th>Hours</th></tr>";

foreach ($office_hours as $day => $hours) {
    echo "<tr><td>$day</td><td>$hours</td></tr>";
}

echo "</table>";
?>

</body>
</html>
