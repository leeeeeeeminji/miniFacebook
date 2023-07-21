<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.09(최종 수정일 반영)
		summary : 이 페이지는 회원 탈퇴 결과 화면을 보여주는 페이지입니다.
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_db.inc";
?>
        
			<div id="content">
				<br>
			
					<?php
						
						/* ----------------------------------
						summary : 이 프로그램은 fb_delete_db.php 에서 사용자가 입력한 이메일과 비밀번호에 해당하는 정보를 찾아 삭제하는 프로그램입니다.
								  이 프로그램이 작동되기 위해선 fb_delete_db.php의 email과 pw에 반드시 입력값이 있어야 합니다.
								  테이블 스타일은 fb_style.css에 저장되어있습니다.
						-------------------------------------*/
						
						//사용자의 입력값을 변수에 담는다.
						if ($_POST['email']) {
							$email = $_POST['email'];
						}
						if ($_POST['pw']) {
							$pw = $_POST['pw'];
						}
						
						//mysql 서버와 연결, 데이터베이스 선택 코드가 저장된 별도의 파일을 불러온다.
						require "fb_db.inc";
					
						// 4. SQL 실행하기
						$query = "delete from member where email='{$email}' and password='{$pw}'";
						
						$result = mysql_query($query, $db);
												
						//5. SQL 실행 결과 알려주기
						echo "<p><img src='./img/garbage.png' width='100' height='100'></img></p>";
						
						if ($result) {
							if (mysql_affected_rows()==1) { //쿼리 실행 결과 영향을 받은 행이 있는 경우(삭제에 성공한 경우)
								echo "<p style='font-size : 25px; font-weight : bold'>총 <span style='color : red'> ". mysql_affected_rows(). "</span>명의 회원 정보를 성공적으로 삭제하였습니다.</p>";
								echo "<p style='font-size : 15px;'>삭제된 회원의 정보 : {$email}/{$pw}</p>";
							}
							else { // 쿼리 실행 결과 영향을 받은 행이 없는 경우(입력한 아이디와 비밀번호가 없는 경우)
								echo "<p style='font-size : 25px; font-weight : bold'>해당하는 고객이 없어 삭제에 실패하였습니다.</p>";
								echo "<p style='font-size : 15px;'>입력한 회원의 정보 : {$email}/{$pw}</p>";
							}
						}
						else {
							echo  "<p style='font-size : 25px; font-weight : bold'>회원 삭제에 실패하였습니다.</p><br>";
						}
						
					
					?>

			</div>
        
<?php 
	include "fb_footer_db.inc";
?>