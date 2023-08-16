let navbar = document.querySelector("#navbar");
let links = document.querySelectorAll(".nav-link")
let h1 = document.querySelector("#titolo")
// console.log(window)


window.addEventListener('scroll', ()=>{
    console.log(window.scrollY)
    let scrolled = window.scrollY;


 if(scrolled > 100){
        navbar.classList.add('navbar-blur' ,'bg-1')
        h1.classList.add('tit')
        links.forEach((link) => {
            link.style.color = "red";
            link.addEventListener('mouseenter', ()=>{
                link.style.color = 'white'
                link.style.borderBottom = '2px solid black'
            })
            link.addEventListener('mouseleave', ()=>{
                link.style.color = 'red';
                link.style.borderBottom = "none";
            })

            });
    }
    else{
        navbar.classList.remove('navbar-blur' ,'bg-1')
        h1.classList.remove('tit')
        links.forEach((link) => {
            link.style.color = "white"; 
            
            link.addEventListener('mouseenter', ()=>{
                link.style.color = 'black'
                link.style.borderBottom = '2px solid white'
            })
            link.addEventListener('mouseleave', ()=>{
                link.style.color = 'white';
                link.style.borderBottom = "none";
            })
            });
            
    }


});

