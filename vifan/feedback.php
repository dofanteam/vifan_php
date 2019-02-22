<?php

$info = $_POST['main'];



//写入文件
$myfile = fopen("http://vifan.cn/feedback/user.html", "a+") or die("Unable to open file!");
$txt = $info. '     '.date("Y-m-d H:i:s",time())."<hr>";
fwrite($myfile, $txt);

fclose($myfile);

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>成功</title>
        <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"/>
        <meta content="yes" name="apple-mobile-web-app-capable"/>
        <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
        <meta content="telephone=no" name="format-detection"/>
        <link href="http://www.17sucai.com/preview/1268063/2018-10-10/back/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>


        <section class="aui-flexView">

            <section class="aui-scrollView">
                <div class="aui-back-box">
                    <div class="aui-back-pitch">
                        <img src="http://www.17sucai.com/preview/1268063/2018-10-10/back/images/icon-pitch.png" alt="">
                    </div>
                    <div class="aui-back-title">
                        <h2>提交成功</h2>
                        <p>感谢您的提交</p>
                    </div>

                </div>
            </section>
        </section>

    </body>
</html>
