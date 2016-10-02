<?php


if($_SERVER['REQUEST_METHOD'] == "GET"){
    if( $_GET["emailTest"])
    {
        echo "GET - Your Email is: ". $_GET["emailTest"]. "<br />";
    }
}
else{
    if( $_POST["emailTest"])
    {
        echo "POST - Your Email is: ". $_POST["emailTest"]. "<br />";
    }
}
    

?>