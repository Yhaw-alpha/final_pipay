<?php
session_start();

unset($_SESSION['id']);
unset($_SESSION['student_id']);


session_destroy();

header("Location: /pi_pay/final_pipay/public/");