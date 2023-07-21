<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.03(최종 수정일 반영)
		summary : 이 페이지는 LMJ_minifacebook의 회원 검색2 홈페이지 처리 화면을 보여줍니다. 
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_db.inc";
?>
			<div id="content">
				<br>
				
					<?php
					
						/* ----------------------------------
						summary : 이 프로그램은 fb_search_v2_db.php 에서 사용자가 입력한 검색방법과 검색어로 해당하는 회원의 정보를 보여주는 프로그램입니다.
								  이 프로그램이 작동되기 위해선 fb_search_db.php의 search_name에 반드시 입력값이 있어야 합니다.
						-------------------------------------*/
						
						//사용자가 submit 버튼을 눌렀는지 확인한 후, 프로그램 작동시키기
						if (isset($_POST['submit'])) {
							//검색방법을 선택했는지 확인하기
							if (!empty($_POST['search_type'])) {
								$search_type = $_POST['search_type'];
								$search_name = $_POST['search_name'];
							}
							else { //검색 방법을 선택하지 않았을 경우, 다시 검색 화면으로 돌아가기
								echo "<script>alert('검색 방법 선택해주세요.')</script>\n";
								echo "<script>location.href='http://ait.kyonggi.ac.kr/~s201911766/fb_search_v2_db.php'</script>";
							}
							
							//mysql 서버와 연결, 데이터베이스 선택 코드가 저장된 별도의 파일을 불러온다.
							require "fb_db.inc";
						
							//4. SQL 실행하기
							$query = "select * from fb_201911766 where {$search_type} like '%{$search_name}%'";
							$result = mysql_query($query, $db);

							//5. 실행 결과 추출하기
							echo <<<tab
								<table id="search">
									<tr>
										<td><img src="./img/member2.png" width="300" height="120"></img></td>
									</tr>
									<tr>
										<td id='name'>[{$search_type} : {$search_name}] 의 검색 결과입니다.</td>
									</tr>
								</table>
								
								<table id='all_members'>
									<tr>\n
tab;

							$fields = mysql_num_fields($result); //검색된 열 갯수
							
							for($i=0; $i < $fields; $i++) { //열의 이름 추출
								echo "<th>" . mysql_field_name($result, $i) . "</th>";
							}
							echo "</tr>\n";
							
							while($row = mysql_fetch_array($result)) { //쿼리 결과로 나온 회원 정보 추출
								echo "<tr>\n";
								for($i=0; $i < $fields; $i++) {
									echo "<td>" . $row[$i] . "</td>\n";
								}
								echo "</tr>\n";
							}
							echo "</table><br>";
							echo "<hr style='width : 80%; border-top: 2px dashed #8c8b8b;'>";

						}
						
					?>
					
				<br>
				<form method="post" action="fb_search_process_v2_db.php" name="search_form">
					<table id="search_3">
						<tbody>
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
								<td style="word-spacing : 20px;">
									<button class="search_button" type="submit" name="submit"><img src="./img/icon.png" width="30" height="30" alt="검색"></button>
									<button class="search_button" type="reset" name="reset"><img src="./img/X.png" width="30" height="30" alt="취소"></button>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>