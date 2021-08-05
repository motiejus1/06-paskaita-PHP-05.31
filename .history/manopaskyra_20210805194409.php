<?php 


// header("Location: index.php");


//ar egzistuoja du saisiunkai
// jeigu mes susikursime forma, kurioje yra tik mygtukas
//paspaudus ta mygtuka, yra istrinami sausainiukai prisijungti ir teises

if(isset($_COOKIE['prisijungti']) && isset($_COOKIE['teises']))
{
    //$_COOKIE['teises']) == 3
    echo "Sveikas atvykes ".($_COOKIE['prisijungti']); 
} else {
    echo "Labas";
}

?>