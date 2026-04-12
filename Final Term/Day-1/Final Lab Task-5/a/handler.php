<?php
  if(isset($_POST['submit'])){

    foreach($_POST['deg'] as $d){
        echo $d." ";
    }
}

?>