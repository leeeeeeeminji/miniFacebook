<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.09(최종 수정일 반영)
		summary : 이 페이지는 다양한 검색 방법을 제공하는 회원 검색 화면입니다. (회원용 기능)
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_db.inc";
	//include "fb_login_check.inc";
?>		
			<div id="content">
				<br>
				<form method="post" action="fb_search_process_v2_db.php" name="search_form">
					<table id="search_2">
						<tbody>
							<tr>
								<td colspan='2'><img src="./img/member.png" width="300" height="120"></img></td>
							</tr>
							<tr>
								<td>검색 방법 : 
								<select name='search_type' id='type'>
									<option value=''>---</option>
									<option value='name'>이름</option>
									<option value='email'>이메일주소</option>
									<option value='phone'>전화번호</option>
								</select>
								</td>
								<td>검색어 : 
									<input type="text" name="search_name" placeholder="ex) 이민지" required autofocus></td>
							</tr>
							<tr>
								<td colspan='2' style="word-spacing : 50px;">
									<button class="search_button" type="submit" name="submit"><img src="./img/icon.png" width="40" height="40" alt="검색"></button>
									<button class="search_button" type="reset" name="reset"><img src="./img/X.png" width="40" height="40" alt="취소"></button>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>