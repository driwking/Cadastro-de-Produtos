var button = document.querySelector(".btn-segundario")
var cart = document.querySelector(".detalhes-segundaria")
var button_add_line = document.querySelector('.add_line');
var button_remove_line = document.querySelector('.remove_line');

// adicionanddo novos carts na tela
var limited_cart = 0
button.addEventListener('click', (e) => {
    if(limited_cart >= 0 && limited_cart < 4){
        segundaria = document.querySelector('.sub-segundaria');
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
        input_02 = document.createElement('input')
        input_02.setAttribute("placeholder", 'R$');
        input_01.setAttribute("id",'line-01');
        input_02.setAttribute("id",'line-02');
        
        button_remove_line = document.createElement('div')
        button_remove_line.setAttribute('class','btn-segundario remove_line teste')
        img_02 = document.createElement('img')
        img_02.setAttribute('src','/frontend/public/img/menos.png')
        button_remove_line.appendChild(img_02)
        

        inputs.appendChild(input_01);
        inputs.appendChild(input_02); 
        // inputs.appendChild(button_remove_line); 

        button_new_line = document.createElement('div')
        button_new_line.setAttribute('class','btn-segundario add_line teste')

        // sub botao
        let limited_lines = 0;
        button_new_line.addEventListener('click', (e) => {
            limited_lines
            if(limited_lines < 5){
                lineNew = e.target.parentNode.parentNode
                console.log(e.target.parentNode.parentNode)
            
                inputs = document.createElement('div');
                inputs.classList.add('detalhes-inputs');    
                input_01 = document.createElement('input')
                input_01.setAttribute("placeholder", 'UNICO');
                input_02 = document.createElement('input')
                input_02.setAttribute("placeholder", 'R$');

                // Remove lines inputs
                button_remove_line = document.createElement('div')
                button_remove_line.setAttribute('class','btn-segundario remove_line teste')
                button_remove_line.addEventListener('click',(e)=>{
                    limited_lines
                    if(limited_lines > 0){
                        limited_lines -= 1 
                    }
                    linesRemoved = e.target.parentNode.parentNode
                    linesRemoved.remove()
                })
                
                // aply news elements 
                img_02 = document.createElement('img')
                img_02.setAttribute('src','/frontend/public/img/menos.png')
                button_remove_line.appendChild(img_02)

                inputs.appendChild(input_01);
                inputs.appendChild(input_02);
                inputs.appendChild(button_remove_line);
                
                lineNew.appendChild(inputs)
                // e.stopImmediatePropagation()
                limited_lines += 1;
                console.log(limited_lines)
            }
        })

        // create news elements 
        img_01 = document.createElement('img')
        img_01.setAttribute('src','/frontend/public/img/mais.png')
        button_new_line.appendChild(img_01)

        button_remove_cart =  document.createElement('div')
        button_remove_cart.classList.add('btn-segundario')
        button_remove_cart.classList.add('remove_cart')
        button_remove_cart.appendChild(img_02)
        button_remove_cart.addEventListener('click',(e)=>{
            limited_cart
            cart = e.target.parentNode.parentNode
            console.log(cart)
            if(limited_cart > 0 && limited_cart <= 4){
                limited_cart -= 1;
                console.log("menos")
            }
            console.log(limited_cart)
            cart.remove()
        })

        //  aply news elements 
        cart.classList.add('detalhes-segundaria');
        cart.appendChild(titulos);
        cart.appendChild(inputs);
        cart.appendChild(button_new_line)
        cart.appendChild(button_remove_cart)
        segundaria.appendChild(cart);
        limited_cart += 1
    }
})

var limited_lines = 0
button_add_line.addEventListener('click', (e) => {
    if(limited_lines >= 0 && limited_lines < 5){
        console.log(e)
        detalhes_inputs = document.querySelector('.detalhes-segundaria')
        
        inputs = document.createElement('div');
        inputs.classList.add('detalhes-inputs');    
        input_01 = document.createElement('input')
        input_01.setAttribute("placeholder", 'UNICO');
        input_02 = document.createElement('input')
        input_02.setAttribute("placeholder", 'R$');

        let button_remove_line = document.createElement('div')
        button_remove_line.setAttribute('class','btn-segundario remove_line teste')
        img_02 = document.createElement('img')
        img_02.setAttribute('src','/frontend/public/img/menos.png')
        button_remove_line.appendChild(img_02)

        button_remove_line.addEventListener('click',(e)=>{
            limited_lines
            if(limited_lines > 0){
                limited_lines -= 1 
            }
            pai = e.target.parentNode.parentNode
            e.target.parentNode.parentNode.remove()
            // button_remove_line.remove(pai)
            console.log('estou : ')
            console.log(limited_lines)
        })



        inputs.appendChild(input_01);
        inputs.appendChild(input_02);
        inputs.appendChild(button_remove_line);



        detalhes_inputs.appendChild(inputs)
        e.stopImmediatePropagation()
        limited_lines += 1;
        

    } 
    console.log(limited_lines)
})


// button_remove_line.addEventListener('click', (e) => {
//     e.stopImmediatePropagation()
//     ElementRemoved = cart.childNodes[3].lastChild
//     // console.log(cart.childNodes)

//     detalhes_inputs = document.querySelectorAll('.detalhes-inputs')
//     // console.log(e.target.parentNode.parentNode.remove())
//     // console.log(cart.removeChild(cart.childNodes[3].lastChild))
//     if(limited_lines > 0 && limited_lines < 5){
//         limited_lines -= 1 
//     }
//     console.log(limited_lines)
// })



    // < div class="detalhes-segundaria" >
    //                 <div class="detalhes-titles">
    //                     <p>TAMANHO DAS PIZZAS</p>
    //                     <p>VALOR</p>
    //                 </div>
    //                 <div class="detalhes-inputs" id="div-line">
    //                     <input type="text" name="tamanho-1" placeholder="UNICO" id="line-01">
    //                     <input type="text" name="tamanho-2" placeholder="R$" id="line-02">
    //                 </div>
    //                 <div onclick="add_line()" class="btn-segundario"><img src="/frontend/public/img/mais.png" alt=""></div>
    //                 <div onclick="remove_line()" class="btn-segundario"><img src="/frontend/public/img/menos.png" alt=""></div>
    //             </div>