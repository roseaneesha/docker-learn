<?php
ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/sessions'));
ini_set('session.gc_probability', 1);
session_start();
echo (isset($_SESSION));
echo ($_SESSION['token1']);
