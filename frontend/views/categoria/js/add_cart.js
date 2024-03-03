var button = document.querySelector(".btn-segundario")
var cart_main = document.querySelector(".sub-segundaria")
var cart = document.querySelector(".detalhes-segundaria")
var id = 0;

function add_id(){

    id+= 1;
    return id;
}

function add_cart(id_value){
    if(id_value < 4){
    var new_cart = cart.cloneNode(true);
    new_cart.id = id;
    new_cart.className = "detalhes-segundaria"
    cart_main.appendChild(new_cart)
}
}

function remove_cart(){
    var remove_cart = document.querySelector(".detalhes-segundaria")
}

function id(){
    
}