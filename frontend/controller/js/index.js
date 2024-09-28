const selector =  (selector) => document.querySelectorAll(selector);
const log = (log) => console.log(log);

document.addEventListener("submit",(e)=>{
    e.preventDefault();
    let dates = Array();
    // log(e)
    return;
    const arr = [];
    const dates_site = e.srcElement.elements;
    for (let index = 0; index < dates_site.length; index++) {
        if(index == dates_site.length - 1) break;
        arr.push(dates_site[index])
    }
    
    arr.forEach((e)=>{
        values = Object();
        detalhes = []
        id = e.id;
        campo = e.name;
        valor = e.value;
        values["detalhes"] = detalhes;
        // log(id)
        // log(campo)
        // log(valor)
        // log(value)
        // if(!label){
            
        // }
        if(campo == "sub_categoria"){
            '';
        }

        if(campo == "tamanho"){
            obj_detalhes = Object();
            obj_detalhes[campo] = valor;
        }
        if(campo == "valor"){
            obj_detalhes[campo] = valor;
            // log(obj_detalhes)
            values["detalhes"].push(obj_detalhes);
            values["id"] = id;
            values[campo] = valor;
            values["detalhes"] = detalhes;
        }

    })
    dates.push(values);
    log(dates)
    // const menu = document.querySelectorAll(".menu-categorias");
    // menu.forEach((element,i) => {
    //     values = Object();
    //     selector("input").forEach((e,i) =>{
    //         let cart = e.parentNode.parentNode.parentNode.id;
    //         if(cart){
    //             // log(cart)
    //         }
    //         label = e.attributes.label ?? null;
    //         detalhes = []
    //         id = element.id;
    //         campo = e.name;
    //         valor = e.value;
    //         if(!label){
    //             values["id"] = id;
    //             values[campo] = valor;
    //             values["detalhes"] = detalhes;
    //         }
    //         else if(label.value == "tamanho_valor") {
    //             if(campo == "tamanho"){
    //                 obj_detalhes = Object();
    //                 obj_detalhes[campo] = valor;
    //             }
    //             if(campo == "valor"){
    //                 obj_detalhes[campo] = valor;
    //                 values["detalhes"].push(obj_detalhes);
    //             }
    //         }
    //     })    
    //     dates.push(values);
    // });
    // log(JSON.stringify(dates));
})