const input_img = document.getElementById('img');
const label = document.getElementsByClassName('label-input');
const lb = document.getElementById('lb-input');

addEventListener('change',function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];
    
    if(file){
        const reader = new FileReader();
        reader.addEventListener('load',function(e){
            const readerTarget = e.target;
            const img = document.createElement("img");
            img.src = readerTarget.result;
            img.classList.add("img");
            label[0].innerHTML = '';
            label[0].appendChild(document.createElement("button")).innerHTML = "x";
            label[0].appendChild(img);
            lb.style.border = 'none'
            
            

        });
        reader.readAsDataURL(file);
    }
});
