<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 paskaita</title>
</head>
<body>

    <div class="prisijungimas">
        <form action="index.php" method="get">
            <input type="text" name="vardas" placeholder="Suveskite varda"/>
            <input type="password" name="slaptazodis" placeholder="Suveskite slaptazodi"/>
            <button type="submit" name="prisijungti" >Prisijungti</button>
        </form>
    </div>

    <?php

    if(isset($_GET["prisijungti"])) {
 
        $registruotiVartotojai = array(
            array(
                "vardas" => "admin", 
                "slaptazodis" => "admin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admin123", 
                "slaptazodis" => "admin123", 
                "teises" => 2 
            ),
            array(
                "vardas" => "aaadmin", 
                "slaptazodis" => "aaadmin", 
                "teises" => 3 
            ),
            array(
                "vardas" => "adminnnn", 
                "slaptazodis" => "adminnnn", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admmmmin", 
                "slaptazodis" => "admmmmin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admiiiin", 
                "slaptazodis" => "admiiiin", 
                "teises" => 3
            ),
            array(
                "vardas" => "addddmin", 
                "slaptazodis" => "addddmin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admmmmmmmmin", 
                "slaptazodis" => "admmmmmmmmin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "aaaaaaaadmin", 
                "slaptazodis" => "aaaaaaaadmin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admiiiinnnnn", 
                "slaptazodis" => "admin", 
                "teises" => 3
            ),
            
        );

        var_dump($registruotiVartotojai)
    }

// 3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. 
// Susikurkite registruotu vartotoju masyva(bent 10).
//Registruotu vartotoju masyve suvesti teisiu duomenis.
// 1 - administratorius
// 2 - vartotojas
// 3 - turinio redaguotojas 
// Jei sugalvota kombinacija sutampa su tuo, 
// kas įvesta į input laukelius.
//*Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
//Kuriame mato pranesima, su "Sveikas atvykes" ir savo varda.
//*Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php
 // Svetaine turi atsiminti, kad vartotojas yra prisijunges(Cookies)
 // Taip pat manopaskyra.php turi buti mygtukas "Atsijungti".   
    
    ?>
</body>
</html>