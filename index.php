<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MD5 HASH CRACK - THAN HTIKE SOE</title>
  </head>
  <body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
<p>
  <pre>
<?php
echo "\nDebug Output:\n";
if(isset($_GET['md5'])){
  $startTime = microtime(true);
  $md5 = $_GET['md5'];
  $answer = "Not Found.";
  //text string
$count = 0;
$txt = "0123456789";
  $show = 15;
  for($i=0;$i<strlen($txt);$i++){
    $pin1 = $txt[$i];
    for($j=0;$j<strlen($txt);$j++){
      $pin2 = $txt[$j];
      for($k=0;$k<strlen($txt);$k++){
        $pin3=$txt[$k];
        for($n=0;$n<strlen($txt);$n++){
          $count = $count+1;
          $pin4 = $txt[$n];
          $pin = $pin1 . $pin2 .$pin3.$pin4;
          $hash = hash('md5',$pin);
          if($hash == $md5){
            $answer = $pin;
            echo "\nTotal Checks: $count\n";
            //echo "Ellpse Time: \n";
            echo "PIN : $answer\n";
            break;
          }
          else if($count==10000 && $hash!=$md5){
            echo "\nTotal Checks: $count\n";
            echo "PIN : NOT FOUND\n";
          }
          if ( $show > 0 ) {
              print "$hash $pin\n";
              $show = $show - 1;
          }
          }
        }
      }
    }
  //computing elapse time
  $endTime = microtime(true);
  print "Ellapse Time: ";
  print $endTime - $startTime ;
  print "\n";
}
 ?>
 </pre>
</p>
<form action="index.php" method="get">
<input type="text" name="md5" size="60" placeholder="Aa.." />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset</a></li>
<li><a href="md5encoder.php">MD5 Encoder</a></li>
<!-- <li><a href="makecode.php">MD5 Code Maker</a></li> -->
<li><a
href="https://github.com/ThanHtikeSoe-2021/md5decoding"
target="_blank">Source code for this application</a></li>
</ul>
  </body>
</html>
