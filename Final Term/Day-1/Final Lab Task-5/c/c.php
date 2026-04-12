<?php
  $deg=[];
   if(isset($_POST['submit']))
     $deg=$_POST['deg'];
?>

<form method="post">
    <input type="checkbox" name="deg[]" value="SSC" <?php if(in_array("SSC",$deg)) echo "checked"; ?>>SSC
    <input type="checkbox" name="deg[]" value="HSC" <?php if(in_array("HSC",$deg)) echo "checked"; ?>>HSC
    <input type="checkbox" name="deg[]" value="BSc" <?php if(in_array("BSc",$deg)) echo "checked"; ?>>BSc
    <input type="checkbox" name="deg[]" value="MSc" <?php if(in_array("MSc",$deg)) echo "checked"; ?>>MSc
    <input type="submit" name="submit">
</form>

<?php 
  foreach($deg as $d)
   echo $d." ";
 ?>