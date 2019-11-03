<?php

session_start();

// deslogando usuario
session_destroy();

// voltando pra home
header('Location:index.php');


?>