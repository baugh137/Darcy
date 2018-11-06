<?php

require_once "dogtector.php";



$p1 = new dogtector("Pride & Prejudice", "Scottish Deerhound");

$p2 = new dogtector("Sense & Sensibility", "Bernese Mountain Dog");

$p3 = new dogtector("Emma", "Broholmer");

$p4 = new dogtector("Mansfield Park", "Bluetick Coonhound");

$p5 = new dogtector("Northanger Abbey", );

$p6 = new dogtector("Legally Blonde Platinum Collection", "2 disc set", 392, 10.00);



file_put_contents("products.txt", serialize($p1) . "\n", FILE_APPEND | LOCK_EX);

file_put_contents("products.txt", serialize($p2) . "\n", FILE_APPEND | LOCK_EX);

file_put_contents("products.txt", serialize($p3) . "\n", FILE_APPEND | LOCK_EX);

file_put_contents("products.txt", serialize($p4) . "\n", FILE_APPEND | LOCK_EX);