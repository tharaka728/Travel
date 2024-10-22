let menu=document.querySelector("#menu-btn");
let navbar=document.querySelector(".header .navbar");

menu.onclick = ()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.scroll = ()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween:20,
    autoHeight:true,
    grabCursor:true,
   breakpoints: {
        640: {
          slidesPerView: 1,
         
        },
        768: {
          slidesPerView: 2,
          
        },
        1024: {
          slidesPerView: 3,
          
        },
      },
  });

  let loadMoreBtn=document.querySelector('.packages .load-more .btn');
  let currenItem = 3;

  loadMoreBtn.onclick = ()  =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var i=currenItem; i < currenItem + 3; i++){
      boxes[i].style.display='inline-block';

    };
    currenItem += 3;
    if(currenItem >= boxes.length){
      loadMoreBtn.style.display='none';
    }
  }