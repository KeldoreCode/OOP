<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css.css" />
    </head>
    <body>
        <h1>Galerie obrázků</h1>
        <?php
        require_once 'Galerie.php';
        
        $galerie = new Galerie('obrazky', 4);
        $galerie->nacti();
        ?>
        
        <div class="gallery">
        <?php
            $galerie->vypis();
        ?>
        </div>
        
    </body>
</html>
