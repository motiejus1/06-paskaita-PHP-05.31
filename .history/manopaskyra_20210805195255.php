<?php 


// header("Location: index.php");


//ar egzistuoja du saisiunkai
// jeigu mes susikursime forma, kurioje yra tik mygtukas + 
//paspaudus ta mygtuka, yra istrinami sausainiukai prisijungti ir teises
// nukreipimas i pradini langa
if(isset($_COOKIE['prisijungti']) && isset($_COOKIE['teises']))
{
    //$_COOKIE['teises']) == 3
    echo "Sveikas atvykes ".($_COOKIE['prisijungti']);
    //Cia ideti forma
    echo '<form action="manopaskyra.php" method="get">
    <button type="submit" name="atsijungti">Atsijungti</button>
    </form>';

    if(isset($_GET["atsijungti"])) {
        echo "Paspaustas atsijungimo mygtukas";
        // o kaip istrinti sausainiuka?
        //funkcija kuri istrina sausainiuka - jos tiesiog nera

        

    }

} else {
    echo "Labas";
}

?>