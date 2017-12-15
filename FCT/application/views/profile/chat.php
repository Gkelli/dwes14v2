<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( (!isset($_SESSION['logged_in'] ) && $_SESSION['logged_in'] != true)){
	redirect('/');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.mytext {
	border: 0;
	padding: 10px;
	background: whitesmoke;
}

.text {
	width: 75%;
	display: flex;
	flex-direction: column;
}

.text>p:first-of-type {
	width: 100%;
	margin-top: 0;
	margin-bottom: auto;
	line-height: 13px;
	font-size: 12px;
}

.text>p:last-of-type {
	width: 100%;
	text-align: right;
	color: silver;
	margin-bottom: -7px;
	margin-top: auto;
}

.text-l {
	float: left;
	padding-right: 10px;
}

.text-r {
	float: right;
	padding-left: 10px;
}

.avatar {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 25%;
	float: left;
	padding-right: 10px;
}

.macro {
	margin-top: 5px;
	width: 85%;
	border-radius: 5px;
	padding: 5px;
	display: flex;
}

.msj-rta {
	float: right;
	background: whitesmoke;
}

.msj {
	float: left;
	background: white;
}

.frame {
	background: #e0e0de;
	height: 450px;
	overflow: hidden;
	padding: 0;
}

.frame>div:last-of-type {
	position: absolute;
	bottom: 5px;
	width: 100%;
	display: flex;
}

ul {
	width: 100%;
	list-style-type: none;
	padding: 18px;
	position: absolute;
	bottom: 32px;
	display: flex;
	flex-direction: column;
}

.msj:before {
	width: 0;
	height: 0;
	content: "";
	top: -5px;
	left: -14px;
	position: relative;
	border-style: solid;
	border-width: 0 13px 13px 0;
	border-color: transparent #ffffff transparent transparent;
}

.msj-rta:after {
	width: 0;
	height: 0;
	content: "";
	top: -5px;
	left: 14px;
	position: relative;
	border-style: solid;
	border-width: 13px 13px 0 0;
	border-color: whitesmoke transparent transparent transparent;
}

input:focus {
	outline: none;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
	color: #d4d4d4;
}

::-moz-placeholder { /* Firefox 19+ */
	color: #d4d4d4;
}

:-ms-input-placeholder { /* IE 10+ */
	color: #d4d4d4;
}

:-moz-placeholder { /* Firefox 18- */
	color: #d4d4d4;
}
</style>


<script>
var me = {};
me.avatar = "https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png";

var you = {};
you.avatar = "https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png";

function formatAMPM(date) {
	var hours = date.getHours();
	var minutes = date.getMinutes();
	var ampm = hours >= 12 ? 'PM' : 'AM';
	hours = hours % 12;
	hours = hours ? hours : 12; 
	minutes = minutes < 10 ? '0'+minutes : minutes;
	var strTime = hours + ':' + minutes + ' ' + ampm;
	return strTime;
}

function insertChat(who, text, time = 0){
	var control = "";
	var date = formatAMPM(new Date());

	if (who == "me"){

		control = '<li style="width:100%">' +
		'<div class="msj macro">' +
		'<div class="avatar"><img class="img-circle" style="width:100%;" src="'+ me.avatar +'" /></div>' +
		'<div class="text text-l">' +
		'<p>'+ text +'</p>' +
		'<p><small>'+date+'</small></p>' +
		'</div>' +
		'</div>' +
		'</li>';
	}else{
		control = '<li style="width:100%;">' +
		'<div class="msj-rta macro">' +
		'<div class="text text-r">' +
		'<p>'+text+'</p>' +
		'<p><small>'+date+'</small></p>' +
		'</div>' +
		'<div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="'+you.avatar+'" /></div>' +
		'</li>';
	}
	setTimeout(
			function(){
				$("ul").append(control);

			}, time);

}

function resetChat(){
	$("ul").empty();
}

$(".mytext").keyup(function(e){ 
    var code = e.which;
    if(code==13){
		var text = $(this).val();
		if (text !== ""){
			insertChat("me", text);
			$(this).val('');
		}
	}
});
	resetChat();
	insertChat("me", "Bienvenido...", 0);

	</script>
</head>
<body>
	<div class="col-sm-3 col-sm-offset-4 frame">
		<ul></ul>
		<div>
			<div class="msj-rta macro" style="margin: auto">
				<div class="text text-r" style="background: whitesmoke !important">
					<input class="mytext" script="insertChat()"
						placeholder="Escriba un mensaje" />
				</div>
			</div>
		</div>
	</div>
</body>
</html>
