<?php
include_once("config.php");
$result=mysqli_query($mysqli, "select shop,movie,price from movies where isrentend=1 order by price asc , shop asc limit 5");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.jpg" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Moviesadda</title>
</head>

<body>
<section id="container">
    <h3>report of past experiences.</h3>
    <br>
    <table id="data">
        <tr>
            <td>Shop</td>
            <td>Movie</td>
            <td>Price</td>
        </tr>
        <?php
        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['shop'] . "</td>";
            echo "<td>" . $res['movie'] . "</td>";
            echo "<td>" . $res['price'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</section>
</body>

</html>
