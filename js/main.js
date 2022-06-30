/*===== LOGIN =====*/
const signUp = document.getElementById('sign-up'),
    signIn = document.getElementById('sign-in'),
    loginIn = document.getElementById('login-in'),
    loginUp = document.getElementById('login-up')


signUp.addEventListener('click', ()=>{
    loginIn.classList.remove('block')
    loginUp.classList.remove('none')
    loginIn.classList.toggle('none')
    loginUp.classList.toggle('block')
})

signIn.addEventListener('click', ()=>{

    loginIn.classList.remove('none')
    loginUp.classList.remove('block')
    loginIn.classList.toggle('block')
    loginUp.classList.toggle('none')
})



/*=============== Lien ===============*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active-link'))
    this.classList.add('active-link')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))

/*=============== rotation navbar===============*/
const showMenu = (toggleId, navbarId) =>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId)

    if(toggle && navbar){
        toggle.addEventListener('click', ()=>{
            navbar.classList.toggle('show-menu')
            toggle.classList.toggle('rotate-icon')
        })
    }
}
showMenu('nav-toggle','nav')

