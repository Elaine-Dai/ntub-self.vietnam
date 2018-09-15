{
    //nav
    const nav = document.querySelector('.nav')
    const navExpand = document.querySelector('.nav__button_expand')
    const navClose = document.querySelector('.nav__button_close')


    navExpand.addEventListener('click', function(e) {
        e.target.style.display = 'none'
        nav.style.left = '0'
    })
    navClose.addEventListener('click', function(e) {
        navExpand.style.display = 'unset'
        nav.style.left = ''
    })

    //login
    const member = document.querySelector('.member')
    const memberActive = document.querySelector('.account')
    const memberForm = document.querySelector('.member form')
    const memberOption = document.querySelectorAll('.login__options div')
    const loginMail = document.querySelector('.login__mail')
    const submit = document.querySelector('.login__btn')
    memberOption[0].addEventListener('click', function() {
        memberOption[0].classList.add('isPress')
        memberOption[1].classList.remove('isPress')
        loginMail.style.display = ''
        submit.value = '登入'
    })
    memberOption[1].addEventListener('click', function() {
        memberOption[0].classList.remove('isPress')
        memberOption[1].classList.add('isPress')
        loginMail.style.display = 'unset'
        submit.value = '註冊'
    })
    memberForm.addEventListener('click', function(e) {
        e.stopPropagation()
    })
    memberActive.addEventListener('click', function() {
        member.style.display = 'flex'
    })
    member.addEventListener('click', function() {
        member.style.display = 'none'
    })
}