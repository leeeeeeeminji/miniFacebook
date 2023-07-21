<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.03(최종 수정일 반영)
		summary : 이 페이지는 LMJ_minifacebook 홈페이지의 회원 가입 처리 화면을 보여줍니다. 
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_guest_db.inc";
?>
			
			<div id="content">
				<br>
				
					<?php
						
						/* ----------------------------------
						summary : 이 프로그램은 fb_register_db.php 에서 사용자가 입력한 회원 정보를 데이터베이스에 추가하는 프로그램입니다. 
								  이 프로그램이 작동되기 위해선 fb_register_db.php에서 이름, 이메일, 비밀번호 1, 비밀번호 2가 반드시 입력되어야 합니다. 
								  또한, 비밀번호 1과 비밀번호 2가 동일해야 이 프로그램이 작동됩니다.
								  프로그램 사용시 변수 사용에 헷갈리지 않도록 주의하세요.
								  테이블 스타일은 fb_style.css에 저장되어있습니다.
						-------------------------------------*/
						//입력하지 않은 값들에 대해 오류나타나지 않게 하기
						error_reporting(E_ALL^E_NOTICE);
						
						//사용자의 입력값을 변수에 담는다.
						if ($_POST['user_name']) {
							$name = $_POST['user_name'];
						}
						if ($_POST['user_email']) {
							$email = $_POST['user_email'];
						}
						if ($_POST['user_pw1']) {
							$pw_1 = $_POST['user_pw1'];
						}
						if ($_POST['user_pw2']) {
							$pw_2 = $_POST['user_pw2'];
						}
						if ($_POST['user_birth']) {
							$birth = $_POST['user_birth'];
						}
						if ($_POST['gender']) {
							$gender = $_POST['gender'];
						}
						if ($_POST['user_phonenumber']) {
							$phone = $_POST['user_phonenumber'];
						}
						if ($_POST['user_address1']) {
							$address = $_POST['user_address1'];
						}
						if ($_POST['user_dating']) {
							$dating = $_POST['user_dating'];
						}//연애o, 연애x, 결혼o의 값 중 사용자가 선택한 하나의 값만 서버로 넘어온다.
						
						if ($_POST['introduction']) {
							$introduction = $_POST['introduction'];
						}
						
						//mysql 서버와 연결, 데이터베이스 선택 코드가 저장된 별도의 파일을 불러온다.
						require "fb_db.inc";
						
						//4. SQL 실행하기
						$query = "insert into member(`name`, `email`, `password`, `birth_date`, `gender`, `phone`, `address`, `status`, `memo`) 
						values ('{$name}', '{$email}', '{$pw_1}', '{$birth}', '{$gender}', '{$phone}', '{$address}', '{$dating}', '{$introduction}')";
						
						$result = mysqli_query($query, $db);
						
						//5. 결과 알려주기
						if ($result) {
							echo "<p style='font-size : 25px; font-weight : bold'>정상적으로 회원 가입이 완료되었습니다.</p><br>";
						}
						else {
							echo "<p style='font-size : 25px; font-weight : bold'>회원 가입에 실패하셨습니다.</p><br>";
						}
					
					?>
					
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>
