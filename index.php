<html style='height: 100%'>
  <head>
    <title>index.php</title>
  </head>
  <body style="margin: 0px; background: #0e0e0e; height: 100%">
    <?php
    // Create the image
    $im = imagecreatetruecolor(1690, 400);
 
    // Create some colors
    $backg = imagecolorallocate($im, 255, 255, 255);
    $green = imagecolorallocate($im, 0, 153, 38);
    imagefilledrectangle($im, 0, 0, 1680, 390, $backg);
 
    // Create text
    $characters = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM!@#$%';
    $charLength = strlen($characters);
    $text = '';
    for ($i = 0; $i < 14; $i++) {
      $text .= $characters[random_int(0, $charLength - 1)];
    };
    echo $text;
    // Replace path by your own font path
    $font = './dynamicwave.ttf';
 
    // Add the text
    imagettftext(
        $im,
        130, // font size
        0,  //angle
        150, // x
        270, // y
        $green, $font, $text);
 
    imagepng($im, 'captcha.png');
//    echo '<img style="display: block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="ronald.png">';
    imagedestroy($im);
    ?>
  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
<!--  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>-->
  </body>
</html>
