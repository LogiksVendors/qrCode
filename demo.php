<!DOCTYPE html PUBLIC>
<html>

<head>
	<title>QRCode Test</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<script type="text/javascript" src='jquery.js'></script>
	<script type="text/javascript" src='jquery.qrcode.js'></script>

<style>
.qrcodeHolder {
	width: 800px;height: 300px;
	margin: auto;
}
.qrcodeHolder .col {
	width: 50%;height: 100%;
	display: inline-block;
	float: left;
}
.qrcodeHolder .col .toolBtns {
	 text-align:center;
}
#qrSource {
	border: 1px solid #AAA;
	width: 100%;height: 100%;
	resize:none;
}
#qrCanvas {
	font-size: 20px;
	font-family: cursive;
}
</style>
</head>
<body>
	<div class='qrcodeHolder'>
		<div class='col col1'>
			<textarea id='qrSource'></textarea>
			<div class='toolBtns'>
				<button onclick="createQRCode()">Create QRCode</button>
			</div>
		</div>
		<div id='qrCanvas' class='col col2' align=center></div>
	</div>
</body>
<script type="text/javascript">
$(function() {
	$("#qrCanvas").html("Please put some text<br/> to create QRCode");
})
function createQRCode() {
	$("#qrCanvas").html("Please put some text<br/> to create QRCode");
	txt=$("#qrSource").val();
	if(txt==null || txt.length<=0) {
		return;
	}
	$("#qrCanvas").qrcode({
		render:'canvas',//table
		//width:500,height:500,
		text:txt
	});
}
</script>
</html>