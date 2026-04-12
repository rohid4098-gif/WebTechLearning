<?php
$dd=$mm=$yyyy="";
if(isset($_POST['submit'])){
    $dd=$_POST['dd'];
    $mm=$_POST['mm'];
    $yyyy=$_POST['yyyy'];
}
?>

 <form method="post">
    DOB:
    <input type="text" name="dd" placeholder="dd" size="2"> /
    <input type="text" name="mm" placeholder="mm" size="2"> /
    <input type="text" name="yyyy" placeholder="yyyy" size="4">
    <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
    echo "DOB: $dd/$mm/$yyyy";
}
?>