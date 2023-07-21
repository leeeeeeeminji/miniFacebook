<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.09(최종 수정일 반영)
		summary : 이 페이지는 LMJ_minifacebook 홈페이지의 로그인 처리 화면을 보여줍니다. 
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_db.inc";
?>
        
			<div id="content">
				<br>
			
					<?php
						
						/* ----------------------------------
						summary : 이 프로그램은 fb_login_db.php 에서 사용자의 입력값을 받아 등록정보를 확인한 후, 로그인을 실행하는 프로그램입니다.
								  이 프로그램이 작동되기 위해선 fb_login_db.php의 email과 pw에 반드시 입력값이 있어야 합니다.
						-------------------------------------*/
						
						//사용자의 입력값을 변수에 담는다.
						if ($_POST['email']) {
							$email = $_POST['email'];
						}
						if ($_POST['pw']) {
							$pw = $_POST['pw'];
						}
						
						//mysql 서버와 연결, 데이터베이스 선택 코드가 저장된 별도의 파일을 불러온다.
						// 1. 데이터베이스 서버와 연결
						$db = mysqli_connect("localhost","root","minsmins59@@", "facebook") or die
							("데이터베이스 서버연결에 실패하였습니다.");
						
						// 2. 한글깨짐을 방지하기 위한 인코딩 설정
						mysqli_query("SET NAMES 'utf8'");
						
						// 3. 데이터베이스 선택
						$status = mysqli_select_db($db, "facebook");
						if(!$status) {
							echo "서버의 studentuser 데이터베이스연결에 실패하였습니다!<br>";
							exit;
						}
						
						//4. 쿼리 실행하기
						$query = "select * from member where email='{$email}' and password='{$pw}'";
						
						$result = mysql_query($query, $db);
						$member = mysql_fetch_array($result);
						
						//5. SQL 실행 결과에 따라 다른 프로세스
						if (mysql_num_rows($result) == 1) { //등록회원일 경우
							session_start(); //세션정보 저장
							$_SESSION['login_TF'] = True;
							$_SESSION['user_name'] = $member['name'];
							$_SESSION['user_email'] = $member['email'];
							$_SESSION['user_ip'] = @SESSION_ID;
							header("Location:fb_home_db.php"); //회원용 홈페이지로 이동
						}
						else { //등록 회원이 아닌 경우
							echo "<script>alert('등록되지 않은 회원 정보입니다. 다시 입력해주세요.')</script>";
							echo "<script>location.href='http://localhost/facebook/fb_login_db.php'</script>";
						}
					?>

			</div>
        
<?php 
	include "fb_footer_db.inc";
?>