<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
if (isset($_POST['submit'])) {

    require_once 'database.php';

    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    $db_found = mysqli_select_db($db_handle, DB_NAME);

    if ($db_found) {

        $title = $_POST['title'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $pc = $_POST['pc'];
        $aera = $_POST['aera'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $description = $_POST['description'];

        // We premuse that a valid postcode is a postcode with 4 characters :
        $lengthpc = strlen((string) $pc);
        if ($lengthpc < 3 || $lengthpc > 4) {
            echo 'The format of your postcode is invalid';
        }

        // Make sure that aera AND price inputs contains only numbers :

        if (is_numeric($_POST['aera'])) {
            $foo = $_POST['aera'];
        } else {
            echo 'Your must enter a number is this field';
        }

        if (is_numeric($_POST['price'])) {
            $foo = $_POST['price'];
        } else {
            echo 'Your must enter a number is this field';
        }


        $sql_query = "INSERT INTO `housing` (`title`, `address`, `city`, `aera`, `price`, `pc`, `type`, `description`)
 VALUES ('$title', '$address', '$city', '$pc', '$aera', '$price', '$type', '$description')";
        $result_query = mysqli_query($db_handle, $sql_query);
        var_dump($sql_query); // Jusque-là le var-dump prends bien les valeurs des inputs. 
        var_dump($result_query); // Le var-dump renvoit True. 
    }
}
?>



<!-- Je n'ai pas réussi à intégrer l'élément photo sur MySql avec BLOB -->

<body>
    <form action="" method=POST>
        <input type="text" name="title" placeholder=" title " required> <br>
        <input type="text" name="address" placeholder=" address " required> <br>
        <input type="text" name="city" placeholder=" city " required> <br>
        <input type="text" name="pc" placeholder=" pc " required> <br>
        <input type="text" name="aera" placeholder=" aera " required> <br>
        <input type="text" name="price" placeholder=" price " required> <br>
        <p>Please select your type:</p> 
        <input type="radio" name="type" value="rent"> Rent<br>
        <input type="radio" name="type" value="sale"> Sale<br>
        <input type="text" name="description" placeholder=" description "> <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>