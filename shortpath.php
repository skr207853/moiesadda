<?php
include_once("config.php");
if(isset($_POST['update'])) {
    $shop=mysqli_real_escape_string($mysqli,$_POST['shop']);
    $movie=mysqli_real_escape_string($mysqli,$_POST['movie']);
    $price=mysqli_real_escape_string($mysqli,$_POST['price']);
    $id=mysqli_real_escape_string($mysqli,$_POST['id']);
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
        $result=mysqli_query($mysqli, "update movies set shop='$shop', movie='$movie', price='$price' where id='$id'");
        header("Location: index.php");
    } else {
        echo "<br/> <a href='javascript:self.history.back();'>Go back</a>";
    }
} else {
    
}
?>
<?php
$id=$_GET['id'];
$result=mysqli_query($mysqli,"select * from movies where id=$id");
while($res=mysqli_fetch_array($result)) {
    $shop=$res['shop'];
    $movie=$res['movie'];
    $price=$res['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add movies</title>
</head>
<body>
    <section id="container">
        <form action="edit.php" method="post">
            <label for="shop">shop</label>
            <input type="text" name="shop" id="shop", value="<?php echo $shop; ?>"></br>
            <label for="movie">movie</label>
            <input type="text" name="movie" id="movie", value="<?php echo $movie; ?>"></br>
            <label for="price">price</label>
            <input type="text" name="price" id="price", value="<?php echo $price; ?>"></br>
            <input type="hidden" name="id" value="<?php echo $id;?>"></br>
            <input type="submit" name="update" value="update">
        </form>
    </section>
</body>
</html>

