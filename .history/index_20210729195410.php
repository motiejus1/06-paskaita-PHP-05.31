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

        if (isset($_GET["vardas"]) && !empty($_GET["vardas"]) && isset($_GET["slaptazodis"]) && !empty($_GET["slaptazodis"]) )
        {
            $vardas = $_GET["vardas"];
            $slaptazodis = $_GET["slaptazodis"];

            foreach($registruotiVartotojai as $elementas) {
        
                echo $elementas["vardas"];
                echo "<br>";
                echo $elementas["slaptazodis"];
                echo "<br>";
                echo $elementas["teises"];
                echo "<br>";
                
                if($vardas == $elementas["vardas"] && $slaptazodis == $elementas["slaptazodis"]) {
                    // header("Location: manopaskyra.php");
                    echo "Sveikas atvykes, ".$elementas["vardas"];

                } else {
                    echo "Bandykite jungtis is naujo";
                    // header("Location: 404.php");
                }
            }
            // foreach()
            // for() cikle


        } else {
            echo "Laukeliai yra tusti";
        }
        // var_dump($registruotiVartotojai);
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