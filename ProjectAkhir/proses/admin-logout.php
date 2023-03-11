<?php
session_start();

session_destroy();
header("location: ../pages/admin-login.php?pesan=logout");
