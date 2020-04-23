<?php
  include_once 'init.php';
?>
<link href="../css/navbar.css" rel="stylesheet">
<div class="contanier-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="index.php">مصر أدها</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pg . 'MedicalServices.php'?>">الخدمات الصحية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pg . 'About.php'?>">عن المبادرة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $pg . 'Contact.php'?>">تواصل</a>
                </li>
            </ul>
        </div>
    </nav>