<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cutli URL Shortner</title>
  <link rel="stylesheet" href="./style.css">
</head>
<?php
$origurl = isset($_GET['url'])?$_GET['url']:'';
?>
<body>

<!-- partial:index.partial.html -->
<script src="https://kit.fontawesome.com/5de545e21a.js" crossorigin="anonymous"></script>
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" method="get">
        <div id="container">
            <h2><i class="fas fa-cut"></i> CUTLI URL SHORTNER</h2>
        </div>
        <p class="name">
            <input name="url" type="url" class="validate[required] feedback-input" placeholder="URL" id="name" value="<?= $origurl?>"/>
        </p>
        <div class="submit">
            <input type="submit" value="SHORTEN" id="button-blue"/>
            <div class="ease"></div>
        </div>
    </form>
<?php

if (isset($_GET['url'])) {

echo "<br>";

$tiny=file_get_contents('http://tinyurl.com/api-create.php?url='.$_GET['url']);
echo "<input type='text' value='$tiny' id='myInput' class='validate[required] feedback-input'>";
echo "<div class='submit'><br> <button onclick='myFunction()' id='button-blue'>COPY</button> <div class='ease'></div></div>";
} else {
	echo ("");
}

// print_r($_POST['url']);
// echo "<br>";
// echo file_get_contents('http://tinyurl.com/api-create.php?url='.$_POST['url']);

/* For example
http://tinyurl.com/api-create.php?url=http://www.fullondesign.co.uk/
Would return:
http://tinyurl.com/d4px9f
*/
?>

  </div>
<!-- partial -->
  <script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
//   alert("Copied the text: " + copyText.value);
}
</script>
</body>
</html>
