<?php include "../template/header.php" ?>
<body>
<h1>TinyMCE Quick Start Guide</h1>
  <form method="post">
    <textarea id="mytextarea" name="coucou"><?php echo $init_accueuil; ?></textarea>
    <input type="submit" name="submit">
  </form>

<?php
if (isset($_POST['submit'])) {
  $ajout = "UPDATE `accueil` SET `main_page`='".$_POST['coucou']."'";
  $res_ajout = $mysqli->query($ajout);
}
?>
<?php include "../template/footer.php" ?>