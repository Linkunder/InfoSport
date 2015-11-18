<?php

session_start();
session_destroy();
header('Location:../VISTA/Admin/login.html');
?>
