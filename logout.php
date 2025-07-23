<?php
// logout.php
require __DIR__ . '/classes/Auth.php';
Auth::logout();
header('Location: index.php');
exit;

