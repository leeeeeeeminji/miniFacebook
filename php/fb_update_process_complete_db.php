<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.10(최종 수정일 반영)
		summary : 이 페이지는 회원 정보 수정을 거치고 난 후, 결과 페이지입니다.
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_db.inc";
?>

			<div id="content">
				<br>
			
					<?php
						
						/* ----------------------------------
						summary : 이 프로그램은 fb_update_process_db.php 에서 사용자가 입력한 정보로 회원 정보를 수정하는 프로그램입니다.
						이 프로그램이 작동되기 위해선 이름, 이메일, 비밀번호 1, 비밀번호 2가 반드시 입력되어야 합니다. 또한, 비밀번호 1과 비밀번호 2는 일치해야 합니다.
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
						$member_num = $_POST['mem_num'];
						
						//mysql 서버와 연결, 데이터베이스 선택 코드가 저장된 별도의 파일을 불러온다.
						require "fb_db.inc";
						
						//4. SQL 실행하기
						$query = "update fb_201911766 set name='{$name}', email='{$email}', password='{$pw_1}', birth_date='{$birth}', gender='{$gender}', phone='{$phone}', 
						address='{$address}', status='{$dating}', memo='{$introduction}' where member_number='{$member_num}'";
						
						$result = mysql_query($query, $db);
						
						//5. 결과 알려주기
						echo "<p><img src='./img/exchange.png' width='200' height='200'></img></p>";
						
						if ($result) { //수정에 성공했을 경우
							echo "<p style='font-size : 25px; font-weight : bold'>{$name}님의 정보가 정상적으로 수정되었습니다.</p><br>";
						}
						else {
							echo "<p style='font-size : 25px; font-weight : bold'>{$name}님의 정보 수정에 실패하였습니다.</p><br>";
						}
				
					?>
				<br>
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>