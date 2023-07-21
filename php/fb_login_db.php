<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.05.13(최종 수정일 반영)
		summary : 이 페이지는 LMJ_minifacebook 홈페이지의 로그인 화면을 보여줍니다. 
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_guest_db.inc";
?>
			
			<div id="content">
				<br>
				<form method="post" action="fb_login_process_db.php" name="login_form">
					<fieldset> 
						<legend>Login</legend>
						<table id="login">
							<tbody>
								<tr>
									<td class="i">E - mail : </td>
									<td><input class="ip" maxlength="40" name="email" type="email" placeholder="abc@a.com" required autofocus></td>
								</tr>
								<tr>
									<td class="i">비밀번호 : </td>
									<td><input class="ip" maxlength="30" name="pw" type="password" minlength="5" placeholder="abcd1234@!"required></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align : center; word-spacing : 20px;">
										<input class="button" name="submit" value="로그인" type="submit">
										<input class="button" name="reset" value="취소" type="reset">
										<span title="이메일 주소 : 반드시 이메일 형식으로 입력 / 비밀번호 : 문자, 숫자, 특수문자를 섞어서 최소 5자 이상 입력">&#x022EF;</span>
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