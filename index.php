<?php
include_once("config.php");
$result = mysqli_query($mysqli, "select * from movies");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.jpg"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Moviesadda</title>
</head>

<body>
<section id="container">
    <table id="data">
        <tr>
            <td>Shop</td>
            <td>Movie</td>
            <td>Price</td>
            <td>operation</td>
        </tr>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['shop'] . "</td>";
            echo "<td>" . $res['movie'] . "</td>";
            echo "<td>" . $res['price'] . "</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>|<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure?')\">Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="add.html">add movies</a></br>
    <a href="search.php">search</a></br>
    <a href="report.php">report</a></br>
</section>
</body>

</html>