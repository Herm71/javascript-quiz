<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Blackbird Sandbox</title>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,700|Roboto+Condensed:300,400,700" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
   .secondary-name h1 {
       font-family: "Roboto Condensed", sans-serif;
       text-transform: uppercase;
       line-height: 1.2;
       font-size: 36px;
       color: #006aad;
       font-weight: 400;


   }
   a {
       text-decoration: none;
       color: #006aad;
   }
   .connector {
       font-family: "EB Garamond", serif;
       text-transform: none;
       line-height: 1.2;
       font-size: 22.5px;
       color: #333;
       font-size: .75em;
       font-weight: 300;
       font-style: italic;

   }
    </style>
</head>
<body>
<?php

echo '<div class="secondary-name"><h1><a class="" href="/">Department of History</a></h1></div>';

// echo '<button onclick= "split.forEach(splitFunction)">Split it!</button>';

echo '<p id="demo"></p>';

echo '<p id="demoTwo"></p>';

echo '<p id="demoThree"></p>';
?>

<script src="split.js"></script>
</body>
</html>

