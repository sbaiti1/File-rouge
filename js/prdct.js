
const add = document.getElementById('add');
const heart = document.getElementById('heart');

add.addEventListener('click',()=>{
    add.classList.toggle('added');
    add.classList.toggle('add');
    if(add.className == "add"){
        add.innerHTML = `${add.className} to cart`; 
    }else{
        add.innerHTML = `${add.className} to cart`; 
    }
})

heart.addEventListener('click',()=>{
    


    
    
    if (heart.className == "bi bi-suit-heart")
    {
        heart.className = "bi bi-suit-heart-fill";
        heart.style.color = "red";
        console.log(heart.className);

    }   
    
    else if ( heart.className== "bi bi-suit-heart-fill") {
        
        heart.className = "bi bi-suit-heart";
        heart.style.color = "black";
        console.log(heart.className);

    }


    
 })