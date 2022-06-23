
var path = window.location.pathname;
var page = path. split("/"). pop();
console.log(page);

let list_prdct;
let id;

//img= e.target.src.split("/"). pop()

//get data from local storage

let data = localStorage.getItem('cart');
list_prdct = JSON.parse(data);


 if(page == 'cart.html'){
    const list = document.getElementById('list');
    //create an object => product
    function add_prdct(prdct,price,img,id,trash){
        if(trash){
            return;
        }

    const text =
     `<li class="d-flex align-items-center justify-content-center mt-5" id="${id}">
    <div >
    <img src="../public/imgs/${img}" height="100px" alt="">
    </div>
    <p class="text-center mx-3 py-4">${prdct}</p>
    <p class="mx-5 ">prix: ${price}$</p>
    <div id="trash"><i class="bi bi-trash"></i></div> 
    </li>`;

const position = 'beforeend';
list.insertAdjacentHTML(position,text);


}

//remove an item from cart

//load data from local storage
    function loaddata(array){
        array.forEach(element => {
            add_prdct(element.name,element.price,element.img,element.id,element.trash);
        });
    }




//clear local storage
    function clear(){
        localStorage.clear();
        location.reload();
    }


let btn = document.getElementById('clear');
let t =  document.getElementById('total');
//display data in page

function total(){
    let total = 0;
    list_prdct.forEach(element => {
        if(!element.trash)
        total += element.price;
        
    });
     return total

    }


    if(data){
        loaddata(list_prdct );
        
        //calculate the total

        
        let d_total = document.getElementById('total');
        d_total.innerText = total() ;


         //display the total
         /*let d_total = document.getElementById('total');
         d_total.innerText = total() ;*/
        btn.style.display = 'block';
        btn.addEventListener('click',()=>{
            clear();
        })
    }else{
        btn.style.display = 'none';
    }

 //delete a product
function removePrdct(elmnt){
    let del = elmnt.target.parentNode.parentNode;
    //list_prdct[elmnt.parentNode.id].trash = true ;
    list_prdct[del.id].trash = true ;
    console.log(list_prdct[del.id].trash);
    del.remove();
    

}
    
    document.addEventListener('click',(e)=>{
        if(e.target.className == 'bi bi-trash'){
            let del = e.target.parentNode.parentNode;
            console.log(del.id);
            removePrdct(e);

            localStorage.setItem("cart",JSON.stringify(list_prdct));
            let d_total = document.getElementById('total');
            d_total.innerText = total() ;

        

        }

    })

    

    
}

//code for huiles page

else if (page == 'huiles.html') {
    /*function somme(price){
         total = total + price;
         return total;
    }*/
    if(!data){
        list_prdct = [];
        id = 0;
        //total = 0 ;
    }else if(data){
        list_prdct = JSON.parse(data);
        id = list_prdct.length;
        console.log(id);

    }
    
    document.addEventListener('click',(e)=>{
        
        if (e.target.className == 'bi bi-cart-plus'){
            let elmnt = e.target.parentNode.parentNode;
            let img = elmnt.getElementsByTagName('img')[0].src.split("/").pop();
            let prdct = elmnt.getElementsByTagName('h5')[0].innerText;
            let price = parseInt( elmnt.getElementsByTagName('h5')[1].innerText.slice(0, -1));
            console.log(img);
            list_prdct.push({
            name : prdct,
            img : img,
            price : price,
            id:id,
            trash:false
        })
        id++;
        console.log(id);
        console.log(price);
        
        console.log(total);
        console.log(list_prdct);
        
        localStorage.setItem("cart",JSON.stringify(list_prdct));
    }
    });
    
    
}


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     


 
