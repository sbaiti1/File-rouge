
var path = window.location.href;
let error = path.slice(path.indexOf('?'));

if (error == "?error=password"){
    let pswd = document.getElementById('pswd');
    pswd.style.outline = "red 2px solid";
    console.log(pswd.value.length);
    pswd.addEventListener('keydown',()=>{
        if(pswd.value.length >= 0){
            
            pswd.style.outline = "0";
        }else{
            pswd.style.outline = "red 2px solid";

        }
    })

}

