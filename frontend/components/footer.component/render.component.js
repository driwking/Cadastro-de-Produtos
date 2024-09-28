const selector =  (selector) => document.querySelectorAll(selector);
const log = (log) => console.log(log);

document.addEventListener("submit",async (e)=>{
    e.preventDefault();
    let dates = Array();
    let form = new FormData(e.target);
    let data = new URLSearchParams(form);

    const res = await fetch("https://temp.driw.space/email.php", {
        method: "POST",
        body: form
    }).then(j => console.log(j.json));
    // await console.log(res.json())
})