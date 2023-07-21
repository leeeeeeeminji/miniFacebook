<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.05.13(최종 수정일 반영)
		summary : 이 페이지는 LMJ_minifacebook 홈페이지의 회원 가입 화면을 보여줍니다. 
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_guest_db.inc";
?>
			
			<div id="content">
				<br>
				<form method="post" action="fb_register_process_db.php" name="register_form" onSubmit="return checkPasswords();">
					<fieldset>
						<legend>Register</legend>
						<p style="color : red;">* 필수 입력 항목</p>
						<table id="register">
							<tbody>
								<tr>
									<td>* 이름</td>
									<td class="i">
										<input type="text" maxlength="10" size="10" name="user_name" required autofocus>
									</td>
								</tr>
								<tr>
									<td>* e - mail</td>
									<td class="i">
										<input type="email" name="user_email" placeholder="abc@a.com" required>
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
										<input type="date" name="user_birth">
									</td>
								</tr>
								<tr>
									<td>성별</td>
									<td class="i" style="font-size: 13px; color:#333; font-weight : normal;">
										<label><input type="radio" name="gender" value="남"> 남자</label>
										<label><input type="radio" name="gender" value="여"> 여자</label>
									</td>
								</tr>
								<tr>
									<td>휴대폰 번호</td>
									<td class="i">
										<input type="text" name="user_phonenumber" placeholder="010-0000-0000">
									</td>
								</tr>
								<tr>
									<td>주소</td>
									<td class="i">
										<input type="text" name="user_address1" placeholder="도로명주소">
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
										<textarea name="introduction" placeholder="이 곳에 자기소개를 입력해주세요" cols="40" rows="10" style = "resize : none;"></textarea>
									</td>
								</tr>
								<tr>
									<td colspan = "2" style="text-align : center; word-spacing : 30px;">
										<input class="button" name="submit" value="등록" type="submit">
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