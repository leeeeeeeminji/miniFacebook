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
  <img src="https://img.shields.io/badge/SQLyog-2A5D82?style=flat&logo=SQLyog&logoColor=white"/>
  
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

- #### 로그인 (/fb_login_db.php)
  <p>
    비회원 전용 페이지의 로그인 화면입니다.<br>
    취소 버튼 옆 동그라미를 누르면 이메일, 비밀번호의 형식을 확인할 수 있습니다. <br>
    사용자가 이메일, 비밀번호를 입력하고 로그인을 시도하면 fb_login_process_db.php 를 실행하게 됩니다. <br>
    로그인 프로세스를 처리하는 php 에서는 데이터베이스와 연결한 뒤, 사용자의 입력값으로 select 쿼리를 실행합니다. <br>
    데이터베이스 서버와 연결하고 인코딩을 설정하는 php 코드는 fb_db.inc 라는 파일에 분리하여 필요한 부분에 include 하였습니다. <br>
    회원으로 확인되는 경우, 세션 아이디를 부여하고 세션 정보를 저정한 뒤, 회원용 홈페이지로 이동합니다. <br>
    회원으로 확인되지 않은 경우에는 "등록되지 않은 회원정보입니다. 다시 입력해주세요"라는 메시지가 띄워집니다.
  </p>
![login](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/cb8147af-06d0-45bd-be49-a0841309ec8b)

- #### 회원가입 (/fb_register_db.php)
  <p>
    비회원 전용 페이지의 회원가입 화면입니다. <br>
    필수 입력 항목에 해당하는 입력란을 입력하지 않고 등록 버튼을 누르면 입력란을 작성하라는 메시지가 띄워집니다.<br>
    비밀번호 1과 비밀번호 2가 맞지 않으면 "비밀번호 1과 비밀번호 2가 일치하지않습니다. 다시 입력해주세요." 라는 메시지가 띄워집니다.<br>
    사용자가 회원가입을 시도하면 fb_register_process_db.php 를 실행하게 됩니다. <br>
    회원가입 프로세스를 처리하는 php에서는 데이터베이스와 연결한 뒤, 사용자의 입력값으로 DB에 insert를 진행합니다. <br>
    insert가 성공적으로 완료되면, "정상적으로 회원 가입이 완료되었습니다." 라는 메시지가 띄워집니다. 
  </p>
![회원가입](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/5779ea28-f520-4836-94c5-80d0f64ed999)
<br>
- #### 방명록 (/fb_guestbook_db.php)
  <p>
    방명록 페이지입니다. 방명록 기능은 회원, 비회원 상관없이 모두 이용 가능합니다. <br>
    로그인이 되어있는 경우 회원용 header를 include 하고 그렇지 않은 경우는 비회원용 header를 include 하도록 하였습니다. <br>
    123 guset book 이라는 무료 방명록 기능을 활용하여 iframe에 url을 삽입하였습니다.
  </p>
  
![방명록](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/c27bacdc-742f-4182-98c5-baa3b8e92837)


### 👪 회원
- #### 회원 전용 페이지 HOME (/fb_home_db.php)
  <p>
    로그인에 성공한 회원들이 볼 수 있는 회원 페이지의 HOME 화면입니다. <br>
    로그인을 하지 않고 url로 회원 페이지에 접근하려고 하는 경우, 로그인 페이지로 이동합니다 <br>
    로그인이 확인되면 세션에 넣어둔 user_name을 가져와 화면에 출력해줍니다. <br>
    비회원 페이지와 마찬가지로 회원 페이지에 중복되는 header와 footer는 각각 별도의 inc 파일로 분리하여 <br>
    해당 영역에 php로 include 하였습니다.
  </p>
![회원 home](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/46cd311d-1aff-41a0-8ea8-1cdc71b86195)

- #### 모든 회원 보기 (/fb_view_db.php)
  <p>
    회원 전용 기능 중, 모든 회원 보기 기능입니다.<br>
    모든 회원 보기 기능은 minifacebook 사이트에 가입한 모든 회원들의 정보가 표시됩니다.
  </p>
![회원정보](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/7835e1f4-6c57-4a49-b0b0-96e7d6ba4614)


- #### 검색 (/fb_search_db.php, fb_search_process_db.php)
  <p>
    사이트에 가입한 회원을 검색할 수 있는 기능입니다.<br>
    사용자가 검색어를 입력하고 돋보기 버튼을 누르면 fb_search_process_db.php 가 실행됩니다. <br>
    php 파일에서는 사용자가 입력한 검색어로 select 문을 실행합니다 <br>
    쿼리 실행 결과로 나온 회원 정보를 while 문을 돌려 출력합니다. <br>
    나이는 db의 birthdate 컬럼에 있는 데이터와 현재 날짜 데이터로 계산하여 출력하였습니다.<br>
    검색을 원하는 경우, 검색 결과 페이지에서 다시 검색하실 수 있습니다.
  </p>
<img width="1754" alt="검색" src="https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/99dd91f7-f2cf-4866-ae69-e43af4f3b622">


- #### 검색 ver.2 (/fb_search_v2_db.php, fb_search_process_v2_db.php)
  <p>
    사이트에 가입한 회원을 검색할 수 있는 기능입니다.<br>
    이 페이지에서는 검색 방법을 설정할 수 있습니다. 이름, 이메일 주소, 전화번호로 검색이 가능합니다. <br>
    검색 방법을 설정하지 않을 경우, 검색 방법을 선택해달라는 메시지가 띄워집니다.<br>
    사용자가 검색어를 입력하고 돋보기 버튼을 누르면 fb_search_process_v2_db.php 가 실행됩니다. <br>
    php 파일에서는 사용자가 선택한 검색 방법과 검색어로 select 문을 실행하고 <br>
    쿼리 실행 결과로 나온 회원 정보를 while 문을 돌려 출력합니다. <br>
    검색을 원하는 경우, 검색 결과 페이지에서 다시 검색하실 수 있습니다.
  </p>
<img width="1764" alt="검색1" src="https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/b7886130-06b3-4d85-9670-3c253f52807e">


- #### 회원 탈퇴 (/fb_delete_db.php)
  <p>
    회원 기능 중, 회원 탈퇴 기능입니다. <br>
    이메일과 비밀번호를 입력하면 탈퇴 절차가 진행됩니다. <br>
    삭제가 성공적으로 완료되면, 삭제된 회원의 정보를 띄워줍니다. 
  </p>
![회원 탈퇴](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/345f38ed-659e-436d-bded-aeee084eea1e)

- #### 회원 정보 수정 (/fb_update_db.php, fb_update_process_db.php, fb_update_process_complete_db.php)
  <p>
    회원 기능 중, 회원 정보 수정 기능입니다. <br>
    이메일과 비밀번호를 입력하면 회원 정보 수정이 진행됩니다. <br>
    입력한 이메일과 비밀번호로 select 쿼리를 실행하여 해당하는 회원의 정보를 불러옵니다. <br>
    불러온 회원의 정보를 입력란의 기본 value 값으로 설정합니다. <br>
    회원이 모든 입력란의 수정을 마친 후, 수정 버튼을 누르면 fb_update_process_complete_db.php가 실행됩니다. <br>
    사용자가 입력한 정보로 update를 실행하여 정보 수정 성공 유무를 알려줍니다. 
  </p>
![회원정보수정](https://github.com/leeeeeeeminji/miniFacebook/assets/87288893/5072d134-8f07-4f0f-a166-b9f345df58bf)
