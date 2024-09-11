let button = document.querySelector(".btn_add_cart")
let cart = document.querySelector(".detalhes-segundaria")
let button_add_line = document.querySelector('.add_line');
let button_remove_line = document.querySelector('.remove_line');

// adicionanddo novos carts na tela
let limited_cart = 0
button.addEventListener('click', (e) => {
    let pos_input = 1;
    if (limited_cart >= 0 && limited_cart < 4) {
        limited_cart += 1

        let sub_segundaria = document.createElement('div');
        sub_segundaria.classList.add('sub-segundaria')
        let div_segundaria = document.createElement('div');
        div_segundaria.classList.add('secao-segundaria');

        let input_segundaria = document.createElement('input');
        input_segundaria.setAttribute('placeholder','SALGADA')
        input_segundaria.setAttribute('name',`nomeCategoriaSegundaria-0${limited_cart+1}`)
        let label_segundaria = document.createElement('label');
        label_segundaria.innerHTML = 'CATEGORIA SEGUNDARIA';

        input_segundaria.classList.add('input-segundaria');
        label_segundaria.classList.add('label-segundaria');
        div_segundaria.appendChild(label_segundaria);
        div_segundaria.appendChild(input_segundaria);

        menu_categorias = document.querySelector('.menu-categorias');
        cart = document.createElement('div');
        titulos = document.createElement('div');
        titulos.classList.add('detalhes-titles');
        p_01 = document.createElement('h3')
        p_01.innerHTML = 'TAMANHO DAS PIZZAS';
        p_02 = document.createElement('h3')
        p_02.innerHTML = 'VALOR';
        // console.log(titulos)
        titulos.appendChild(p_01);
        titulos.appendChild(p_02);

        inputs = document.createElement('div');
        inputs.classList.add('detalhes-inputs');
        input_01 = document.createElement('input')
        input_01.setAttribute("placeholder", 'UNICO');
        input_01.setAttribute('name',`sub-0${limited_cart+1}-tamanho-0${pos_input}`)
        input_02 = document.createElement('input')
        input_02.setAttribute("placeholder", 'R$');
        input_02.setAttribute('name',`sub-0${limited_cart+1}-valor-0${pos_input}`)
        input_01.setAttribute("id", 'line-01');
        input_02.setAttribute("id", 'line-02');

        button_remove_line = document.createElement('div')
        button_remove_line.setAttribute('class', 'btn-segundario remove_line teste')
        img_02 = document.createElement('img')
        img_02.setAttribute('src', '/frontend/public/img/menos.png')
        button_remove_line.appendChild(img_02)


        inputs.appendChild(input_01);
        inputs.appendChild(input_02);
        // inputs.appendChild(button_remove_line); 

        button_new_line = document.createElement('div')
        button_new_line.setAttribute('class', 'btn-segundario add_line teste')

        // sub botao
        let limited_lines = 0;
        pos_input = 1;
        let pos_cart = limited_cart + 1;
        button_new_line.addEventListener('click', (e) => {
            limited_lines;
            limited_cart;
            pos_cart;
            pos_input++;
            if (limited_lines < 5) {
                lineNew = e.target.parentNode.parentNode
                
                inputs = document.createElement('div');
                inputs.classList.add('detalhes-inputs');
                input_01 = document.createElement('input')
                input_01.setAttribute("placeholder", 'UNICO');
                input_01.setAttribute("name",`sub-0${pos_cart}-tamanho-0${pos_input}`);
                input_02 = document.createElement('input');
                input_02.setAttribute("placeholder", 'R$');
                input_02.setAttribute('name',`sub-0${limited_cart+1}-valor-0${pos_input}`)

                // Remove lines inputs
                button_remove_line = document.createElement('div');
                button_remove_line.setAttribute('class', 'btn-segundario remove_line teste');
                button_remove_line.addEventListener('click', (e) => {
                    limited_lines;
                    if (limited_lines > 0) {
                        limited_lines -= 1;
                        pos_input--;
                    }
                    linesRemoved = e.target.parentNode.parentNode;
                    linesRemoved.remove();
                })

                // aply news elements 
                img_02 = document.createElement('img');
                img_02.setAttribute('src', '/frontend/public/img/menos.png');
                button_remove_line.appendChild(img_02);

                inputs.appendChild(input_01);
                inputs.appendChild(input_02);
                inputs.appendChild(button_remove_line);

                lineNew.appendChild(inputs);
                // e.stopImmediatePropagation()
                limited_lines += 1;
   
            }
        })

        // create news elements 
        img_01 = document.createElement('img')
        img_01.setAttribute('src', '/frontend/public/img/mais.png')
        button_new_line.appendChild(img_01)

        button_remove_cart = document.createElement('div')
        button_remove_cart.classList.add('btn-segundario')
        button_remove_cart.classList.add('remove_cart')
        button_remove_cart.appendChild(img_02)
        button_remove_cart.addEventListener('click', (e) => {
            limited_cart
            cart = e.target.parentNode.parentNode.parentNode

            if (limited_cart > 0 && limited_cart <= 4) {
                limited_cart -= 1;

            }

            cart.remove()
        })

        //  aply news elements 
        cart.classList.add('detalhes-segundaria');

        sub_segundaria.appendChild(div_segundaria);
        sub_segundaria.appendChild(cart);
        cart.appendChild(titulos);
        cart.appendChild(inputs);
        cart.appendChild(button_new_line)
        cart.appendChild(button_remove_cart)
        menu_categorias.appendChild(sub_segundaria);
       
    }
})

let limited_lines = 0
let pos_input_01 = 2;
button_add_line.addEventListener('click', (e) => {
    if (limited_lines >= 0 && limited_lines < 5) {

        detalhes_inputs = document.querySelector('.detalhes-segundaria')

        inputs = document.createElement('div');
        inputs.classList.add('detalhes-inputs');
        input_01 = document.createElement('input')
        input_01.setAttribute("placeholder", 'UNICO');
        input_01.setAttribute('name',`sub-0${1}-tamanho-0${pos_input_01}`)
        input_02 = document.createElement('input')
        input_02.setAttribute("placeholder", 'R$');
        input_02.setAttribute('name',`sub-0${1}-valor-0${pos_input_01}`)
        pos_input_01++

        let button_remove_line = document.createElement('div')
        button_remove_line.setAttribute('class', 'btn-segundario remove_line teste')
        img_02 = document.createElement('img')
        img_02.setAttribute('src', '/frontend/public/img/menos.png')
        button_remove_line.appendChild(img_02)


        button_remove_line.addEventListener('click', (e) => {
            limited_lines
            if (limited_lines > 0) {
                limited_lines -= 1
                pos_input_01--
            }
            pai = e.target.parentNode.parentNode
            pai.remove()

        })



        inputs.appendChild(input_01);
        inputs.appendChild(input_02);
        inputs.appendChild(button_remove_line);



        detalhes_inputs.appendChild(inputs)
        e.stopImmediatePropagation()
        limited_lines += 1;


    }

})