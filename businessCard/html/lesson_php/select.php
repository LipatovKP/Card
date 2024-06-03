<?
session_start();
$last = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "";
setcookie('lastPage', $last, time() + 3600);
include "../inc/getPostdz/functions.php";
logOut();
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>

<body>
  <form action="select.php" method="post">

    <select name="Laboratory">
      <option value="questionnaire"> Опрос </option>
      <option value="fact"> Fact </option>
      <option value="bitrix"> Bitrix </option>
    </select>
    <input type="submit" name="Submit" value="submit">
    <input type="submit" name="logout" value="logout">
  </form>

  <a id="myLink" target="_blank" href="<?= $myLink = selectLab() ?>.php"><? echo $myLink ?></a>

</body>
<? require "../inc/inc_lk_F_H/footer.php"; ?>

</html>