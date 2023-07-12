const input_img = document.getElementsByClassName('input-file-custom');
const label = document.getElementsByClassName('arquivo');
const imga = document.getElementsByClassName('image');


addEventListener('change',function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];
    
    if(file){
        const reader = new FileReader();
        reader.addEventListener('load',function(e){
            const readerTarget = e.target;
            const img = document.createElement("img");
            img.src = readerTarget.result;
            img.classList.add("foto_img");
            label[0].innerHTML = '';
            label[0].appendChild(img);
            label[0].removeChild(span);

        });
        reader.readAsDataURL(file);
    }
});


