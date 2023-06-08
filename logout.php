<?php

session_start();
session_destroy();
echo "<script>alert('Anda telah logout, Terima kasih'); window.location = 'login.php';</script>";
