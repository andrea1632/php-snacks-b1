<!-- 
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome,
    Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->
 <?php
    $alunni = [
        [
            "name" => "Andrea",
            "cognome" => "Bellucci",
            "voti" => [10,10,2,4,5],
        ],
        [
            "name" => "Michele",
            "cognome" => "Cristiani",
            "voti" => [7,4,2,6,5]
        ],
        [
            "name" => "Giuseppe",
            "cognome" => "Rossi",
            "voti" => [9,8,10,6,5]
        ]
        ];
        var_dump($alunni);
        for ($i = 0; $i < count($alunni); $i++){
            $votoAlunniLength = count($alunni[$i]["voti"]);
            $voto = 0;
            for($index = 0; $index < $votoAlunniLength; $index++){                               
                $voto += $alunni[$i]["voti"][$index];            
            }
            $mediaVoto = $voto / $votoAlunniLength;
            echo 'nome:' . $alunni[$i]["name"] . "<br>" . 'cognome:' . $alunni[$i]["cognome"] . "<br>" . 'media dei voti:' . $mediaVoto . "<br> <br>";
        }
 ?>