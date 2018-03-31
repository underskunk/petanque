<!DOCTYPE html>
<html>
<head>
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
  <? include 'bdd.php'; ?>
</head>

<body>
<h1>TinyMCE Quick Start Guide</h1>
  <form method="post">
    <textarea id="mytextarea" name="coucou"><? echo $_POST['coucou'] ?></textarea>
    <input type="submit" name="submit">
  </form>

<?
if (isset($_POST['submit'])) {

  $ajout = "UPDATE `accueil` SET `main_page`='".$_POST['coucou']."'";

  $res_ajout = $mysqli->query($ajout);

}



?>
</body>
</html>
