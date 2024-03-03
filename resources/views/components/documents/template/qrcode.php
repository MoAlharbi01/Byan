#qrcode {
width:260px;
height:260px;
margin-top:0px;
}


var vtext = '';






var qrcode = new QRCode(document.getElementById("qrcode"), {
text: vtext,
width: 250,
height: 250,
colorDark : "#000000",
colorLight : "#ffffff",
correctLevel : QRCode.CorrectLevel.H
});
