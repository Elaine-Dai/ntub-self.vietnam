{
    //收藏
    const collect = document.querySelectorAll('.collect')
    collect.forEach(e => {
        e.addEventListener('click', function() {
            event.preventDefault();
            this.classList.toggle('fas')
            this.style.color = "#DA4453"
        })
    })

}