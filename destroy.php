<?php
session_start();

// unsets name
// unset($_SESSION['name']);

// mostly used when using authentication
session_destroy();
