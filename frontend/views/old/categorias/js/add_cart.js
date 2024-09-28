let id = 2;
const cart = document.querySelector(".btn_add_cart");
cart.addEventListener("click", function(e){
    add_cart();
})

const line = document.querySelector(".btn-segundario.add_line");
let n_line = 2;
line.addEventListener("click", function(e){
    if(n_line == 5) return;
    add_line(e);
    n_line++;
})

function add_line(e){
    const btns = document.querySelector(".btn-segundario.add_line");
    const line_parent = e.target.parentNode.nextElementSibling;
    const new_line = document.createElement("div");
    new_line.className = "detalhes-inputs";
    new_line.id = "div-line";
    new_line.innerHTML = '<div class="btn_remove_line btn-segundario"><img src="/frontend/public/img/menos.png" alt=""></div>' +
    '<input type="text" name="tamanho" label="tamanho_valor" placeholder="UNICO" id="tamanho">' +
    '<input type="text" name="valor" label="tamanho_valor" placeholder="R$" id="valor">';
    new_line.childNodes[0].addEventListener("click",(e)=>{
        if(n_line > 1 && n_line <= 5){
            remove_line(e);
            n_line--;
        }
    });
    line_parent.appendChild(new_line)
}
function remove_line(event){
    const line = event.target.parentNode.parentNode;
    const detalhes_inputs = event.target.parentNode.parentNode.parentNode;
    detalhes_inputs.removeChild(line)
}

function add_cart() {
    if(!(id >= 1 && id <= 5)){
        return;
    }
    const menu = document.querySelector(".categoria-segundaria");
    const div = document.createElement("div");
    div.className = "menu-categorias";
    div.id = `cart-${id}`;
    div.innerHTML =   '<div class="sub-segundaria" id="sub-seg">' +
        '<div class="secao-segundaria">' +
            '<label class="label-segundaria" for="">CATEGORIA SEGUNDARIA</label>' +
            '<input class="input-segundaria" type="text" placeholder="SALGADA" name="sub_categoria" id="sub_categoria">' +
            '<div class="btn_remove_card btn-segundario btn-add-cart"><img src="/frontend/public/img/menos.png" alt=""></div>' +
        '</div>' +
        '<div class="detalhes-segundaria">' +
            '<div class="detalhes-titles">' +
            '<h3>TAMANHO DAS PIZZAS</h3>' +
                '<h3>VALOR</h3>' +
                '</div>' +
            '<div class="btn-segundario add_line"><img src="/frontend/public/img/mais.png" alt=""></div>' +
            '<div class="detalhes-inputs" id="div-line">' +
            '<input type="text" name="tamanho" label="tamanho_valor" placeholder="UNICO" id="tamanho"> '+
            '<input type="text" name="valor" label="tamanho_valor" placeholder="R$" id="valor">'
            '</div>' +
        '</div>' +
    '</div>';
    
    div.children['sub-seg'].children[0].children[2].addEventListener("click",(event)=>{
        remove_cart(event)
    });
    let n_line = 2;
    div.children['sub-seg'].children[1].children[1].addEventListener("click",(event)=>{
        if(n_line == 5) return;
        add_line(event);
        n_line++;
    });
    menu.appendChild(div);
    id++;
}

function remove_cart(event) {
    if(id <= 1 && id > 5) return;
    const menu = event.target.parentNode.parentNode.parentNode.parentNode;
    const cat = document.querySelector(".categoria-segundaria");
    const el = document.getElementById(`cart-${id-1}`);
    cat.removeChild(menu)
    id--;
}