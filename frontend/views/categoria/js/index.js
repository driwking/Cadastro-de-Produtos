// var content = document.querySelector(".btn")
var div = document.querySelector(".mensage-btn")
var btn_conf = document.querySelector(".btn_conf")
var btn_canc = document.querySelector(".btn_canc")
var form = document.querySelector(".form-dados")
var h3 = document.querySelector(".title-h3")
var contaienr_bots = document.querySelector(".contaienr-bot")

var body = document.querySelector("body")

function send_mensage() {
    console.log("clicked on button!")
    body.style.zIndex = "-1"
    contaienr_bots.style.display = "flex"
    btn_conf.style.display = "flex"
    btn_canc.style.display = "flex"
    h3.style.display = "flex"
    div.className = ("mensage div-buttons")
    form.appendChild(contaienr_bots)
}

function canc() {
    contaienr_bots.style.zIndex = "110"
    contaienr_bots.style.display = "none"
    btn_conf.style.display = "none"
    btn_canc.style.display = "none"
    h3.style.display = "none"
}

function conf() {
    btn_conf.style.display = "none"
}

function teste(){

    console.log("clicked on button!")
}