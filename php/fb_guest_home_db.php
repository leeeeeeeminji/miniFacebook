<?php 
	/* ----------------------------------
		Author : 이민지, 201911766
		Date : 2021.06.07
		summary : 이 페이지는 비회원 방문자를 위한 LMJ_minifacebook 홈을 보여줍니다.
		이 홈페이지의 header와 footer는 fb_header_guest_db.inc fb_footer_db.inc에 저장되어있습니다.
		header와 footer를 편집하려면 해당 텍스트파일에서 편집해야합니다. 
	-------------------------------------*/
	include "fb_header_guest_db.inc";
?>
			
			<div id="content">
				<br>
				<img id="greeting" src="./img/guest_greeting.gif" width="500" height="300"></img>
				<p><span style='font-size : 13px; font-style : italic;'>guest_ver.</span><br><br>
					민지의 minifacebook 홈페이지에 오신 것을 환영합니다 :) <br>
					이 홈페이지의 컨셉은 <span style="font-size : 20px; font-weight : bold;">"심플"</span> 입니다.<br>
					전체적으로 심플한 화이트&블루 컬러에 <span style="background-color : #FFD700;">노란색</span>포인트가 들어갑니다.<br>
					방명록에 한마디 남겨놓고 가시면 저에게 큰 힘이 됩니다. ♥ <br>
				</p>
			</div>
			
<?php 
	include "fb_footer_db.inc";
?>