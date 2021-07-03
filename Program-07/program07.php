<!DOCTYPE HTML>
<html>
    <head>

     <meta http-equiv="refresh" content="1" />
      <title> program 7 </title>
     <style>
     p {
     color: white;
     font-size: 30px;
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
     }
     body {
     background-color: blue;
     }
     </style>
     <p> <?php 
        echo "Server Time is ".date(" h: i : s A")."<br>";
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
     ?> </p>
   </head>
</html>