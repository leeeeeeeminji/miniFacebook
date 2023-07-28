# miniFacebook 
![home](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/f97ad8d6-0421-4bdb-8c4a-57697eadce1d)

<br>

##  📘 프로그램 소개
<p>
"minifacebook"은 기존 페이스북의 일부 기능을 참고하여 제작한 mini facebook 사이트입니다.<br>
대학교 전공 강의에서 client와 DB를 연동하는 과정을 학습하기위해 진행한 소규모 프로젝트입니다.
</p>
<p>
페이지는 회원 전용 페이지와 비회원 전용 페이지로 나눠집니다.<br>
비회원의 경우 방명록, 로그인, 회원가입, 방명록 총 네 가지 메뉴만 이용 가능하고 <br>
회원의 경우 회원 조회, 정보 수정, 탈퇴 등의 메뉴를 이용할 수 있습니다. <br>
기존 페이스북 기능의 뉴스피드, 타임라인을 제외한 마이페이지 기능을 주기능으로 제작하였습니다.<br>
</p>

<br>

## 📅 개발 기간
### 2021.04.01 - 2021.06.01

<br>

## ⚙ 개발 환경
#### ✔ 사용 언어
<div>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=HTML5&logoColor=white" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=CSS3&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=JavaScript&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=PHP&logoColor=white"/>
</div>

#### ✔ DB
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=MySQL&logoColor=white"/>

#### ✔ 사용 툴
<div>
  <img src="https://img.shields.io/badge/Notepad++-90E59A?style=flat&logo=Notepad++&logoColor=white"/>
  <img src="https://img.shields.io/badge/Apache-D22128?style=flat&logo=Apache&logoColor=white"/>
</div>

<br>

## 🎞 화면 구성
### 👩 비회원 
- #### 비회원전용 페이지 HOME (/fb_guest_home_db.php)
  <p>
    로그인을 하지 않은 비회원 페이지의 HOME 화면입니다. <br>
    회원 페이지에서 로그아웃을 하는 경우, 이 페이지로 돌아옵니다. <br>
    비회원 페이지에 중복되는 header와 footer는 각각 별도의 inc 파일로 분리하여 <br>
    해당 영역에 php로 include 하였습니다. 
  </p>

![비회원 home](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/199c192b-7eef-4dfc-878d-1ea6492ef3fc)

- #### 로그인
  <p>
    비회원 전용 페이지의 로그인 화면입니다.<br>
    취소 버튼 옆 동그라미를 누르면 이메일, 비밀번호의 형식을 확인할 수 있습니다. <br>
    사용자가 이메일, 비밀번호를 입력하고 로그인을 시도하면 fb_login_process_db.php 를 실행하게 됩니다. <br>
    로그인 프로세스를 처리하는 php 에서는 데이터베이스와 연결한 뒤, 사용자의 입력값으로 쿼리를 실행하고 
    회원으로 확인되는 경우, 세션 아이디를 부여하고 세션 정보를 저정한 뒤, 회원용 홈페이지로 이동합니다.
    회원으로 확인되지 않은 경우에는 "등록되지 않은 회원정보입니다. 다시 입력해주세요"라는 메시지가 띄워집니다.
    
  </p>
![login](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/cb8147af-06d0-45bd-be49-a0841309ec8b)
![회원가입](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/5779ea28-f520-4836-94c5-80d0f64ed999)
![방명록](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/c27bacdc-742f-4182-98c5-baa3b8e92837)


### 👪 회원
![회원 home](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/46cd311d-1aff-41a0-8ea8-1cdc71b86195)
![회원정보](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/7835e1f4-6c57-4a49-b0b0-96e7d6ba4614)
![검색](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/faf0cc46-2b18-41b5-a919-9afb812e5fad)
![검색 결과](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/d5d89244-babc-4409-8e60-54e2e0631b0f)

![검색2](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/f6b3bd35-2ebb-45a1-aed1-ab6d5fbc5687)
![검색2 결과](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/9fea0100-3e61-4cb8-8eec-1ec269d8d41e)
![회원 탈퇴](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/345f38ed-659e-436d-bded-aeee084eea1e)
![회원정보수정](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/5072d134-8f07-4f0f-a166-b9f345df58bf)
