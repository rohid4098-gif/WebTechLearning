<?php
$name = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name"
           value="<?php echo ($name); ?>">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    if ($name == "") {
        echo "Name is empty!";
    } else {
        echo "Hello, $name";
    }
}
?>

</body>
</html>