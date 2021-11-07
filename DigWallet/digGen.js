let qrcode = document.getElementById("QRcode");
let qrtext = document.getElementById("upload");
let qrbtn = document.getElementById("uploadbtn");

qrbtn.addEventListener("click", generateQR);

function generateQR(){
    let size = "1000x1000";
    let data = qrtext.value;
    let baseURL = "http://api.qrserver.com/v1/create-qr-code/";

    let url = `${baseURL}?data=${data}&size=${size}`;
    qrcode.src = url;
}