<?php
session_start();
unset($_SESSION['isLoginAkademik']);
unset($_SESSION['id_user']);
session_destroy();

header("Location:./login.php");