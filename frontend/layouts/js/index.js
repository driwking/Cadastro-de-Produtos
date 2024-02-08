var content = document.querySelector(".btn")
var div = document.querySelector(".mensage-btn")
var btn_conf = document.querySelector(".btn_conf")
var btn_canc = document.querySelector(".btn_canc")
var background = document.querySelector(".div-backgorund")
var form = document.querySelector(".dados")
var bots = document.querySelector(".bots")
var h3 = document.querySelector(".title-h3")
var body_bots = document.querySelector(".body-bots")
// const input = document.createElement("input")
// input.onclick = ("conf()")
// input.type("submit")
// input.value("KKKKO")

function send_mensage() {


    btn_conf.style.display = "flex"
    h3.style.display = "flex"
    btn_canc.style.display = "flex"

    div.className = ("mensage")
    form.style.display = "flex"
    body_bots.style.backgroundColor = "red"
    form.appendChild(body_bots)
    // div.appendChild(btn_canc)
    div.appendChild(background)

}

function canc(){
    div.className = (".mensage-btn")
    content.style.display = "flex"
    btn_conf.style.display = "none"
    btn_canc.style.display = "none"
    h3.style.display = "none"

}

function conf() {
    div.className = (".mensage-btn")
    content.style.display = "flex"
    btn_conf.style.display = "none"
}