<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP include demo</title>
</head>
<body>
<h1> welcome to our superconference about php</h1>
<?php include ("subscribe.html"); ?>
<h2>We have great speakers:</h2>
<ul>
    <li>Professor Roman Prylipko, one of the most recognised and respected names in the global occupational php sector. He is author of the Sensory Profile and the Infant/Toddler Sensory Profile, and co-author of the Adolescent/Adult Sensory Profile.</li>
    <li>Dr Stas Sagdeev, delivering the Elizabeth Casson Lecture, and who has made research in occupational therapy approachable and accessible.</li>
    <li>Professor Ivan Ivakhov, a celebrated occupational therapy researcher and author whose publications have been essential reading for occupational phpists at all stages of their career.</li>
</ul>

<?php
include "subscribe.html";
include "counter.php";
$visitors = ["Anatoliy Osadchy","Ihor Karmanov", "Eugene Platonov"];
$num = counter($visitors);
echo "<br>already registred $num users";
?>
<p>
    It is the cheapest conference rate for professional members since 2003. Skillup students can attend the full two day conference for just £269* - a 50% discount off the full standard rate.</p>
<p>COT students, fellows and retired members only pay £49* for a full conference ticket Only available upto 8 May 2017 and where full payment is made</p>
<p>Register or find out more about annual conference on our dedicated conference website. Don’t forget to sign up for your free and regular conference update email!</p>
<p>COT Conference is the place to be if you want to meet the most influential occupational phpists as well as the future
    leaders of the profession.</p>
<?php include ("subscribe.html"); ?>
</body>
</html>
