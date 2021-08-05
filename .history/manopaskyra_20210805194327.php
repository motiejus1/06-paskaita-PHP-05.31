<?php 


// header("Location: index.php");


//ar egzistuoja du saisiunkai

if(isset($_COOKIE['prisijungti']) && isset($_COOKIE['teises']))
{
    //$_COOKIE['teises']) == 3
    echo "Sveikas atvykes ".($_COOKIE['prisijungti']); 
} else {
    echo "Labas";
}

?>