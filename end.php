<html>
</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="background-image">
        <img src="images/background.png">
    </div>
    <div class="main-index">
        <div>
            지원완료 되었습니다!<br><br>
            감사합니다!<br><br><br><br><br><br>
            <a href="https://www.yju.ac.kr/kr/index.do" class="link-style">종료하기</a>
        </div>
    </div>
</body>
<style>
    body{
        background: rgb(252, 142, 123);
        margin: 0;
        padding: 0;
    }
    .main-index{
        text-align: center;
        padding: 150px;
        font-size : 20px;
        z-index: 10;
        position: relative;
        width: 40%;

        border-radius: 20px;
        background: rgb(245, 245, 245);
        margin: 50px auto auto auto;
    }
    .link-style{
        padding : 10px;
        text-decoration: none;
        border-radius: 4px;
        color : white;
        background: rgb(105, 218, 105)
    }
    .background-image{
        width: 100%;
        text-align: right;
        position: absolute;
        z-index: 1;

    }

    
    @media screen and (max-width: 400px) {
            .background-image{
                display: none;
            }
            .main-index{
                font-size: 15px;
                padding: 50px;
            }
            }
    @media screen and (min-width: 401px) and (max-width: 500px) {     
            .background-image{
                display: none;
            }
            .main-index{
                font-size: 15px;
                padding: 50px;
            }
            }
    @media screen and (min-width: 501px) and (max-width: 1040px) {
            .main-index{
                font-size: 20px;
                padding: 50px;
            } 
            }
</style>
</html>
