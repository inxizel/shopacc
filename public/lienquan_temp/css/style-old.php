@import 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700&subset=vietnamese';

body {
    font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #d1d1d1;
    overflow-x: hidden;
    -webkit-background-size: 100%;
    background-size: 100%;
    background-position: center top;
    background-color: #000000;
    /*background-image: url(../images/background.jpg);*/
    background-repeat: repeat;
}

a, a:hover, a:focus, a:active {
    outline: none;
    text-decoration: none;
    color: #d1d1d1;
}

.container {
    position: relative;
}

.sa-cash {
    color: #ffc107;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
}
.price_promotion{
    text-decoration: line-through;
    opacity: 0.3;
}
.license-premium{
    margin: 2px;
    padding: 7px;
    border-radius: 3px;
    border: 1px solid #f7e61b;
}
.icon-box-random{
    margin-right: 5px;
    width: 25px;
}

.lable-random{
    text-align:center;
    /*background-color: #695013;*/
    /*animation: background 5s cubic-bezier(1,0,0,1) infinite;*/
}
.premium {
    color: #FFF;
    text-transform: none;
    
}

/* Chat với admin Mobile */
#chat_adm {
    position: fixed;
    bottom: 0px;
    z-index: 999999999999999;
    width: 100%;
    height: auto;
    box-shadow: 6px 6px 6px 10px rgba(0,0,0,0.2);
    overflow: hidden;
    display: none;
}
#chat_adm a.chat_fb_adm {
    background: #00a8ec;
    float: left;
    width: 100%;
    color: #fff;
    text-decoration: none;
    line-height: 40px;
    text-shadow: 0 1px 0 rgba(0,0,0,0.1);
    border: 0;
    border-bottom: 1px solid #133783;
    z-index: 9999999;
    font-size: 13px;
    text-align: center;
    text-transform: uppercase;
}
#chat_adm a.chat_fb_adm img {
    position: absolute;
    top: 10px;
    left: 10px;
}

/*.flaticon-premium:before {*/
/*    content: "";*/
/*    display: inline-block;*/
/*    width: 20px;*/
/*    height: 20px;*/
/*    background: url('/Content/images/badge.png') 50% no-repeat;*/
/*    background-size: 100%;*/
/*}*/

.img_center {
    text-align: center;
}

@media (min-width: 1200px) {
    .container {
        width: 1200px;
    }
}

.sa-ic {
    background-image: url("../images/icon.png");
    background-repeat: no-repeat;
}

.sa-header {
    height: 78px;
    background-color: rgba(0,0,0,0.7);
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-bottom-color: rgba(107, 12, 193, 0.65);
}

    .sa-header.has-search {
        margin-bottom: 60px;
    }

        .sa-header.has-search .sa-search {
            display: block;
        }

.sa-hdfix {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
}

.sa-imn {
    display: none;
    position: absolute;
    top: 15px;
    left: 15px;
    font-size: 16px;
    cursor: pointer;
}

.sa-logo {
    position: absolute;
    top: 7px;
    left: 35px;
}

