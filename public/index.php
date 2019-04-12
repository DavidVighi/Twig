<?php

require '../vendor/autoload.php';
$products = ['Slip Bannane', 'String Corde', 'Genouillère printemps', 'Caleçon Hérisson', 'Son Goku'];
$loader = new Twig_Loader_Filesystem('../src/view/');
$twig = new Twig_Environment($loader);
echo $twig->render('view.html.twig', ['products' => $products]);