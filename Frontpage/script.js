let slideindex = 1;
        showSlides(slideindex);
        function currentSlide(n) {
            showSlides(slideindex = n);
        }
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlide");
            let dots = document.getElementsByClassName("dot");
            
            if (slideindex < 1) { slideindex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideindex++;
            if (slideindex > slides.length) {slideindex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideindex - 1].style.display = "block";
            dots[slideindex - 1].className += " active";
            setTimeout(showSlides, 2000);
        }
    function ScrollDown(){  
        const scrollupbtn= document.querySelector('.page-scroll-arrow.up');
        document.getElementById('scrollto').scrollIntoView({
            behavior:"smooth"
        });
        document.querySelector('.page-scroll-arrow').style.display = "none";
        scrollupbtn.style.display ="flex";
        scrollupbtn.style.transform = "scaleY(-1)";
        document.querySelector('.faded-footer').style.display = 'none';
        Registermodify();
        openRegister();

    }
    function ScrollUp(){
        const NavBar= document.querySelector('.nav');
        const fade = document.querySelector('.faded-footer');
        const scrollupbtn= document.querySelector('.page-scroll-arrow.up');
        const scrolldownbtn = document.querySelector('.page-scroll-arrow');
        scrolldownbtn.style.display = "flex";
        scrollupbtn.style.display ="none";
        fade.style.display = 'initial';
        NavBar.scrollIntoView({
            behavior:"smooth"
        });
        closeRegister();
        RegisterUnmodify();
    }
    function closelogin(){
        document.querySelector('.login-page').style.display='none';
    }
    function openlogin(){
        document.querySelector('.login-page').style.display='flex';
    }
    function closeRegister(){
        document.querySelector('.register-page').style.display='none';
    }
    function openRegister(){
        document.querySelector('.register-page').style.display='flex';
    }
    function Registermodify(){
        
        document.querySelector('.register-page').style.position="absolute";
        document.querySelector('.register-page').style.left="50%";
        document.querySelector('.register-page').style.top="180%";
        document.querySelector('.register-form .closebtn').style.display="none";
    }
    function RegisterUnmodify(){
        
        document.querySelector('.register-page').style.position="relative";
        document.querySelector('.register-page').style.left=null;
        document.querySelector('.register-page').style.top=null;
        document.querySelector('.register-form .closebtn').style.display="inherit";
    }

        
        