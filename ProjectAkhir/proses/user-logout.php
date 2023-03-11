<?php
session_start();

session_destroy();
header("location: ../pages/user-login.php?pesan=logout");
