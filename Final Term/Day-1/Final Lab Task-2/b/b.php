<?php
$email = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Email: <input type="email" name="email">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    if ($email == "") {
        echo "Email is empty!";
    } else {
        echo "Your email: $email";
    }
}
?>

</body>
</html>