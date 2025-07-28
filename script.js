
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}
ScrollReveal({ 
    reset: true,
    distance: '60px',
    duration: 2500,
    delay: 400 
});
ScrollReveal().reveal('.content', { delay: 300, origin: 'left'});
ScrollReveal().reveal('.section-p1', { delay: 700, origin: 'up'});
ScrollReveal().reveal('.title', { delay: 300, origin: 'left'});
ScrollReveal().reveal('.About', { delay: 300, origin: 'left'});
ScrollReveal().reveal('.pictures', { delay: 300, origin: 'left'});
ScrollReveal().reveal('.blogg-header', { delay: 300, origin: 'left'});  
ScrollReveal().reveal('.shop-header', { delay: 300, origin: 'left'}); 
ScrollReveal().reveal('.aboutt-header', { delay: 300, origin: 'left'}); 

var addItemId = 0;
function addToCart(item){

    addItemId += 1;
    var selectedItem = document.createElement ('div');
    selectedItem.classList.add('cartImg');
    selectedItem.setAttribute('cart' ,addItemId);
    var img =document.createElement('img');
    img.setAttribute('src',item.children[0],currentSrc);
    var cartItems = document.getlementByid('des');
    selectedItem.append(img);
    cartItems.append(selectedItem);
   
}

