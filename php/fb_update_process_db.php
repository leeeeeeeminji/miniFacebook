<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.10(최종 수정일 반영)
		summary : 이 페이지는 특정 회원 정보를 수정하기 위한 페이지입니다. 
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_db.inc";
?>
        
			<div id="content">
				<br>
			
					<?php
						
						/* ----------------------------------
						summary : 이 프로그램은 fb_update_db.php 에서 아이디, 비밀번호를 받아 회원 정보를 입력폼에 담아 보여주는 프로그램입니다.
								  이 프로그램이 작동되기 위해선 fb_update_db.php의 email과 pw에 반드시 입력값이 있어야 합니다.
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
						
						//4. SQL 실행하기
						$query = "select * from fb_201911766 where email='{$email}' and password='{$pw}'";
						
						$result = mysql_query($query, $db);
						$member = mysql_fetch_array($result);
						
						//5. 해당하는 회원 정보가 존재하면 입력폼에 회원의 정보를 담아서 보여준다.
						if (!($member)) { //회원 정보가 없는 경우 다시 입력
							header("Location:fb_update_db.php");
						}
						
					?>
					
					<form method="post" action="fb_update_process_complete_db.php" name="update_form" onSubmit="return checkPasswords();">
					<fieldset>
						<legend>회원 정보 수정</legend>
						<p style="color : red;">* 필수 입력 항목</p>
						<table id="register">
							<tbody>
								<tr>
									<input type="hidden" name="mem_num" value="<?php echo $member[0] ?>">
									<td>* 이름</td>
									<td class="i">
										<input type="text" maxlength="10" size="10" name="user_name" value="<?php echo $member['name'] ?>" required autofocus>
									</td>
								</tr>
								<tr>
									<td>* e - mail</td>
									<td class="i">
										<input type="email" name="user_email" placeholder="abc@a.com" value="<?php echo $member['email'] ?>" required>
									</td>
								</tr>
								<tr>
									<td>* 비밀번호 1</td>
									<td class="i">
										<input maxlength="30" name="user_pw1" id="user_pw1" type="password" minlength="5" placeholder="5자 이상 입력" required>
									</td>
								</tr>
								<tr>
									<td>* 비밀번호 2</td>
									<td class="i">
										<input maxlength="30" name="user_pw2" id="user_pw2" type="password" minlength="5" placeholder="5자 이상 입력" required>
									</td>
								</tr>
								<tr>
									<td>생년월일</td>
									<td class="i">
										<input type="date" value="<?php echo $member['birth_date'] ?>" name="user_birth">
									</td>
								</tr>
								<tr>
									<td>성별</td>
									<td class="i" style="font-size: 13px; color:#333; font-weight : normal;">
										<label><input type="radio" name="gender" value="남" checked> 남자</label>
										<label><input type="radio" name="gender" value="여"> 여자</label>
									</td>
								</tr>
								<tr>
									<td>휴대폰 번호</td>
									<td class="i">
										<input type="text" name="user_phonenumber" value="<?php echo $member['phone'] ?>" placeholder="010-0000-0000">
									</td>
								</tr>
								<tr>
									<td>주소</td>
									<td class="i">
										<input type="text" name="user_address1" value="<?php echo $member['address'] ?>">
									</td>
								</tr>
								<tr>
									<td>연애/ 결혼 여부</td>
									<td class="i" style="font-size: 13px; color:#333; font-weight : normal;">
										<label><input name="user_dating" value="연애중" type="radio">연애 O</label> 
										<label><input name="user_dating" value="솔로" type="radio">연애 x</label>
										<label><input name="user_dating" value="결혼" type="radio">결혼 O</label>
									</td>
								</tr>
								<tr>
									<td style="vertical-align : top;">자기소개</td>
									<td class="i">
										<textarea name="introduction" placeholder="이 곳에 자기소개를 입력해주세요" cols="40" rows="10" style = "resize : none;"><?php echo $member['memo'] ?></textarea>
									</td>
								</tr>
								<tr>
									<td colspan = "2" style="text-align : center; word-spacing : 30px;">
										<input class="button" name="submit" value="수정" type="submit">
										<input class="button" name="reset" value="취소" type="reset">
									</td>
								</tr>
							</tbody>
						</table>
					</fieldset>
				</form>
				<br>
			</div>
        
<?php 
	include "fb_footer_db.inc";
?>