<!DOCTYPE html>
<html xmlns="http://zhaoshuai.me">
<head>
    <meta charset="utf-8" />
    <title>打卡系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base target="_blank" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <script src="js/jquery-2.1.0.js" type="text/javascript" ></script>
    <script src="js/login.js" type="text/javascript" ></script>
</head>
<body>
<div id="topic">
    7班诚信状打卡系统
</div>
<div class="lg_main" style="text-align: center;margin-top: 50px">
    <form action="#">
        <div style="text-align: center;">
            <div class="">
                <input type="text" name="username" id="username" value="<?php echo isset($_COOKIE['sw_username'])? $_COOKIE['sw_username']:"";?>" placeholder="Schoolnum" class="ur" />
                <input type="password" id="password" value="<?php echo isset($_COOKIE['sw_password'])? $_COOKIE['sw_password']:"";?>"   placeholder="Password" type=""  class="pw" />
                <input type="text" name="ip" id="ip" value="" placeholder="IP Adress" style="display: none;" class="ip" />
            </div>
            <div id="topmess" style="font-size: 13px;font-family: '微软雅黑';display: none;">
            </div>
            <div class="foot" style="top: 100px;">
                <input type="button" id="log" value="Sign In" class="bn" onclick="login()" />
            </div>
        </div>
    </form>
</div>
</body>
</html>