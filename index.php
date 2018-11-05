<?php
error_reporting(0);
 ?>
<html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="shortcut icon" href="./images/background_mo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yeon+Sung" rel="stylesheet">
</head>
<body>
    <div class="background-image">
        <img src="images/background.png">
    </div>
    <div class="main-con">
        <div class="title">
            2018 영진전문대학교<br>
            외국인유학생<br>
            한국어말하기대회<br>
            참가신청서
        </div>
        <div class="contact">
            주관 : 영진전문대학교 국제교류원<br>
            담당자 : 국제교류원 김채영 선생님(TEL : 053-940-5630 )
        </div>
        <form enctype='multipart/form-data' action='Survey.php' method='post' accept-charset='utf-8' >
            <div class="sub-con">    
                <label>- 계열을 선택해 주십시오</label>
                <select name="affiliation">
                        <option value="">계열선택</option>
                        <option value="Computer_Information" <?php echo $_POST['affiliation'] == "Computer_Information" ? "selected" : "";?>>컴퓨터정보계열</option>
                        <option value="Conputer_Machinery" <?php echo $_POST['affiliation'] == "Conputer_Machinery" ? "selected" : "";?>>컴퓨터응용기계계열</option>
                        <option value="Electronic_Information" <?php echo $_POST['affiliation'] == "Electronic_Information" ? "selected" : "";?>>전자정보통신계열</option>
                        <option value="Energy_Electricity" <?php echo $_POST['affiliation'] == "Energy_Electricity" ? "selected" : "";?>>신재생에너지전기계열</option>
                        <option value="Interior_Design" <?php echo $_POST['affiliation'] == "Interior_Design" ? "selected" : "";?>>건축인테리어디자인계열</option>
                        <option value="Smart_Management" <?php echo $_POST['affiliation'] == "Smart_Management" ? "selected" : "";?>>스마트경영계열</option>
                        <option value="nternational_Cooking" <?php echo $_POST['affiliation'] == "nternational_Cooking" ? "selected" : "";?>>국제관광조리계열</option>
                        <option value="Necrotic_series" <?php echo $_POST['affiliation'] == "Necrotic_series" ? "selected" : "";?>>부사관계열</option>
                        <option value="Content_Design" <?php echo $_POST['affiliation'] == "Content_Design" ? "selected" : "";?>>콘텐츠디자인과</option>
                        <option value="Social_Welfare" <?php echo $_POST['affiliation'] == "Social_Welfare" ? "selected" : "";?>>사회복지과</option>
                        <option value="Childhood_Education" <?php echo $_POST['affiliation'] == "Childhood_Education" ? "selected" : "";?>>유아교육과</option>
                        <option value="Nursing" <?php echo $_POST['affiliation'] == "Nursing" ? "selected" : "";?>>간호학과</option>
                </select>
            </div>
            <div class="sub-con">
                <label for="name">- 이름(한글명)을 입력해주십시오</label>
                <input type="text" id="name" placeholder="홍길동" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>" required />                
            </div>
            <div class="sub-con">
                <label for="std_number">- 학번을 입력해주십시오.* (숫자만 가능)</label>
                <input type="text" id="std_number" placeholder="1900000"  name="std_number" value="<?php echo isset($_POST['std_number']) ? $_POST['std_number'] : ""; ?>"required />
            </div>
            <div class="sub-con">
                <label for="phone_number">- 휴대폰 번호를 입력해주십시오 ("-"은 입력하지마세요)</label>
                    <div>
                      <input type="text" pattern="[0-9]{10,11}" name="phone_number" placeholder="01012345678" value="<?php echo isset($_POST['phone_number']) ? $_POST['phone_number'] : ""; ?>" />
                    </div>
                </div>
            <div class="sub-con">
                <label for="email">- e-mail 주소를 입력해주십시오</label>
                <input type="email" placeholder="yju@yju.com" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>" required />
            </div>
            <div class="sub-con">
                <label for="pro_name">- 지도교수 이름을 입력해주십시오</label>
                <input type="text" placeholder="정길동" name="pro_name" value="<?php echo isset($_POST['pro_name']) ? $_POST['pro_name'] : ""; ?>" required />
            </div>
            <div class="sub-con">
                <label for="thema">- 발표 주제가 무엇입니까?(500자이내)</label>
                <textarea placeholder="맛있는 김치"  maxlength="500" name="thema"><?php echo isset($_POST['thema']) ? $_POST['thema'] : ""; ?></textarea>
            </div>
            <div class="sub-con" id="filebox">
                <label for="ppt_name">- 발표 PPT 파일을 첨부하여 주십시오.(500MB 이하)</label>
                <input type="file"  accept="application/vnd.ms-powerpoint, application/vnd.openxmlformats-officedocument.presentationml.presentation" name="ppt_name" required />
            </div>
            <div class="sub-con" id="filebox">
                <label for="video">- PPT영상을 업로드해주세요(2G 이하)</label>
                <input type="file" accept="video/*" name="video" required />
            </div>

            <div class="button">
                <button type="submit" name="submit">작성완료</button>
            </div>
        </form>        
    </div>
</body>