.sa-menu {
    float: left;
    margin: 22px 0 0 270px;
}

    .sa-menu li {
        float: left;
        padding-left: 10px;
    }

        .sa-menu li a {
            position: relative;
            display: block;
            height: 34px;
            line-height: 34px;
            font-size: 15px;
            padding: 0 12px;
            border: 1px solid transparent;
            background-color: #FF9800;
            border-color: #284a5a;
            border-radius: 5px;
            color: #000;
            
        }

        .sa-menu li:hover a,
        .sa-menu li.active a {
            color: #000000;
            background: -webkit-linear-gradient(bottom, #FF5722 0%, #FF9800 100%);
            
        }
        li a.btn-success{
            background-color: #0cc113;
            border-color: #fbe966;
        }

.testimonials{
    background: #323131;
    padding: 30px;
}
.test-inner {
    padding: 20px;
    border: 2px solid #fff;
}
.banner-wrap {
    padding: 0 0 4em;
    text-align: center;
}
.wmuSlider .wmuSliderWrapper article img {
    width: 20%;
    margin: 0 auto;
}
.testimonials p {
    margin: 20px 0;
}
.testimonials h4, .testimonials p {
    text-align: center;
}
.testimonials h4 {
    color:#ccc;
    font-weight: bold;
}
.testimonials p {
    color:#696363;
}
.wmuSliderPagination {
    z-index: 2;
    position: absolute;
    left: 50%;
    bottom: 6%;
}
.wmuSliderPagination li {
    float: left;
    margin: 0 8px 0 0;
    list-style-type: none;
}
.wmuSliderPagination a {
    display: block;
    text-indent: -9999px;
    width: 12px;
    height: 12px;
    background: #CFCFCF;
    border-radius: 50%;
}
.wmuSliderPagination a.wmuActive {
	background: #00e58b;
    box-shadow: 0px 0px 10px #00e58b;
	-webkit-box-shadow: 0px 0px 10px #00e58b;
	-moz-box-shadow: 0px 0px 10px #00e58b;
	-o-box-shadow: 0px 0px 10px #00e58b;
	-ms-box-shadow: 0px 0px 10px #00e58b;
}

.wmuSlider {
    position: relative;
    overflow: hidden;
}


.sa-footer ul li {
    color: #aaaaaa;
    cursor: pointer;
    float: left;
    line-height: 21px;
    margin-left: 20px;
    margin-right: 20px;
    position: relative;
    text-align: center;
}

.bg-image{
    /*background-image: url(../images/bg.jpg);*/
    -webkit-background-size: 100%;
    background-size: 100%;
    background-attachment: fixed;
    background-position: center top;
    background-color: #000000;
    background-repeat: no-repeat;
}
.sa-mnhot {
    position: absolute;
    top: -5px;
    right: -20px;
    display: inline-block;
    width: 30px;
    height: 13px;
    background-position: 0 -86px;
}
.title-acc-view{
    display:none;
}
.sa-login {
    float: right;
    margin-top: 20px;
    border: 2px solid #ffeb3b;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #1d1d1d;
}

    .sa-login li {
        float: left;
    }

        .sa-login li:first-child {
            border-right: 1px solid #3c4351;
        }

        .sa-login li a {
            display: block;
            height: 32px;
            line-height: 32px;
            padding: 0 12px;
            color: #FF9800;
            font-size: 12px;
        }

.sa-user {
    float: right;
    margin-top: 20px;
}

.sa-usmoney {
    position: relative;
    font-size: 12px;
    color: #b9b9b9;
    padding-right: 30px;
    height: 34px;
    border: 1px solid #3d414d;
    background: transparent;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

    .sa-usmoney:after {
        position: absolute;
        top: 0;
        right: 0;
        text-align: center;
        height: 32px;
        line-height: 32px;
        padding: 0 5px;
        color: #000000;
        background: #626262;
        -webkit-border-radius: 0 4px 4px 0;
        -moz-border-radius: 0 4px 4px 0;
        border-radius: 0 4px 4px 0;
        content: "\e259";
        display: inline-block;
        font-family: 'Glyphicons Halflings';
        font-style: normal;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .sa-usmoney strong {
        color: #f34d2b;
    }

    .sa-usmoney.btn-default.active,
    .sa-usmoney.btn-default:active,
    .open > .sa-usmoney.dropdown-toggle.btn-default,
    .sa-usmoney:hover {
        color: #b9b9b9;
        background-color: transparent;
        border-color: #3d414d;
    }

.sa-usmenu {
    background: #000000;
    padding: 5px 15px;
    border: 1px solid #212121;
}

    .sa-usmenu li a {
        font-size: 14px;
        padding: 8px 0;
        color: #686868;
        border-bottom: 1px dotted #686868;
    }

    .sa-usmenu li:last-child a {
        border-bottom: none;
    }

    .sa-usmenu li:hover a {
        color: #ffffff;
    }

    .sa-usmenu.dropdown-menu > li > a:focus,
    .sa-usmenu.dropdown-menu > li > a:hover {
        color: #ffffff;
        text-decoration: underline;
        background-color: transparent;
    }

.sa-banner {
    margin-bottom: 20px;
}

.sa-bntab {
    background: #363636;
    padding: 4px;
}

.sa-bncol1 {
    float: left;
    width: 30%;
    position: relative;
}

.sa-bncol2 {
    float: left;
    width: 70%;
    position: relative;
}

.sa-bntbox {
    margin-right: 4px;
    background: #1d1d1d;
}

.sa-bnnav-tabs {
    display: table;
    width: 100%;
}

    .sa-bnnav-tabs li {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        height: 41px;
        background: #343434;
    }

        .sa-bnnav-tabs li.active {
            background: #1d1d1d;
        }

        .sa-bnnav-tabs li a {
            display: block;
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            color: #c2c2c2;
        }

        .sa-bnnav-tabs li.active a {
            color: #ffc107;
        }

.sa-bntcbox {
    padding: 30px 15px 0;
    height: 331px;
}

.sa-bntabbox {
    /*height: 250px;*/
    overflow: auto;
    /*border-bottom: 1px dotted #4e4e4e;*/
}

.sa-topthe li {
    height: 26px;
    margin-bottom: 35px;
    position: relative;
    padding: 0 10px;
}

    .sa-topthe li i {
        float: left;
        font-size: 14px;
        font-style: normal;
        font-weight: bold;
        color: #000000;
        display: inline-block;
        text-align: center;
        width: 26px;
        height: 26px;
        line-height: 26px;
        background: #0ce3ac;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    .sa-topthe li:first-child i {
        width: 31px;
        height: 31px;
        line-height: 31px;
        background: url("../images/icon.png") no-repeat -90px -36px;
    }

    .sa-topthe li span {
        margin: 0 110px 0 35px;
        padding-top: 5px;
        font-size: 15px;
        color: #c2c2c2;
        display: block;
        height: 26px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .sa-topthe li label {
        position: absolute;
        top: 0;
        right: 0;
        display: inline-block;
        width: 118px;
        height: 26px;
        line-height: 26px;
        text-align: center;
        white-space: nowrap;
        font-size: 15px;
        font-weight: bold;
        color: #000000;
        background: #ffc107;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

        .sa-topthe li label sup {
            font-weight: bold;
        }

.sa-bnvmore {
    text-align: center;
}

    .sa-bnvmore a {
        padding: 10px 0;
        display: inline-block;
        font-size: 13px;
        color: #f14c2b;
    }

        .sa-bnvmore a:hover {
            text-decoration: underline;
        }

.sa-pthuong li {
    min-height: 26px;
    margin-bottom: 23px;
    position: relative;
}

    .sa-pthuong li label {
        display: block;
        margin-right: 70px;
        padding-top: 2px;
        color: #0ce3ac;
        font-size: 15px;
    }

    .sa-pthuong li:first-child label {
        color: #ff502e;
    }

    .sa-pthuong li .sa-ptbtn {
        position: absolute;
        top: 0;
        right: 0;
        width: 68px;
        height: 24px;
        line-height: 24px;
        text-align: center;
        font-size: 11px;
        font-weight: bold;
        color: #000000;
        border: none;
        padding: 0;
        background: #ff502e;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

.sa-ttboxs.tooltip.right .tooltip-arrow {
    border-right-color: #ffffff;
}

.sa-ttboxs .tooltip-inner {
    max-width: 334px;
    padding: 3px;
    background-color: #ffffff;
}

    .sa-ttboxs .tooltip-inner img {
        width: 100%;
    }

.sabner .swiper-slide img {
    width: 100%;
    max-height: 372px;
}

.sabner .swiper-pagination-bullet {
    width: 14px;
    height: 14px;
    display: inline-block;
    border-radius: 0;
    background: #ffffff;
    border: 2px solid #866662;
    opacity: .2;
}

.sabner .swiper-pagination-bullet-active {
    opacity: 1;
    background: #363636;
    border: 2px solid #eac7c3;
}

.sa-lprod {
    background: rgba(138, 109, 59, 0.09);
    padding: 2px;
}

.sa-lprod-dk{
    padding: 10px 50px;
    background: #141414;
    margin-bottom: 20px;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}
.sa-lprod-dk h1 {
    font-size: 40px;
    color:red;
    padding-bottom:20px;
    padding-top:50px;
}
.sa-lprod-dk h3 {
    font-size: 30px;
    color:green;
}
.sa-lprod-dk ul{
    padding-top:50px;
    padding-bottom: 50px;
}

.sa-lprod-dk li {
    font-size: 17px;
    line-height: 2;
    color:#ccc;
}



.sa-fillter {
    position: relative;
}

.sa-filic {
    display: none;
    position: absolute;
    top: 10px;
    left: 0;
    padding: 5px 15px;
    color: #ffffff;
    font-size: 15px;
    cursor: pointer;
}

.sa-filshow .sa-filic {
    background: #000000;
}

.sa-filbox {
    background: #000000;
    position: relative;
    padding: 10px 20px;
}

    .sa-filbox .dropdown {
        display: inline-block;
        margin-right: 15px;
    }

        .sa-filbox .dropdown .dropdown-toggle {
            background: #272727;
            border: 1px solid #363636;
            font-size: 13px;
            color: #898989;
        }

.sa-ftbtndel {
    font-size: 15px;
    font-weight: bold;
    width: 100px;
    text-transform: uppercase;
    border-radius: 4px;
    border: none;
    background: -webkit-linear-gradient(bottom, #009b73 0%, #0ce2ab 100%);
}

    .sa-ftbtndel:hover {
        color: #ff502e;
    }

    .sa-ftbtndel i {
        color: #676767;
        padding-left: 5px;
    }

.sa-lpmain {
    padding: 20px;
}

.sa-lprow {
    margin: 0 -8px;
}

.sa-lpcol {
    float: left;
    width: 25%;
}

.sa-lpi {
    border: 1px solid #ff980059;
    background: #000000;
    margin-left: 7px;
    margin-right: 7px;
    position: relative;
    /*overflow: hidden;*/
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-bottom: 20px;
}

.promotion_label{
    position:absolute; 
    right:-8px;
    z-index:99
}
.text_promotion{
    color:#000; 
    position:absolute; 
    top:8px; 
    right:0px; 
    z-index:99;
}



.sa-lpimg {
    display: block;
}

    .sa-lpimg img {
        width: 100%;
        height: 165px;
    }

.sa-lpcode {
    padding: 12px 15px;
    color: #fd7e0b;
}
.vip-icon{
    margin-top: -7px;
    margin-right: 5px;
}

.sa-lpinfo {
    visibility: hidden;
    opacity: 0;
    filter: alpha(opacity=0);
    height: 245px;
    overflow: hidden;
    background: rgba(18, 18, 18, 0.65);
    position: absolute;
    top: -300px;
    left: 0;
    z-index: 3;
    width: 100%;
    border-bottom: 1px solid #262626;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.sa-lpi:hover .sa-lpinfo {
    visibility: visible;
    opacity: 1;
    filter: alpha(opacity=100);
    top: 0;
}

.sa-lpits {
    height: 212px;
    overflow: auto;
    margin-top: 40px;
    padding: 10px 5px 5px 15px;
    color: #ed4b2a;
    font-size: 14px;
    line-height: 24px;
    background-color : #141414;
}

.sa-lpinfo ul li {
    position: relative;
    padding-left: 10px;
}

    .sa-lpinfo ul li:before {
        content: '.';
        font-size: 22px;
        line-height: 0;
        position: absolute;
        left: 0;
        top: 5px;
    }

.sa-lpbott {
    margin: 0 -5px;
    padding: 15px;
}

.sa-lpbif,
.sa-lpbpri {
    float: left;
    width: 50%;
}

    .sa-lpbif p {
       
        color: #000000;
    }

.sa-lpbpri {
    text-align: right;
}
.sa-rank{
    margin-top: 5px;
    border: 1px solid #232323;
    line-height: 2;
    
}


.sa-lpbpice {
    text-align: center;
}

    .sa-lpbpice sup {
        font-size: 60%;
    }
.gg-lpbif {
    float: left;
    width: 50%;
    text-align: center;
    border: 1px solid #1d1d1d;
}
.gg-lpbpri {
    float: right;
    width: 50%;
    text-align: center;
    border: 1px solid #1d1d1d;
}
.hero{
    padding-bottom: 5px;
}
.skin{
    padding-top: 5px;
    border-top: 1px solid #132523;
}
.mua-atm{
    font-size: 15px;
    font-weight: bold;
    display: inline-block;
    width: 100px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    color: #000000;
    text-transform: uppercase;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background: linear-gradient(to top, #B63E1D 0%, #FF502E 100%);
    background: -moz-linear-gradient(to top, #B63E1D 0%, #FF502E 100%);
    background: -o-linear-gradient(to top, #B63E1D 0%, #FF502E 100%);
    background: -ms-linear-gradient(to top, #B63E1D 0%, #FF502E 100%);
    background: -webkit-linear-gradient(bottom, #000000 0%, #000000 100%)
        
    
}
.xem-acc{
    font-size: 15px;
    font-weight: bold;
    display: inline-block;
    width: 100px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    color: #383535;
    text-transform: uppercase;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background: linear-gradient(to top, #B63E1D 0%, #FF502E 100%);
    background: -moz-linear-gradient(to top, #B63E1D 0%, #FF502E 100%);
    background: -o-linear-gradient(to top, #B63E1D 0%, #FF502E 100%);
    background: -ms-linear-gradient(to top, #B63E1D 0%, #FF502E 100%);
    background: -webkit-linear-gradient(bottom, #423e3e 0%, #000000 100%);
}
.xem-acc:hover{
    background: -webkit-linear-gradient(bottom, #e0c22b 0%, #4eab36 100%);
    color: #f1f1f1;
}
.sa-info{
    padding-top:15px;
}
.sa-lpbbtn {
    font-size: 15px;
    font-weight: bold;
    display: inline-block;
    width: 100px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    color: #1c7122;
    text-transform: uppercase;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background: -webkit-linear-gradient(bottom, #bcf591 0%, #0aa50f 100%);
}

    .sa-lpbbtn.sa-lpbbtnpre {
        background: linear-gradient(to top, #009b73 0%, #0ce2ab 100%);
        background: -moz-linear-gradient(to top, #009b73 0%, #0ce2ab 100%);
        background: -o-linear-gradient(to top, #009b73 0%, #0ce2ab 100%);
        background: -ms-linear-gradient(to top, #009b73 0%, #0ce2ab 100%);
        background: -webkit-linear-gradient(bottom, #009b73 0%, #0ce2ab 100%);
    }
.thongthao-show{
    text-align: center;
    border-top: 1px solid #494949;
}
.sa-pagging li {
    display: inline-block;
    vertical-align: top;
    margin: 5px 5px 5px 0;
    color: #676767;
    height: 30px;
    line-height: 30px;
}

    .sa-pagging li a {
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 0 10px;
        color: #000000;
        font-size: 14px;
        border: 2px solid #262626;
        background: #676767;
    }

        .sa-pagging li a:hover,
        .sa-pagging li.active a {
            color: #FFC107;
            border: 2px solid #FFC107;
            background: #141414;
        }

.sa-footer {
    padding: 20px 0;
    background: #000000bf;
    
}

.sa-ftadd {
    margin-bottom: 20px;
}

.sa-fthotline {
    width: 100%;
    max-width: 470px;
    padding: 10px 13px;
    border: 2px solid #1f1f1f;
    background: #141414;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.sa-fthnum {
    position: relative;
    width: 56%;
    border-right: 1px solid #2d2d2d;
}

    .sa-fthnum:before {
        content: '';
        position: absolute;
        top: 5px;
        left: 5px;
        display: inline-block;
        width: 33px;
        height: 33px;
        background: url("../images/icon.png") no-repeat 0 -36px;
    }

    .sa-fthnum p {
        padding-left: 50px;
    }

    .sa-fthnum a {
        font-size: 16px;
        font-weight: bold;
        color: #ff502e;
    }

.sa-fthwork {
    text-align: center;
    width: 44%;
}

    .sa-fthwork strong {
        color: #bebebe;
    }

.sa-ftacol {
    float: left;
    padding: 0 3px;
}

.sa-ftarow {
    margin: 0 -3px;
}

.sa-lshare {
    text-align:center;
}
.sa-lshare ul{
    display: inline-block;
    margin: 0;
    padding: 0;
    /* For IE, the outcast */
    zoom:1;
    *display: inline;
}

    .sa-lshare span {
        display: inline-block;
        vertical-align: middle;
    }

    .sa-lshare a {
        display: inline-block;
        vertical-align: middle;
        margin-left: 5px;
        width: 32px;
        height: 32px;
    }

.sa-lsfb {
    background-position: 0 0;
}

.sa-lstw {
    background-position: -42px 0;
}

.sa-lsgg {
    background-position: -84px 0;
}

.sa-lsyou {
    background-position: -126px 0;
}

.sa-lssky {
    background-position: -168px 0;
}

#popImg .modal-title {
    color: #000000;
    font-weight: bold;
    display: none;
}

.sa-popimg img {
    width: 100%;
}

.sa-totop {
    cursor: pointer;
    z-index: 999;
    display: none;
    position: fixed;
    bottom: 50px;
    right: 15px;
    width: 46px;
    height: 46px;
    background: url("../images/icon.png") no-repeat -39px -36px;
}

/*DANG NHAP_DANGKY*/
.sa-logmain {
    padding: 30px 15px 50px;
    background: #141414;
    margin-bottom: 20px;
    height: 490px;
}

.sa-logbox {
    width: 100%;
    max-width: 370px;
    margin: 0 auto;
}

.sa-lognav-tabs {
    text-align: center;
    margin-bottom: 35px;
}

    .sa-lognav-tabs li {
        display: inline-block;
        padding: 0 15px;
    }

        .sa-lognav-tabs li a {
            font-size: 24px;
            color: #a5a5a5;
            display: inline-block;
            padding: 5px 0;
        }

        .sa-lognav-tabs li.active a {
            color: #ff502e;
            border-bottom: 2px solid #ff502e;
        }

.sa-logtct ul li {
    margin-bottom: 20px;
    position: relative;
}

.sa-lichek:before {
    content: "(*)";
    position: absolute;
    top: 12px;
    right: 10px;
    color: #ff0000;
}

.sa-logtct ul li select.form-control,
.sa-logtct ul li input.form-control {
    font-size: 18px;
    height: 46px;
    background: #a5a5a5;
    color: #000000;
}

.sa-logse:after {
    content: "\e259";
    position: absolute;
    top: 0;
    right: 0;
    height: 46px;
    line-height: 46px;
    color: #000000;
    padding: 0 8px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-border-radius: 0 4px 4px 0;
    -moz-border-radius: 0 4px 4px 0;
    border-radius: 0 4px 4px 0;
    background: linear-gradient(to top, #BABABA 0%, #FDFDFD 100%);
    background: -moz-linear-gradient(to top, #BABABA 0%, #FDFDFD 100%);
    background: -o-linear-gradient(to top, #BABABA 0%, #FDFDFD 100%);
    background: -ms-linear-gradient(to top, #BABABA 0%, #FDFDFD 100%);
    background: -webkit-linear-gradient(bottom, #BABABA 0%, #FDFDFD 100%);
}

.sa-logtct ul li input.form-control::-webkit-input-placeholder {
    color: #000000;
}

.sa-logtct ul li input.form-control:-moz-placeholder {
    color: #000000;
}

.sa-logtct ul li input.form-control::-moz-placeholder {
    color: #000000;
}

.sa-logtct ul li input.form-control:-ms-input-placeholder {
    color: #000000;
}

.sa-logtct ul li.sa-librow {
    margin: 0 -15px 20px;
}

.sa-logtct ul li span {
    float: left;
    width: 50%;
    padding: 0 15px;
}

.sa-logtct ul li .btn {
    font-size: 20px;
    font-weight: bold;
    width: 100%;
}

.sa-lib-dk {
    color: #000000;
    background: linear-gradient(to top, #B63D1D 0%, #FF502E 100%);
    background: -moz-linear-gradient(to top, #B63D1D 0%, #FF502E 100%);
    background: -o-linear-gradient(to top, #B63D1D 0%, #FF502E 100%);
    background: -ms-linear-gradient(to top, #B63D1D 0%, #FF502E 100%);
    background: -webkit-linear-gradient(bottom, #B63D1D 0%, #FF502E 100%);
}

.sa-lib-del {
    color: #a5a5a5;
    border: 1px solid #383838;
    background: linear-gradient(to top, #2C2C2C 0%, #121212 100%);
    background: -moz-linear-gradient(to top, #2C2C2C 0%, #121212 100%);
    background: -o-linear-gradient(to top, #2C2C2C 0%, #121212 100%);
    background: -ms-linear-gradient(to top, #2C2C2C 0%, #121212 100%);
    background: -webkit-linear-gradient(bottom, #2C2C2C 0%, #121212 100%);
}

    .sa-lib-del:hover {
        color: #ffffff;
    }

.sa-lib-lpas {
    display: inline-block;
    vertical-align: middle;
    color: #0ce3ac;
    font-size: 15px;
    text-decoration: underline;
    padding: 10px 0;
}

.sa-logtct ul li .checkbox {
    font-size: 15px;
    color: #b9b9b9;
}

/*lich-su-nap-the*/
.sa-brea {
    margin-bottom: 15px;
}

    .sa-brea li {
        display: inline-block;
    }

        .sa-brea li a {
            font-size: 13px;
            color: #616161;
        }

        .sa-brea li.active a {
            color: #cdcdcd;
            text-decoration: underline;
        }

        .sa-brea li + li:before {
            content: ' >';
            padding: 0 5px;
            color: #616161;
        }

.sa-ls-tit {
    font-size: 24px;
    color: #0ce3ac;
    margin-bottom: 25px;
}

.sa-ls-table table {
    border: 1px solid #272727;
}

    .sa-ls-table table tr td {
        text-align: center;
        border: 1px solid #272727;
        font-size: 16px;
        font-weight: 500;
        color: #898989;
        padding: 12px 8px;
        background-color: #000;
    }

    .sa-ls-table table thead tr td {
        font-size: 20px;
        font-weight: normal;
        text-transform: uppercase;
        color: #ffc107;
        background: #000000;
    }

/*nap-the*/
.sa-themain {
    height: auto;
}

.sa-hdnap {
    padding: 30px 0;
}

.sa-hdnap-tit {
    font-size: 30px;
    color: #ff502e;
    margin-bottom: 15px;
}

.sa-istar {
    width: 31px;
    height: 31px;
    display: inline-block;
    vertical-align: top;
    background-position: -90px -35px;
}

.sa-hdnapmain {
    padding: 20px 0;
}

/*thong-tin-shop*/
.sa-ttshop {
    line-height: 40px;
}

    .sa-ttshop h6 {
        text-align: center;
        margin-top: 15px;
        padding: 30px 0 15px;
        font-size: 30px;
        color: #ff502e;
        border-top: 1px solid #ff502e;
    }

    .sa-ttshop h5 {
        color: #ff502e;
        font-size: 30px;
    }

    .sa-ttshop h4 {
        font-size: 20px;
        color: #ff502e;
    }

    .sa-ttshop h3 {
        text-align: center;
    }

    .sa-ttshop p {
        font-size: 20px;
        color: #ffffff;
    }

/*chi-tiet-sp*/
.sa-ttacc-tit {
    float: left;
    font-size: 24px;
    color: #ffc107;
    padding: 10px 0;
}
.sa-ttactit{
    background-color: #000;
    padding: 5px 10px;
    border-radius: 5px;
}
.sa-ttactul {
    float: right;
}

    .sa-ttactul li {
        display: inline-block;
        vertical-align: middle;
    }

.sa-ttac-pri {
    font-weight: bold;
    font-size: 26px;
    color: #ffc107;
    padding: 0 10px;
}

.sa-ttac-btn a {
    display: inline-block;
    font-size: 21px;
    color: #FFFF00;
    font-weight: bold;
    height: 48px;
    line-height: 48px;
    padding: 0 10px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background: linear-gradient(to top, #B73E1D 0%, #FE502E 100%);
    background: -moz-linear-gradient(to top, #B73E1D 0%, #FE502E 100%);
    background: -o-linear-gradient(to top, #B73E1D 0%, #FE502E 100%);
    background: -ms-linear-gradient(to top, #B73E1D 0%, #FE502E 100%);
    background: -webkit-linear-gradient(bottom, #ffc107 0%, #d00029 100%);
}

.sa-ttac-btn.selled a {
    width: 126px;
    text-align: center;
    background: linear-gradient(to top, #008966 0%, #0ce3ac 100%);
    background: -moz-linear-gradient(to top, #008966 0%, #0ce3ac 100%);
    background: -o-linear-gradient(to top, #008966 0%, #0ce3ac 100%);
    background: -ms-linear-gradient(to top, #008966 0%, #0ce3ac 100%);
    background: -webkit-linear-gradient(bottom, #008966 0%, #0ce3ac 100%);
}

.sa-ttac-btn.preorder a {
    text-align: center;
    background: linear-gradient(to top, #009b73 0%, #0ce2ab 100%);
    background: -moz-linear-gradient(to top, #009b73 0%, #0ce2ab 100%);
    background: -o-linear-gradient(to top, #009b73 0%, #0ce2ab 100%);
    background: -ms-linear-gradient(to top, #009b73 0%, #0ce2ab 100%);
    background: -webkit-linear-gradient(bottom, #009b73 0%, #0ce2ab 100%);
}

.sa-ttacc-tabs {
    background: #000000;
    border-bottom: 2px solid #272727;
    margin: 10px 0;
}

    .sa-ttacc-tabs li {
        float: left;
        position: relative;
    }

        .sa-ttacc-tabs li a {
            position: relative;
            display: inline-block;
            font-size: 20px;
            color: #898989;
            padding: 15px;
            border-right: 1px solid #272727;
        }

        .sa-ttacc-tabs li.active a {
            color: #000000;
            background: #ffc107;
        }

        .sa-ttacc-tabs li a span {
            position: relative;
            top: -2px;
            display: inline-block;
            vertical-align: middle;
            padding: 0 3px;
            background: #ffc107;
            height: 20px;
            line-height: 20px;
            color: #000000;
            font-size: 15px;
            font-weight: bold;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .sa-ttacc-tabs li.active a:before {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 50%;
            margin-left: -10px;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 6px solid #b7b7b7;
        }

.sa-ttacc-tcont {
    padding: 15px 0;
}

.sa-ttmore {
    padding: 30px 0 15px;
}

.sa-ttmoretit {
    text-align: center;
    font-size: 22px;
    color: #898989;
    margin-bottom: 30px;
}

.sa-ttmoretit{
    background-color: #000000;
    padding: 10px 10px;
    border-radius: 5px;
    color: #ffc107;
}

.sa-ttmore .swiper-slide {
    float: left;
    width: 270px;
}
/*HÆ°á»›ng dáº«n mua acc*/
.h1_shop{
    text-align: center;
    font-size: x-large;
    line-height: inherit;
    color: #ff502e;
    font-weight: 600;
    text-transform: uppercase;
}
.h2_shop{
    text-align:center;
    font-size: large;
    line-height: 2;
    color: #0ce3ac;
    text-transform: uppercase;
}
.p_shop{
    font-size: large;
    line-height: inherit;
    padding-left: 40px;
    padding-bottom: 20px;
    padding-top: 20px;
}
.warning_shop{
    font-size: x-large;
    line-height: inherit;
    color: #ff502e;
}
.history_shop{
        color: #ff502e;
    font-size: larger;
    line-height: inherit;
    font-weight: 600;
}
.login_shop a{
    border: 2px solid #ffffff;
    line-height: 39px;
    padding: 10px;
    color: #FCAD26;
    font-size: 14px;
    border-radius: 5px;
}
.show_info li {
    width: 95%;
    margin: 3px;
    border: 1px #222222 solid;
    display: inline-block;
    overflow: hidden;
}
.show_info li img {
    width: 100%;
    height: 100%;
    margin: 0 auto;
}
.show_info {
    list-style: none;
    margin: 5px 0;
    text-align: center;
    overflow: hidden;
}
/*MEDIA*/
@media (min-width: 992px) {
    .show_info li {
        width: 49%;
    }
    .sa-lpping{
        min-height:160px;
    }
    .sa-bncol1 {
        right: 70%;
    }

    .sa-bncol2 {
        left: 30%;
    }
}

@media (max-width: 1200px) {
    .sa-logo img {
        width: 165px;
    }

    .sa-menu {
        margin: 22px 0 0 0px;
    }

        .sa-lpbbtn,
        .sa-lpinfo ul li,
        .sa-topthe li span,
        .sa-usmenu li a,
        .sa-menu li a {
            font-size: 13px;
        }

    .sa-lpbif p {
        font-size: 12px;
    }

    .sa-topthe li label {
        width: 85px;
        font-size: 12px;
    }

    .sa-topthe li span {
        margin: 0 80px 0 35px;
    }

    .sa-bntcbox {
        height: 255px;
    }

    .sa-bntabbox {
        height: 190px;
    }

    .sa-pthuong li {
        margin-bottom: 6px;
    }

        .sa-pthuong li label {
            font-size: 14px;
        }

    .sa-lpinfo {
        height: 202px;
    }

    .sa-lpits {
        height: 155px;
    }

    .sa-lpbbtn {
        width: 85px;
    }

    .sa-lpbpice {
        font-size: 15px;
    }
}

@media (max-width: 992px) {
    .sa-menu {
        display: none;
        background: #1d1d1d;
        margin: 0;
        float: none;
        position: absolute;
        z-index: 999;
        top: 55px;
        left: 0;
        width: 100%;
        box-shadow: 0 0 15px 1px #000;
    }

        .sa-menu li {
            display: block;
            float: none;
        }

            .sa-menu li a {
                border-bottom: 1px solid #232323;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
            }

    .sa-imn,
    .sa-mnshow {
        display: block;
    }
    .sa-bncol1{
        display:none;
    }
    .sa-bncol1,
    .sa-bncol2 {
        width: 100%;
    }

    .sa-bntbox {
        margin-right: 0;
    }

    .sa-lpcol {
        width: 33.33%;
    }

    .sa-lshare {
        text-align: center;
        margin-bottom: 30px;
    }

    .sa-header {
        height: 55px;
    }

    .sa-logo {
        top: 7px;
        left: 50px;
        width: 100px;
    }

    .sa-fthotline {
        margin-bottom: 15px;
    }

    .sa-login,
    .sa-user {
        margin-top: 10px;
    }

    .sa-pthuong li .sa-ptbtn {
        /*display: none;*/
        right: 5px;
    }

    .sa-mnhot {
        position: inherit;
        top: -3px;
        right: 0;
    }
}

@media (max-width: 768px) {
    .sa-lprod .col-sm-8{
        display: none;
    }
    .sa-lpcol {
        width: 100%;
    }

    .sa-fillter {
        /*height: 30px;*/
    }

    .sa-filic {
        /*display: block;*/
    }

    .sa-filbox {
        /*display: none;
        position: absolute;
        top: 35px;
        left: 0;
        z-index: 999;*/
        box-shadow: 3px 3px 15px -1px #000;
    }

        .sa-filbox .dropdown {
            display: block;
            width: 100%;
            margin-bottom: 5px;
        }

            .sa-filbox .dropdown .dropdown-toggle {
                width: 100%;
                text-align: left;
            }

    .btn-filter {
        width: 100% !important;
        margin:10px 0;
    }

    .sa-ftbtndel{
        width: 100% !important;
    }

    .sa-ftbtndel {
        display: block;
        float: none;
    }

    .sa-filshow .sa-filbox {
        display: block;
    }

    .sa-filshow .dropdown-menu {
        position: relative;
        min-width: 100%;
    }

    .sa-lpi:hover .sa-lpinfo {
        visibility: hidden;
        opacity: 0;
        filter: alpha(opacity=0);
        top: 300px;
    }

    .sa-ttacc-tabs li {
        float: none;
        display: block;
        width: 100%;
        position: relative;
    }

        .sa-ttacc-tabs li a {
            display: block;
            padding: 8px 15px;
            border-bottom: 1px solid #272727;
        }
}

@media (max-width: 510px) {
    .sa-fthwork,
    .sa-fthnum {
        width: 100%;
        border: none;
        text-align: left;
    }
    .sa-hidden{
        display:none;
    }
    .sa-lshare span {
        display: none;
    }

    .sa-lpmain {
        padding: 5px;
    }

    .sa-lprow {
        margin: 0 -4px;
    }

    .sa-lpcol {
        padding: 0 4px;
    }

    .sa-lpbott {
        padding: 5px 10px;
    }
}

@media (max-width: 450px) {
    .testimonials{
        display:block;
    }
    .topHeader{
        display:none;
    }
    .wmuSliderPagination {
        left: 42%;
    }
    .wmuSlider .wmuSliderWrapper article img {
        width: 30%;
    }
    .headerImg{
        display:none;
    }
    
    .sa-lpbif p {
        font-size: 10px;
    }

    .sa-lpbpice {
        font-size: 12px;
    }

    .sa-lpbbtn {
        width: 100%;
        font-size: 12px;
    }

    .sa-bnnav-tabs li a {
        font-size: 14px;
    }
}

@media (max-width: 430px) {
    
    
    .sa-usmoney > span {
        display: none;
    }

    .sa-logo img {
        width: 100px;
    }

    .sa-login li a {
        padding: 0 7px;
    }

    .sa-lognav-tabs li {
        padding: 0 10px;
    }

        .sa-lognav-tabs li a {
            font-size: 18px;
        }

    .sa-logtct ul li .btn {
        font-size: 14px;
    }

    .sa-lib-lpas {
        font-size: 11px;
    }

    .sa-logmain {
        /*height: 460px;*/
    }

    .sa-logtct ul li select.form-control,
    .sa-logtct ul li input.form-control {
        font-size: 16px;
    }
}

@media (max-width: 373px) {
    .sa-lpcol {
        width: 100%;
    }

    .sa-lpi {
        margin-bottom: 10px;
    }

    .sa-lpbif p {
        font-size: 11px;
    }
}

.ngoc{
    height: 600px;
    background-image: url(../images/rune.jpg);
    background-repeat: no-repeat;
    background-position: center center;
}
.ngoc_title{
    color: #56a81d !important;
    text-shadow: 0 0 15px #56a81d !important;
    width: 140px;
    padding-top: 250px;
    margin-left: auto;
    margin-right: auto;
    font-size: 17px;
    text-transform: uppercase;
}
.l-i-c-acc.p-clothes li {
    border: 2px #fc4f2d solid;
}
.clothes-bg-top {
    background: url(/Content/images/bg-clothes-top.png) center center no-repeat;
    height: 45px;
    display: block;
    margin: 10px 0;
}
.clothes-bg-bottom {
    background: url(/Content/images/bg-clothes-bottom.png) center center no-repeat;
    height: 34px;
    display: block;
    margin: 10px 0;
}
.tt7{
    padding-left: 15px;
    padding-right: 15px;
    margin-top: -60px;
    z-index:1;
    position: relative;
    
}
.champs-tt7{
    z-index:2;
    position: relative;
}
.l-i-c-tt {
    margin: 5px 0;
    text-align: center;
    overflow: hidden;
    
}
.l-i-c-tt li {
    width: 13.38888%;
    margin: 3px;
    border: 1px #222222 solid;
    display: inline-block;
    overflow: hidden;
}
.l-i-c-tt li img{
    margin-left: auto;
    margin-right:auto;
    display: block;
}
.l-i-c-tt li label {
    background: #000000;
    height: 40px;
    padding: 10px 15px 25px 15px;
    display: block;
    font-size: 13px;
}
img.champs-tt7{
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    box-shadow: -1px 5px 13px #09101b;
}
.video-responsive{
    overflow:hidden;
    padding-bottom:45.5%;
    position:relative;
    height:0;
}
.video-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
.sa-menu .guide_buy{
    position: relative;
    overflow: hidden;
}
.sa-menu .guide_buy::after{
    animation: shine 1.5s infinite linear alternate;
    content: "";
    position: absolute;
    top: -110%;
    left: -210%;
    width: 200%;
    height: 200%;
    opacity: 0;
    transform: rotate(30deg);
    background: rgba(255, 255, 255, 0.13);
    background: linear-gradient( to right, rgba(255, 255, 255, 0.13) 0%, rgba(255, 255, 255, 0.13) 77%, rgba(255, 255, 255, 0.5) 92%, rgba(255, 255, 255, 0.0) 100% );
}
.text-success {
    color: black;
    margin: 0 .5em 0 0;
    padding: .4em .833em;
    min-width: 3em;
    text-align: center;
    background-color: #FBC02D!important;
    border-color: #FBC02D!important;
    border-radius: .2857rem;
}

@keyframes background {
  0% { background-color: #f00; }
  33% { background-color: #0cc113; }  
  67% { background-color: #99f; }
  100% { background-color: #fbc02d; }
}