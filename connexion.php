<?php
$link = mysqli_connect("localhost","root","","mou9ef");
if(!$link){ 
    header('location: error/404.html');
}
?>