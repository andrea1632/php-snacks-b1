<!-- 
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <div>
        <form action="" method="GET">
            <input type="text" name="name">
            <input type="text" name="mail">
            <input type="text" name="age">
            <button type="submit"> send </button>
        </form>
        <div>
            <?php
                $name= $_GET['name'];
                $mail= $_GET['mail'];
                $age= $_GET['age'];
                $pos = strpos($mail, '@');
                $pos2 = strpos($mail, '.');
                echo "<p>" . 'il nome è ' . $name . "</p>" . "<p>" . 'la mail è :' . $mail . "</P>" . "<p>" . "l'età è :" . $age . "<p>";
                if (strlen($name) > 3 && $pos == true && $pos2 == true && is_numeric($age)){
                    echo 'success';
                } else{
                    echo 'access denied';
                }
            ?>
        </div>
    </div>
 </body>
 </html>