</html>
<style>
    body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding-top : 3em;
        font-family: 'Noto Sans KR', sans-serif;
        background: rgb(252, 142, 123);
        
    }
    select {
        width: 100%;
        padding: 16px 20px;
        border: none;
        font-size :15px;
        border-radius: 4px;
        background-color: #f1f1f1;
    }
    textarea {
        height: 7em;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
    }
    input { 
        height: 30px;
        font-size: 20px;
    }
    button{
        margin-top : 50px;
        width: 100%;
        border : none;
        background: rgb(132, 196, 37);
        height: 50px;
        font-size: 1.5em;
        transition: 0.3s;
    }
    button:hover{
        background: green;
        color : white;

    }
    label{
        font-weight: 600;
    }
    .background-image{
        width: 100%;
        text-align: right;
        position: absolute;
        z-index: 1;
    }
    #form_div{
        display: grid;
        grid-template-rows: repeat(auto, 1fr);
        grid-row-gap: 20px;
    }
    .main-con {
        position: relative;
        z-index: 100;
        background: rgb(252, 252, 252);
        border-radius: 20px;
        padding: 1em 3em 1em 3em;
        display: grid;
        grid-template-rows: repeat(auto,1fr);
        grid-row-gap: 30px;
        margin: auto;
        width: 40%;
        margin-bottom : 3em;
    }
    .title{
        font-size:5em;
        text-align: right;
        font-family: 'Yeon Sung', cursive;
    }
    .sub-con{
        display: grid;
        grid-template-rows: auto 1fr;
        font-size : 1.5em;
        grid-row-gap: 10px;
    }
    #filebox input[type="file"] { 
        padding: 0; 
        clip:rect(0,0,0,0); 
        border: 0;
     }

     @media screen and (max-width: 400px) {
                input { 
                    height: 20px;
                    font-size: 10px;
                }
                .main-con{
                    width: 85%;
                    position: static;
                    z-index: 100;
                    margin: auto;
                    background: rgba(248, 248, 248, 0.897);
                    padding : 5px;
                }

                .title{
                    font-size:30px;
                }
                .background-image{
                    display: none;
                }
                .sub-con{
                    font-size : 1em;
                    padding : 5px;
                }
                .contact{
                    font-size : 10px;
                }
                label{
                    font-size : 13px;
                }
            }
    @media screen and (min-width: 401px) and (max-width: 500px) {
                input { 
                    height: 20px;
                    font-size: 13px;
                }
                .main-con{
                    width: 80%;
                    z-index: 100;
                    margin: auto;
                    background: rgba(248, 248, 248, 0.897);
                    padding : 5px;
                    position: static;
                }
                .title{
                    font-size:35px;
                }
                .background-image{
                    display: none;
                }
                .sub-con{
                    font-size : 1em;
                    padding : 5px;
                }
                .contact{
                    font-size : 12px;
                }
                label{
                    font-size : 15px;
                }
            }
    @media screen and (min-width: 501px) and (max-width: 1040px) {
                .main-con{
                    width: 75%;
                    position: relative;
                    z-index: 100;
                    margin: auto;
                    background: rgba(248, 248, 248, 0.897);
                
                }
            }

</style>
<!-- <!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="main-con">
        <div>YJU 외국어 프레젠테이션 대회 참가 설문지</div>
        <form enctype='multipart/form-data' action='Survey.php' method='post' accept-charset='utf-8' >
            <div>
                지원자의 계열은 무엇입니까?
                <select name="affiliation">
                        <option value="">계열선택</option>
                        <option value="Computer_Information">컴퓨터정보계열</option>
                        <option value="Conputer_Machinery">컴퓨터응용기계계열</option>
                        <option value="Electronic_Information">전자정보통신계열</option>
                        <option value="Energy_Electricity">신재생에너지전기계열</option>
                        <option value="Interior_Design">건축인테리어디자인계열</option>
                        <option value="Smart_Management">스마트경영계열</option>
                        <option value="nternational_Cooking">국제관광조리계열</option>
                        <option value="Necrotic_series">부사관계열</option>
                        <option value="Content_Design">콘텐츠디자인과</option>
                        <option value="Social_Welfare">사회복지과</option>
                        <option value="Childhood_Education">유아교육과</option>
                        <option value="Nursing">간호학과</option>
                </select>
            </div>
            <div>
                <label for="name">이름(한글명)을 입력해주십시오</label>
                <input type="text" id="name" name="name" required />                
            </div>
            <div>
                <label for="std_number">학번을 입력해주십시오.* (숫자만 가능)</label>
                <input type="number" id="std_number" name="std_number" required />
            </div>
            <div>
                <label for="phone_number">휴대폰 번호를 입력해주십시오</label>
                <input name="number_1" />-<input name="number_2" />-<input name="number_3" />
            </div>
            <div>
                <label for="email">e-mail 주소를 입력해주십시오</label>
                <input type="email" name="email" required />
            </div>
            <div>
                <label for="pro_name">직도교수 이름을 입력해주십시오</label>
                <input type="text" name="pro_name" required />
            </div>
            <div>
                <label for="thema">발표 주제가 무엇입니까?(500자이내)</label>
                <textarea maxlength="500" name="thema" ></textarea>
            </div>
            <div>
                <label for="ppt_name">발표 PPT 파일을 첨부하여 주십시오.</label>
                <input type="file" accept=".ppt, .pptm, .pptx" name="ppt_name" required />
            </div>
            <div>
                <label for="video">PPT영상을 업로드해주세요</label>
                <input type="file" accept="video/*" name="video" required />
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Send your message" />
            </div>
        </form>
    </div>
</body>
</html> -->