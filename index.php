<?php
error_reporting(0);
 ?>
<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR|Yeon+Sung" rel="stylesheet">

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
                <label>ㆍ계열을 선택해 주십시오</label>
                <select name="affiliation">
                        <option value="">계열선택</option>
                        <option value="Computer_Information" 
                        <?php echo $_POST['affiliation'] == "Computer_Information" ? "selected" : "";?>>컴퓨터정보계열</option>
                        <option value="Conputer_Machinery" 
                        <?php echo $_POST['affiliation'] == "Conputer_Machinery" ? "selected" : "";?>>컴퓨터응용기계계열</option>
                        <option value="Electronic_Information" 
                        <?php echo $_POST['affiliation'] == "Electronic_Information" ? "selected" : "";?>>전자정보통신계열</option>
                        <option value="Energy_Electricity" 
                        <?php echo $_POST['affiliation'] == "Energy_Electricity" ? "selected" : "";?>>신재생에너지전기계열</option>
                        <option value="Interior_Design" 
                        <?php echo $_POST['affiliation'] == "Interior_Design" ? "selected" : "";?>>건축인테리어디자인계열</option>
                        <option value="Smart_Management" 
                        <?php echo $_POST['affiliation'] == "Smart_Management" ? "selected" : "";?>>스마트경영계열</option>
                        <option value="nternational_Cooking" 
                        <?php echo $_POST['affiliation'] == "nternational_Cooking" ? "selected" : "";?>>국제관광조리계열</option>
                        <option value="Necrotic_series" 
                        <?php echo $_POST['affiliation'] == "Necrotic_series" ? "selected" : "";?>>부사관계열</option>
                        <option value="Content_Design"
                         <?php echo $_POST['affiliation'] == "Content_Design" ? "selected" : "";?>>콘텐츠디자인과</option>
                        <option value="Social_Welfare" 
                        <?php echo $_POST['affiliation'] == "Social_Welfare" ? "selected" : "";?>>사회복지과</option>
                        <option value="Childhood_Education" 
                        <?php echo $_POST['affiliation'] == "Childhood_Education" ? "selected" : "";?>>유아교육과</option>
                        <option value="Nursing"
                         <?php echo $_POST['affiliation'] == "Nursing" ? "selected" : "";?>>간호학과</option>
                        <option value="Korean_Language"
                        <?php echo $_POST['affiliation'] == "Korean_Language" ? "selected" : "";?>>한국어 어학당</option>
                </select>
            </div>
            <div class="sub-con">
                <label for="name">- 이름(한글명)을 입력해주십시오</label>
                <input type="text" id="name" placeholder="홍길동" name="name" 
                value="<?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>" required />                
            </div>
            <div class="sub-con">
                <label for="std_number">- 학번을 입력해주십시오.<br> (어학당 학생은 수강번호를 입력해주세요)</label>
                <input type="text" id="std_number" placeholder="1900000"  name="std_number" value="<?php echo isset($_POST['std_number']) ? $_POST['std_number'] : ""; ?>"required />
            </div>
            <div class="sub-con">
                <label for="phone_number">- 휴대폰 번호를 입력해주십시오.<br> ("-"은 입력하지마세요)</label>
                    <div>
                      <input type="text" pattern="[0-9]{10,11}" name="phone_number" placeholder="01012345678" 
                      value="<?php echo isset($_POST['phone_number']) ? $_POST['phone_number'] : ""; ?>" />
                    </div>
                </div>
            <div class="sub-con">
                <label for="email">- e-mail 주소를 입력해주십시오</label>
                <input type="email" placeholder="yju@yju.com" name="email" 
                value="<?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>" required />
            </div>
            <div class="sub-con">
                <label for="pro_name">- 지도교수 이름을 입력해주십시오</label>
                <input type="text" placeholder="정길동" name="pro_name" 
                value="<?php echo isset($_POST['pro_name']) ? $_POST['pro_name'] : ""; ?>" required />
            </div>
            <div class="sub-con">
                <label for="thema">- 발표 주제가 무엇입니까?<br>(500자이내)</label>
                <textarea placeholder="맛있는 김치"  maxlength="500" name="thema">
                    <?php echo isset($_POST['thema']) ? $_POST['thema'] : ""; ?></textarea>
            </div>
            <div class="sub-con" id="filebox">
                <label for="ppt_name">- 발표 PPT 파일을 첨부하여 주십시오.<br>(500MB 이하)</label>
                <input type="file"  accept="application/vnd.ms-powerpoint, application/vnd.openxmlformats-officedocument.presentationml.presentation" name="ppt_name" required />
            </div>
            <div class="sub-con" id="filebox">
                <label for="video">- PPT영상을 업로드해주세요.<br>(2G 이하)</label>
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
    
    @font-face {
        font-family: 'Noto Sans KR';
        font-style: normal;
        font-weight: 400;
        src: url('fonts/noto-sans-kr-v8-latin-regular.eot'); /* IE9 Compat Modes */
        src: local('Noto Sans KR Regular'), local('NotoSansKR-Regular'),
        url('fonts/noto-sans-kr-v8-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
        url('fonts/noto-sans-kr-v8-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
        url('fonts/noto-sans-kr-v8-latin-regular.woff') format('woff'), /* Modern Browsers */
        url('fonts/noto-sans-kr-v8-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
        url('fonts/noto-sans-kr-v8-latin-regular.svg#NotoSansKR') format('svg'); /* Legacy iOS */
    }
  
    @font-face {
        font-family: 'Yeon Sung';
        font-style: normal;
        font-weight: 400;
        src: url('fonts/yeon-sung-v4-korean_latin-regular.eot'); /* IE9 Compat Modes */
        src: local('Yeon Sung Regular'), local('YeonSung-Regular'),
        url('fonts/yeon-sung-v4-korean_latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
        url('fonts/yeon-sung-v4-korean_latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
        url('fonts/yeon-sung-v4-korean_latin-regular.woff') format('woff'), /* Modern Browsers */
        url('fonts/yeon-sung-v4-korean_latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
        url('fonts/yeon-sung-v4-korean_latin-regular.svg#YeonSung') format('svg'); /* Legacy iOS */
    }
    body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding-top : 50px;
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
        width: 100%;
        height: 300px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
    }
    input { 
        height: 30px;
        font-size: 20px;
        width: 100%;
    }
    button{
        margin-top : 50px;
        width: 100%;
        border : none;
        background: rgb(132, 196, 37);
        height: 50px;
        font-size: 25px;
        transition: 0.3s;
        border-radius: 20px;
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
       display: inline-block;
    }
    .main-con {
        position: relative;
        z-index: 100;
        background: rgb(252, 252, 252);
        border-radius: 20px;
        padding: 30px 40px 30px 40px;

        margin: auto;
        width: 40%;
        margin-bottom  : 40px;
    }
    .title{
        font-size:5vw;
        text-align: right;
        font-family: 'Yeon Sung';
    }
    .sub-con{
        margin: 15px 0 15px 0;
        font-size : 30px;
    
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

              
                .background-image{
                    display: none;
                }
                .sub-con{
                    font-size : 15px;
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
      
                .background-image{
                    display: none;
                }
                .sub-con{
                    font-size : 15px;
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
                .contact{
                    font-size : 15px;
                }
     
                label{
                    font-size : 20px;
                }
            }

</style>
