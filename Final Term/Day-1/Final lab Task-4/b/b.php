<?php 

$g=""; if(isset($_POST['submit'])) 
$g=$_POST['gender']; 

?>

<form method="post">
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Other">Other
    <input type="submit" name="submit">
</form>

<?php if($g!="") 
    echo "Gender: $g"; 
?>