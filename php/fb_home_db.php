<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.09(최종 수정일 반영)
		summary : 이 페이지는 회원용 LMJ_minifacebook 홈페이지의 홈을 보여줍니다. 
		이 홈페이지의 header와 footer는 fb_header_db.inc, fb_footer_db.inc에 저장되어 모든 페이지에 동일하게 사용됩니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_db.inc";
	?>
			
			<div id="content">
				<br>
				<?php
					/*
					session_start();
					if (!isset($_SESSION['login_TF'])) {
							header("Location:fb_login_db.php");
					}
					$name = $_SESSION['user_name'];
					echo "<p style='font-size : 25px'><span style='background-color : #FFD700;'>$name</span>님 반갑습니다! 로그인에 성공하셨습니다.</p><br>";*/
				?> 
				
				<img id="greeting" src="./img/greeting.gif" width="500" height="400"></img>
				<p> 민지의 minifacebook 홈페이지에 가입주셔서 감사합니다. thank you :)<br>
					홈페이지는 천천히 업데이트될 예정이니 기대 많이 하셔도 좋습니다.<br> 
					이 홈페이지의 컨셉은 <span style="font-size : 20px; font-weight : bold;">"심플"</span> 입니다.<br>
					전체적으로 심플한 화이트&블루 컬러에 <span style="background-color : #FFD700;">노란색</span> 포인트가 들어갑니다.<br>
				</p>
				<iframe width="500" height="315" src="https://www.youtube.com/embed/43FgE6uCyLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>