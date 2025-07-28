let videoBtn=document.querySelectorAll('.vid-btn')
.videoBtn.forEach(btn=>
    {
btn.addEventListener('click',()=>
        {
$('.controls.active').classList.remove('active')
            btn.classList.add('active')
        })
    });

    var swiper= new Swiper(".reviews-slider",{

        loop:true,
        spaceBetween:20,
        autoplay:
            {
                delay:7500,
                disableOnInteraction:false,
            },
        breakpoints:{
            0: {
                slidesPerView :1,
            },
            780: {
                slidesPerView :2,
            },
            1020: {
                slidesPerView :3,
            },
    
        },
    });
    