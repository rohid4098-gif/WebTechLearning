<?php
   $deg=[];
    if(isset($_POST['submit']))
      $deg=$_POST['deg'];
 ?>

<form method="post">
    <input type="checkbox" name="deg[]" value="SSC">SSC
    <input type="checkbox" name="deg[]" value="HSC">HSC
    <input type="checkbox" name="deg[]" value="BSc">BSc
    <input type="checkbox" name="deg[]" value="MSc">MSc
    <input type="submit" name="submit">
</form>

<?php
  foreach($deg as $d)
   echo $d." ";
 ?>