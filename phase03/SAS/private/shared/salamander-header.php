<?php

  if(!isset($pageTitle)) 
    $pageTitle = 'Southern Appalachian Salamanders (S.A.S.)';
?>

<html lang="en">
  <head> 
    <title><?php echo h($pageTitle); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="All you can eat Salamanders.">
    <meta name="keywords" content="Salamanders, Appalachia, Southern, Appalachian">
    <meta name="author" content="April Cyr">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="<?php echo urlFor('/stylesheets/salamanders.css'); ?>">
  </head>

  <body>
    <header>
      <h1><a href="<?php echo urlFor('/'); ?>">Southern Appalachian Salamanders (SAS)</a></h1>
    </header>
    <nav>
      <ul>
        <li><a href="<?php echo urlFor('/'); ?>">Home of Salamanders</a></li>
        <li><a href="<?php echo urlFor('salamanders/'); ?>">Public/Salamanders</a></li>
      </ul>
    </nav>



