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

        // 1 vartotojas turi varda, slaptazodi, teisiu duomenis 


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
                "vardas" => "admin", 
                "slaptazodis" => "admin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admin", 
                "slaptazodis" => "admin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admin", 
                "slaptazodis" => "admin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admin", 
                "slaptazodis" => "admin", 
                "teises" => 1 
            ),
            array(
                "vardas" => "admin", 
                "slaptazodis" => "admin", 
                "teises" => 1 
            ),
            
        );
    }

// 3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slapta??odis. 
// Susikurkite registruotu vartotoju masyva(bent 10).
//Registruotu vartotoju masyve suvesti teisiu duomenis.
// 1 - administratorius
// 2 - vartotojas
// 3 - turinio redaguotojas 
// Jei sugalvota kombinacija sutampa su tuo, 
// kas ??vesta ?? input laukelius.
//*Jei duomenys yra ??vesti teisingi, vartotojas nukreipiamas ?? fail?? - manopaskyra.php.
//Kuriame mato pranesima, su "Sveikas atvykes" ir savo varda.
//*Kitu atveju, vartotojas nukreipiamas ?? puslap?? - 404.php
 // Svetaine turi atsiminti, kad vartotojas yra prisijunges(Cookies)
 // Taip pat manopaskyra.php turi buti mygtukas "Atsijungti".   
    
    ?>
</body>
</html>