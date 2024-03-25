var button = document.querySelector(".btn-segundario")
var cart_main = document.querySelector(".sub-segundaria")
var cart = document.querySelector(".sub-segundaria")
var id = 0;

// var line_01 = document.querySelector("#line-01")
// var line_02 = document.querySelector("#line-02")
// var more_line = document.querySelector("#div-line")

function add_id() {
    id += 1;
    return id;
}

function add_cart(id_value) {
    if (id_value < 4) {
        var new_cart = cart.cloneNode(true);
        new_cart.id = id
        new_cart.className = "detalhes-segundaria"
        cart_main.appendChild(new_cart)
    }
}

function remove_cart() {
    var remove_cart = document.querySelector(".detalhes-segundaria")
}


function add_line() {


    var line_01 = document.querySelector("#line-01")
    var line_02 = document.querySelector("#line-02")
    var more_line = document.querySelector("#div-line")
    var new_line_01 = line_01.cloneNode(true)
    var new_line_02 = line_02.cloneNode(true)
    more_line.appendChild(new_line_01)
    more_line.appendChild(new_line_02)
}

if (document.querySelector("#button").addEventListener("clik", function(){


})) {
    
}
function id() {
    document.querySelector()
}