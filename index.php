<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('Clovek.php'); // připojíme objekt '_once' zajistí že se načte pouze jednou
        $karel = new Clovek('Karel', 'Novák', 30);
      
        
        $jan = new Clovek('Jan', 'Nový', 25);
       
        echo 'Ahoj, jmenuji se '.$karel->jmeno;
        echo '<br/>';
       $karel->behej(10);
       $karel->behej(10);
       $karel->spi(1);
       $karel->behej(10);
       
        ?>
    </body>
</html>
