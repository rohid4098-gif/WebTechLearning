<?php
  $bg="";
    if(isset($_POST['submit']))
      $bg=$_POST['bg'];
?>

<form method="post">
    <select name="bg">
        <option value="A+" <?php if($bg=="A+") echo "selected"; ?>>A+</option>
        <option value="B+" <?php if($bg=="B+") echo "selected"; ?>>B+</option>
        <option value="O+" <?php if($bg=="O+") echo "selected"; ?>>O+</option>
    </select>
    <input type="submit" name="submit">
</form>

<?php
  if($bg!="")
    echo "Blood Group: $bg";
?>