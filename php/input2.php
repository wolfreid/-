<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
if($_POST['button'] == "Отправить")
{
        if(!empty($_POST['email']))
        {
           if(preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email']))
           {
              echo $_POST['email']. "  -   Valid.";
           }
           else
           {
              echo $_POST['email']. "  -  Not Valid.";   
           }
        }
          else
          
        {
            echo  "No means";    
        }
}

?>    
</body>
</html>
 

