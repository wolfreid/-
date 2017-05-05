<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello username</title>
</head>
<body>
    
    <p> Здравствуйте <?php echo $_POST['username'];?>, Ваша заявка принята. 
    Ожидайте звонка для подтверждения заказа</p>
    
  
     
<?php
if($_POST['button'] == "Отправить")
{
        if(!empty($_POST['email1']))
        {
           if(preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email1']))
           {
              echo $_POST['email1']. "  -   Pravilno.";
           }
           else
           {
              echo $_POST['email1']. "  -  Ne pravilno";   
           }
        }
          else
          
        {
           echo '<p>Vy ne vveli svoi email.</p>';    
        }
}

?> 


</body>
</html>