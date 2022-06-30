/*=============== Ouvrir pop up===============*/
const showPop = (openButton, popContent) =>{
    const openBtn = document.getElementById(openButton),
    popContainer = document.getElementById(popContent)
    
    if(openBtn && popContainer){
        openBtn.addEventListener('click', ()=>{
            popContainer.classList.add('show-pop')
        })
    }
}
showPop('open-pop','pop-container')

/*=============== Fermer le pop up ===============*/
const closeBtn = document.querySelectorAll('.close-pop')

function closePop(){
    const popContainer = document.getElementById('pop-container')
    popContainer.classList.remove('show-pop')
}
closeBtn.forEach(c => c.addEventListener('click', closePop))