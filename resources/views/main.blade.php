<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio </title>
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
html{
	font-family: 'Montserrat', sans-serif; 
	background-color: #F2DE30;
	/*background-image: url("img/backgr.jpg");
	background-repeat: no-repeat;
	background-size: cover; */
}
nav{
	display: flex;
    flex-direction: row;
    justify-content: center;
	width: 100%;
	height: 50px;
	background-color: #424040;
}
nav ul li{
	float: left;
	list-style: none;
	position: relative;
}
nav ul li a{
	display: block;
	font-family: 'Open Sans', sans-serif;
	font-size: 11px;
	letter-spacing: 3px;
	color: #fff;
	text-decoration: none;
	padding:18px 40px;
}
nav ul li a:hover{
	color: #F2DE30;
	font-size: 13px;
}

html {
    font-family: sans-serif;
}
hr {
	background-color: #a4a4a2;
	border: 0;
	height: 1px;
}
img {
	clear: both;
	height: auto;
	max-width: 100%;
	vertical-align: middle;
}
.img-block{
	width: 370px;
	background-color: #424040;
	padding: 10px;
}
#imgid{
	padding: 10px;
}
.nursery{
	display: inline-flex;
	width: 100%;
	padding: 7px;
	background-color:transparent; 
}
.hello{
	width: 37%;
	margin-left: 40%;
	font-family:  Merriweather, Georgia, serif; 
	font-size: 21px; 
	color: #424040; 
	letter-spacing: 2px;
}
h2{
	font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    letter-spacing: 7px;
    line-height: 1.3125;
    margin: 0 0 1.75em;
    text-align: center;
    font-weight: normal;
}
.conteiner{
	width: 55%;
	margin:5px;
	padding:5px;
	margin-top: 150px;
	margin-left: 80px;
}
a{
	text-align: center;
	text-decoration: none;
	color:#9f8b63;
	font-family: 'Karla', sans-serif;
	font-size: 18px;
}
.postbottom-facebook{
	padding-left: 19px;
	float: left;
	cursor: pointer;
}
.postbottom-twitter{
	padding-left: 19px;
	float: left;
	cursor: pointer;
}
.postbottom-instagram{
	padding-left: 19px;
	float: left;
	cursor: pointer;
}
.contentfooter{
	display: flex;
	width: 560px;
	margin:0;
	padding: 0;
}
.second-block{
	width: 40%;
	margin: 0 auto;
}
.block-inner{
	text-align: center;
	width: 55%;
	height: auto;
	margin-top: 30px;
}
.soc-media{
	width: 280px;
	margin: 0 auto;
	margin-top: 30px;
	margin-left: 30px;
}
.list-soc{
	width: 250px;
	list-style: none;
	display: flex;
	flex-wrap: nowrap;
	justify-content: space-between;
	padding-left: 20px;
	padding-bottom: 20px;
}
.input{
	border:0;
	border-bottom: 1px solid #424040;
	letter-spacing: 7px;
	text-align: center;
	font-size: 10px;
	padding: 10px;
	color: #424040;
}
.form form, .form-footer form{
	display: flex;
	flex-direction: column;
}
.btn-join{
	border: 0;
	padding: 10px 20px;
	border:1px solid #424040;
	background-color: transparent; 
	margin-top: 20px;
	margin-bottom: 30px;
	transition: .3s;
	color: #424040;
	letter-spacing: 7px;
	font-size: 12px;
}
.btn-join:hover, .btn-join:focus{
	background-color: #424040;
	color: #fff;
	box-shadow: 0px 10px 18px 0px rgba(0, 0, 0, 0.45);
}
.form-footer{
	width: 500px;
	padding: 0 100px;
	margin-left: 20px;
}
.footer-inner{
	width: 540px;
	margin: 0 auto;
	text-align: center;
	margin-left: 30%;
}
.footer{
	background-color: #222224;	
}
.white{
	background-color: #fff;
	color: #fff;
}

.title-footer{
	color: #fff;
	font-size: 13px;
	letter-spacing: 7px;
	padding: 40px 0;
}
.foot{
	padding-left: 100px;
}
.policy{
	margin-top: 30px;
	color: #9f8b63;
	font-size: 12.5px;
}
.policy:hover{
	text-decoration: underline #9f8b63;
}
.copyright{
	text-align: center;
	color: #fff;
	font-size: 7px;
	letter-spacing: 7px;
	padding: 30px 0;
}
address{
	color: white;
	font-family: Merriweather, Georgia, serif;

}
    </style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="{{ URL::route('main') }}">MAIN</a></li>
			<li><a href="{{ URL::route('about') }}">ABOUT</a></li>
			<li><a href="{{ URL::route('contact') }}">CONTACT</a></li>
		</ul>
	</nav>
	<hr>
	<div class="nursery">
		<div class = "conteiner">
			<div class="hello">
			<p style="margin-left:20px;font-family: 'Open Sans', sans-serif; font-size: 10px; color: #424040;letter-spacing: 2px;">HELLO! I'M ARNA BUKHARBAYEVA</p>
			<a href="{{ URL::route('about') }}"><div class="btn-join">LET'S START!</div></a></div>
			<br>
		</div>
		<section class="second-block">
		<div class="block-inner">
			<div class="img-block">
				<img id="imgid" src="https://github.com/190103318/ArnaBukharbayeva-profile-website/blob/main/lab3/resources/Arna.jpg?raw=true" alt="" width="400px" height="470px">
			</div>
			<div class="soc-media">
				<ul class="list-soc">
					<li class="soc-item"><img src="https://www.flaticon.com/svg/vstatic/svg/1051/1051360.svg?token=exp=1613989243~hmac=394adbcb61bed5bea5046e27a8ce3762" alt="" width="16px"></li>
					<li class="soc-item"><img src="https://www.flaticon.com/svg/vstatic/svg/1051/1051364.svg?token=exp=1613989200~hmac=108127018b5c5d8a58e1104fc856877c" alt="" width="16px"></li>
					<li class="soc-item"><img src="https://www.flaticon.com/svg/vstatic/svg/1051/1051382.svg?token=exp=1613989276~hmac=dbccf755cfaf085803e7657713837bf4" alt="" width="16px"></li>
					<li class="soc-item"><img src="https://www.flaticon.com/svg/vstatic/svg/1051/1051384.svg?token=exp=1613989322~hmac=9072878e4d43264190137bed5ed3e2b8" alt="" width="16px"></li>
					<li class="soc-item"><img src="https://www.flaticon.com/svg/vstatic/svg/1051/1051350.svg?token=exp=1613989296~hmac=d764980969202a9ebeacc58971faf6a4" alt="" width="16px"></li>
				</ul>
			</div>
		</div>
	</section>
	</div>
	


	<footer class="footer">
		<div class="footer-inner">
			<br><br><br>
			<address>
                Athor of website - <a href="https://www.instagram.com/imarnaa/">Arna Bukharbayeva</a>.<br> 
            </address>
			<br><br>
			<p class="policy">Privacy Policy</p>
		</div>
		<p class="copyright">COPYRIGHT ©️ 2020 HOMEY OH MY DESIGN + DEVELOPMENT BY BLOGZILLA STUDIO</p>
	</footer>
</body>
</html>