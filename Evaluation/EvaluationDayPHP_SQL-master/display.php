<html>

<head>
    <title> Display </title>
</head>

<!-- Tentative via https://stackoverflow.com/questions/23174380/fetching-data-from-mysql-database-using-php-displaying-it-in-a-form-for-editing/23176701 __>
-->
<?php

require_once 'database.php';

$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
$db_found = mysqli_select_db($db_handle, DB_NAME);

$sql = mysqli_query($success, "SELECT * FROM real estate");
$row = mysqli_num_rows($sql);
//$result = mysql_query($sql) or die(mysql_error()); // Je n'ai pas compris cette ligne de code
var_dump($sql);
//var_dump($results);


/*
while ($row = mysql_fetch_array($result)) { // Je n'ai compris cette ligne également
    $address = $row['address'];
    $city = $row['city'];
    $pc = $row['pc'];
    $aera = $row['aera'];
    $price = $row['price'];
    $type = $row['type'];
    $description = $row['description'];
} */
?>

<body>
    <form action="" method="post">
        title
        <input type="text" name="title" value="<?php echo $row['title']; ?> " size=10>
        address
        <input type="text" name="address" value="<?php echo $row['address']; ?> " size=10>
        city
        <input type="text" name="city" value="<?php echo $row['city']; ?>" size=17>
        pc
        <input type="text" name="pc" value="<?php echo $row['pc']; ?>" size=17>
        aera
        <input type="text" name="aera" value="<?php echo $row['aera']; ?>" size=17>
        price
        <input type="text" name="price" value="<?php echo $row['price']; ?>" size=17>
        type
        <input type="text" name="type" value="<?php echo $row['type']; ?>" size=17>
        description
        <input type="text" name="description" value="<?php echo $row['description']; ?>" size=17>
    </form>
</body>