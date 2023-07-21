<!DOCTYPE html>
<html>
	<head>
		<title>LMJ_facebook</title>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link rel="stylesheet" type="text/css" href="./css/fb_style.css" />
		<link rel="stylesheet" type="text/css" href="./css/fb_menu.css" />
		<script>
			function checkPasswords() {
				var passValue1 = document.getElementById("user_pw1").value;
				var passValue2 = document.getElementById("user_pw2").value;

				if(passValue1 !== passValue2) {
					window.alert("비밀번호 1과 비밀번호 2가 일치하지않습니다. 다시 입력해주세요.");
					return false;
				}
					return true;
			}
		</script>
		<style>
			@keyframes gradient {
			0% {color : white;}
			50% {color : #FFD700;}
			100% {color : white; }
			}
			
			#title   {
			animation : gradient 4s;
			}
		</style>
	</head>
	
	<body>
		<div id="wrapper">
			<div id="header">
				<p id="title">LMJ_minifacebook</p>
			</div>
			
			<div id="navigation">
				<nav id='menu'>
					<input type='checkbox' id='responsive-menu' onclick='updatemenu()'>
					<ul>
						<li><a href='fb_guest_home_db.php'>홈</a></li>
						<li><a href='fb_login_db.php'>로그인</a></li>
						<li><a href='fb_register_db.php'>회원가입</a></li>
						<li><a href='fb_guestbook_db.php'>방명록</a></li>
					</ul>
				</nav>
			</div>