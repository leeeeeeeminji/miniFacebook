<?php
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.09
		summary : 회원용 프로그램에 쓰일 세션정보를 확인하는 프로그램입니다.
	-------------------------------------*/
	
	session_start();
	if (!isset($_SESSION['login_TF'])) {
			header("Location:fb_login_db.php");
	}
?>