﻿<!doctype html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=IE8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
        <style type="text/css">
            .loadmask{left:0;top:0;position:absolute;height:100%;width:100%;overflow:hidden;border:none;background-color:#f4f4f4;z-index:1001;}
            .loader-page{width:100%;height:170px;bottom:42%;position:absolute;text-align:center;line-height:10px;margin-bottom:20px;}
            .loader-page-romb{width:40px;display:inline-block;}
            .romb{width:40px;height:40px;position:absolute;background:red;border-radius:6px;
            -webkit-transform:rotate(135deg) skew(20deg,20deg);
            -moz-transform:rotate(135deg) skew(20deg,20deg);
            -ms-transform:rotate(135deg) skew(20deg,20deg);
            -o-transform:rotate(135deg) skew(20deg,20deg);
            -webkit-animation:movedown 3s infinite ease;
            -moz-animation:movedown 3s infinite ease;
            -ms-animation:movedown 3s infinite ease;
            -o-animation:movedown 3s infinite ease;
            animation:movedown 3s infinite ease;
            }
            #blue{z-index:3;background:#55bce6;
            -webkit-animation-name:blue;
            -moz-animation-name:blue;
            -ms-animation-name:blue;
            -o-animation-name:blue;
            animation-name:blue;
            }
            #red{z-index:1;background:#de7a59;
            -webkit-animation-name:red;
            -moz-animation-name:red;
            -ms-animation-name:red;
            -o-animation-name:red;
            animation-name:red;
            }
            #green{z-index:2;background:#a1cb5c;
            -webkit-animation-name:green;
            -moz-animation-name:green;
            -ms-animation-name:green;
            -o-animation-name:green;
            animation-name:green;
            }
            @-webkit-keyframes red{
            0%{top:120px;background:#de7a59;}
            10%{top:120px;background:#F2CBBF;}
            14%{background:#f4f4f4;top:120px;}
            15%{background:#f4f4f4;top:0;}
            20%{background:#E6E4E4;}
            30%{background:#D2D2D2;}
            40%{top:120px;}
            100%{top:120px;background:#de7a59;}
            }
            @keyframesred{
            0%{top:120px;background:#de7a59;}
            10%{top:120px;background:#F2CBBF;}
            14%{background:#f4f4f4;top:120px;}
            15%{background:#f4f4f4;top:0;}
            20%{background:#E6E4E4;}
            30%{background:#D2D2D2;}
            40%{top:120px;}
            100%{top:120px;background:#de7a59;}
            }
            @-webkit-keyframes green{
            0%{top:110px;background:#a1cb5c;opacity:1;}
            10%{top:110px;background:#CBE0AC;opacity:1;}
            14%{background:#f4f4f4;top:110px;opacity:1;}
            15%{background:#f4f4f4;top:0;opacity:1;}
            20%{background:#f4f4f4;top:0;opacity:0;}
            25%{background:#EFEFEF;top:0;opacity:1;}
            30%{background:#E6E4E4;}
            70%{top:110px;}
            100%{top:110px;background:#a1cb5c;}
            }
            @keyframes green{
            0%{top:110px;background:#a1cb5c;opacity:1;}
            10%{top:110px;background:#CBE0AC;opacity:1;}
            14%{background:#f4f4f4;top:110px;opacity:1;}
            15%{background:#f4f4f4;top:0;opacity:1;}
            20%{background:#f4f4f4;top:0;opacity:0;}
            25%{background:#EFEFEF;top:0;opacity:1;}
            30%{background:#E6E4E4;}
            70%{top:110px;}
            100%{top:110px;background:#a1cb5c;}
            }
            @-webkit-keyframes blue{
            0%{top:100px;background:#55bce6;opacity:1;}
            10%{top:100px;background:#BFE8F8;opacity:1;}
            14%{background:#f4f4f4;top:100px;opacity:1;}
            15%{background:#f4f4f4;top:0;opacity:1;}
            20%{background:#f4f4f4;top:0;opacity:0;}
            25%{background:#f4f4f4;top:0;opacity:0;}
            45%{background:#EFEFEF;top:0;opacity:0.2;}
            100%{top:100px;background:#55bce6;}
            }
            @keyframes blue{
            0%{top:100px;background:#55bce6;opacity:1;}
            10%{top:100px;background:#BFE8F8;opacity:1;}
            14%{background:#f4f4f4;top:100px;opacity:1;}
            15%{background:#f4f4f4;top:0;opacity:1;}
            20%{background:#f4f4f4;top:0;opacity:0;}
            25%{background:#fff;top:0;opacity:0;}
            45%{background:#EFEFEF;top:0;opacity:0.2;}
            100%{top:100px;background:#55bce6;}
            }
        </style>
    </head>
    <body>
        <div class="loadmask"><div class="loader-page"><div class="loader-page-romb"><div class="romb" id="blue"></div><div class="romb" id="green"></div><div class="romb" id="red"></div></div></div></div>
    </body>
</html>