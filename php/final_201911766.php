<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.14
		summary : 이 페이지은 회원만 사용할 수 있는 방명록 페이지입니다.
	-------------------------------------*/
	
	error_reporting(E_ALL^E_NOTICE); //로그인 변수가 값이 없을 경우 나오는 NOTICE 에러 안보이게 하기
	
	require "fb_login_check.inc";
	require "fb_header_db.inc";
?>
			
			<div id="content">
				<br>
				<fieldset>
					<legend>방명록 남기기</legend>
					<form action="final_201911766.php" method="post" name="guestbook3">
						<table id="guestbook">
							<tbody>
								<tr>
									<td>* 제목 : </td>
									<td><input type='text' name='title' required autofocus></td>
								</tr>
								<tr>
									<td style="vertical-align : top">* 내용 : </td>
									<td><textarea name="content" placeholder="이 곳에 내용을 입력해주세요." cols="40" rows="10" style = "resize : none;" required></textarea></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align : center; word-spacing : 20px;">
										<input class="button" name="submit" value="게시하기" type="submit">
										<input class="button" name="reset" value="취소하기" type="reset">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</fieldset>
				
				<?php
				/* ----------------------------------
				summary : 이 프로그램은 사용자에게 입력값을 받아 화면에 뿌려주는 기능을 합니다. 
				-------------------------------------*/
				
				//사용자가 submit 버튼을 눌렀는지 확인한 후, 프로그램 작동시키기
				if (isset($_POST['submit'])) {
					//사용자의 입력값을 변수에 담는다.
						if ($_POST['title']) {
							$title = $_POST['title'];
						}
						if ($_POST['content']) {
							$content = $_POST['content'];
						}
						
						//mysql 서버와 연결, 데이터베이스 선택 코드가 저장된 별도의 파일을 불러온다.
						require "fb_db.inc";
						
						//4. SQL 실행하기
						session_start();
						$name = $_SESSION['user_name']; //로그인한 사람의 이름 가져오기
						$email = $_SESSION['user_email']; //로그인한 사람의 이메일 가져오기
						$ip = $_SESSION['user_ip']; //ip
						$query = "insert into final_201911766(`name`, `email`, `title`, `content`) values ('{$name}', '{$email}', '{$title}', '{$content}')"; //방명록에서 작성한 내용을 데이터베이스에 추가한다.
						$result = mysql_query($query, $db);
						
						$query_2 = "select * from final_201911766 order by date desc"; //테이블에 있는 모든 방명록 정보 가져오기
						$result_2 = mysql_query($query_2, $db);
						
						//게시글 수 계산하기
						$result_2 = mysql_query("select * from final_201911766", $db);
						$count = mysql_num_rows($result_2);
						
						
						//5. 결과 추출하기 
						echo "<br>";
						echo "<hr style='width : 500px; border-top: 3px solid blue;'>";
						echo "<br>";

						while($row = mysql_fetch_array($result_2)) { //모든 방명록 정보 추출하기
							echo <<<res
							<fieldset>
								<table id="guestbook_2">
									<tbody>
										<tr>
											<td>이름 : {$row['name']}</td>
											<td>제목 : {$row['title']}</td>
										</tr>
										<tr>
											<td>이메일 : {$row['email']}</td>
											<td>날짜 : {$row['date']}</td>
										</tr>
										<tr>
											<td colspan = "2" style='background-color : white;'>{$row['content']}</td>
										</tr>
									</tbody>
								</table>
							</fieldset>
					<br>
res;
						}
						
					
					echo "<p>총 게시글 수 : {$count} 개</p>";

				
				}
						
				?>
					
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>