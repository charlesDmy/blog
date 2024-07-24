<?php
session_start();
unset($_SESSION['role']);
unset($_SESSION['utilisateur']);
session_commit();

header('Location: index.php');