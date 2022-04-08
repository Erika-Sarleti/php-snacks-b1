<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snacks</title>
</head>
<body>
    <!-- SNACK 1 -->
    <?php 
    $partite = [
        [
            "casa" => [
                "nome" => "Olimpia Milano",
                "points" => 98,
            ],
            "ospite" => [
                "nome" => "Cantù",
                "points" => 64,
            ]
        ],
        [
            "casa" => [
                "nome" => "Virtus Roma",
                "points" => 55,
            ],
            "ospite" => [
                "nome" => "Junior Casale",
                "points" => 64,
            ]
        ],
        [
            "casa" => [
                "nome" => "Virtus Roma",
                "points" => 55,
            ],
            "ospite" => [
                "nome" => "Junior Casale",
                "points" => 64,
            ]
        ],
    ];

    for ($i = 0; $i < count($partite); $i++) { ?> 
    <li> 
        <span> <?= $partite[$i]['casa']['nome']?> - <?= $partite[$i]['ospite']['nome']?> |</span>
        <span> <?= $partite[$i]['casa']['points']?> - <?= $partite[$i]['ospite']['points']?></span>
    </li>

    <?php }
    ?>
<!-- SNACK 2 -->
<br> <br> <br>

<form action="" method="GET">
        <label for="js-name">Inserisci il nome: </label>
        <input type="text" name="name" id="js-name"><br>
        <label for="js-mail">Inserisci una mail valida: </label>
        <input type="text" name="mail" id="js-mail"><br>
        <label for="js-age">Inserisci l'età: </label>
        <input type="number" name="age" id="js-age">
        <button>Login</button>
    </form>
    <?php 
        if (isset($_GET['name']) && $_GET['mail'] && $_GET['age']) {
            if ((strlen($_GET['name']) > 3) && (strpos($_GET['mail'], '@')) && (strpos($_GET['mail'], '.', -4)) && (is_numeric($_GET['age']))) {
                echo 'Accesso riuscito!';
            } else {
                echo 'Accesso negato!';
            }
        }
    ?>
<!-- SNACK 4 -->

<br> <br> <br>

<?php 
        $arrandom = [];
        while (count($arrandom) < 15) {
            $number = rand(1, 30);
            if (!in_array($number, $arrandom)) {
                $arrandom[] = $number;
            }
        }
        var_dump($arrandom)
    ?>

<!-- SNACK 5 -->
<br> <br> <br>

<?php
        $par = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit perspiciatis dicta enim debitis quaerat, blanditiis eos omnis libero repudiandae! Rerum minima alias nulla provident minus nesciunt molestias natus deleniti doloremque.
        Dolor, assumenda. Illum esse quisquam amet magnam incidunt vero natus, quod facere aut laborum modi, id sint reiciendis laboriosam fuga ipsum enim inventore nam porro dolor eum soluta aliquam optio.";

        $split_par = explode(".", $par);
        for ($i = 0;  $i < count($split_par); $i++) {
            ?>
            <p>
                <?=
                    $split_par[$i] . ".";
                ?>
            </p>
        <?php    
        }
    ?>
</body>
</html>