<?php 
  $bg="";
    if(isset($_POST['submit']))
      $bg=$_POST['bg'];
?>

<form method="post">
    <select name="bg">
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
    </select>
    <input type="submit" name="submit">
</form>

<?php
  if($bg!="")
    echo "Blood Group: $bg";
?>