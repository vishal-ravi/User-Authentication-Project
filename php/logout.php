<?php
session_start();
session_destroy();
header('Location: ../html/index.html');
exit();
?>
