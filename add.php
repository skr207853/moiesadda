<?php
include_once("config.php");
if(isset($_POST['Submit'])) {
    $shop=mysqli_real_escape_string($mysqli,$_POST['shop']);
    $movie=mysqli_real_escape_string($mysqli,$_POST['movie']);
    $price=mysqli_real_escape_string($mysqli,$_POST['price']);
    $f=true;
    if(empty($shop)) {
        echo "<font color'red'>shop field is empty.</font><br/>";
        $f=false;
    }
    if(empty($movie)) {
        echo "<font color'red'>movie field is empty.</font><br/>";
        $f=false;
    }
    if(empty($price)) {
        echo "<font color'red'>price field is empty.</font><br/>";
        $f=false;
    }
    if($f) {
        $result=mysqli_query($mysqli, "insert into movies(shop,movie,price) values('$shop','$movie','$price')");
        echo "<font color='green'>movies added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
    } else {
        echo "<br/> <a href='javascript:self.history.back();'>Go back</a>";
    }
} else {
    echo "<font color'red'>to yaha aaye kaise</font><br/>";
}
?>
