const goTop = document.querySelector('.scroll-to-top') ;

window.addEventListener('scroll',checkHight)
function checkHight()
{
    if (window.scrollY > 800) {
      goTop.style.display = 'block'; 
    } else {
      goTop.style.display = 'none'; 
    }
}

function scrollToTop() 
{
    window.scrollTo({ top: 0, behavior: 'smooth' });
}


