<!-- 
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
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
         <?php 

            $array15 = [];
            while(count($array15) < 15){
                $randomNum = rand(1, 100); //genero un numero random da 1 a 100
                if(!in_array($randomNum, $array15)){ //condizione per verificare se il randomNum è già incluso nell'array
                    $array15[] = $randomNum; //pusho randomNum nell'array
                }
            }
            var_dump($array15)
         ?>
     </div>
 </body>
 </html>l