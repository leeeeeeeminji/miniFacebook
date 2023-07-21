<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.09(최종 수정일 반영)
		summary : 이 페이지은 LMJ_minifacebook 홈페이지의 방명록을 보여줍니다. 
		LMJ_minifacebook에서 방명록 페이지는 회원, 비회원 모두가 사용할 수 있는 기능입니다.
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	
	error_reporting(E_ALL^E_NOTICE); //로그인 변수가 값이 없을 경우 나오는 NOTICE 에러 안보이게 하기
	
	session_start();
	if ($_SESSION['login_TF']) { //로그인 O인 경우
		include "fb_header_db.inc";
	}
	else { //로그인 X인 경우
		include "fb_header_guest_db.inc";
	}
?>
			
			<div id="content">
				<iframe src="https://mins.123guestbook.com/" frameborder="0" width="100%" height="500px"></iframe>
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>