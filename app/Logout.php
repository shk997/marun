<?php
session_start();
session_destroy();
header('Location: http://serwis.dev:8080');

?>