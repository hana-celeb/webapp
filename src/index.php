<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/application.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>
<div id="catch">
<?php
require('lib/speaker.php');
echo Speaker::sayHelloWorld();
?>
</div>
<div id="button01"></div>
</body>
</html>
