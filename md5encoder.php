<?php
$md5 = "Not computed";
if ( isset($_GET['encode']) ) {
    $md5 = hash('md5', $_GET['encode']);
}
?>
<!DOCTYPE html>
<head><title>THAN HTIKE SOE - MD5_ENCODER.</title></head>
<body>
<h1>MD5 Encoder</h1>
<span style="color:red;font-weight:bold;">Enter 4-digit numbers to encode!</span>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="encode" size="40" placeholder="Enter 4-digit number"/>
<input style="background-color:darkred;color:white;" type="submit" value="Encode MD5"/>
</form>
<p><a href="md5encoder.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>
