<?php
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.09
		summary : 로그아웃 페이지 입니다.
	-------------------------------------*/
	
	session_start();
	session_unset(); //세션 변수 삭제
	session_destroy(); // 세션 종료
	header("Location:fb_guest_home_db.php");
?>