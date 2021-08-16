<?php

session_start();

require('models/Articles.php');

$articles = getArticles();


require('views/accueilView.php');
