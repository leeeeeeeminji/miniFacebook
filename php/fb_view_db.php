<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.09(최종 수정일 반영)
		summary : 이 페이지는 LMJ_minifacebook 홈페이지에 가입한 모든 회원들을 보여줍니다. (회원용 기능)
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_db.inc";
	//include "fb_login_check.inc";
?>
			
			<div id="content">
				<br>
				<img src="./img/members.png" width="30%" height="auto"></img>
				<p style="font-weight : bold; font-size : 18px">LMJ_minifacebook의 모든 회원 정보</p>
				
				<?php
					require "fb_db.inc";
					
					//4. SQL 실행하기
					$result = mysql_query("select * from fb_201911766", $db);
					
					//5. 실행 결과 추출하기
					$fields = mysql_num_fields ($result); 
					echo "<table id='all_members'>
							<tr>";
							
					for($i=0; $i < $fields; $i++) { //열의 이름
						echo "<th>" . mysql_field_name($result, $i) . "</th>";
					}
					echo "</tr>\n";
					
					while($row = mysql_fetch_array($result)) { //모든 회원 정보 추출
						echo "<tr>\n";
						for($i=0; $i < $fields; $i++) {
							echo "<td>" . $row[$i] . "</td>\n";
						}
						echo "</tr>\n";
					}
					echo "</table>";
				?>
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>