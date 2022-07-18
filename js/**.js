
var img;
var prdct;
var price;


document.addEventListener('click',(e)=>{
    if (e.target.className == 'btn btn-primary mr-5') {
         elmnt = e.target.parentNode.parentNode;
         img = elmnt.getElementsByTagName('img')[0].src.split("/").pop();
         prdct = elmnt.getElementsByTagName('h5')[0].innerText;
         price = parseInt( elmnt.getElementsByTagName('h5')[1].innerText.slice(0, -1));
        
         console.log(img);
        sessionStorage.setItem('img', img);
        sessionStorage.setItem('prdct', prdct);
        sessionStorage.setItem('price', price);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    let host = window.location.host
    window.location.replace(`http://${host}/product.php`);

}})


 var path = window.location.pathname;
 var page = path. split("/"). pop();

 if (page == 'product.php') {
     console.log('worked');
   let pic =  document.getElementById('pic');
   let title =  document.getElementById('title');
    let prix =  document.getElementById('price');

    title.innerHTML =  sessionStorage.getItem('prdct');
    prix.innerHTML =  sessionStorage.getItem('price') +" "  + "MAD";
    pic.innerHTML = `<img src="imgs/${ sessionStorage.getItem('img')}" height="450px" alt="">`;
}