<?php
include 'config/config.php';
include 'init/session.php';

session_destroy();
header('Location: index.php');