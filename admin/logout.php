<?php
	session_start();
	unset($_SESSION["login"]);
	session_destroy();
	echo "<script>
    window.location.href='/admin/login.php';
    </script>";
?>