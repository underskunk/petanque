  <?php include 'bdd.php'; ?>

<form method="post">
	<input type="link" name="link">
	<input type="submit" name="live_link">
</form>


<?php

if (isset($_POST['live_link'])) {

  $lien = "UPDATE `live` SET `lien`='".$_POST['link']."'";

  $res_lien = $mysqli->query($lien);

}



?>









<?php include 'footer.php'; ?>