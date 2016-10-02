<?php
if( $_POST["enctypeText"])
{
echo "Enctype text is : ". $_POST["enctypeText"]. "<br />";
echo $_SERVER["CONTENT_TYPE"];
}
?>