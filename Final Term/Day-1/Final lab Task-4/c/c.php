<?php 

$g=""; 
if(isset($_POST['submit']))
 $g=$_POST['gender']; 

?>

<form method="post">
    <input type="radio" name="gender" value="Male" <?php if($g=="Male") echo "checked"; ?>>Male
    <input type="radio" name="gender" value="Female" <?php if($g=="Female") echo "checked"; ?>>Female
    <input type="radio" name="gender" value="Other" <?php if($g=="Other") echo "checked"; ?>>Other
    <input type="submit" name="submit">
</form>

<?php
   if($g!="")
     echo "Gender: $g"; 

?>