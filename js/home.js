! function(window) {

    class Slider {
        constructor(el, options = {}) {
            this.sliderWrap = document.querySelector(el)
            this.index = 0
            this.init_data()
        }
        static set_position(obj, dis) { //更改位置
            obj.style.webkitTransform = `translateX(${dis}px)` //兼容
            obj.style.transform = `translateX(${dis}px)`
        }
        init_data() {
            this.get_element()
            this.touch_event()
                // this.transition_end()

        }
        get_element() {

            this.sliderContent = this.sliderWrap.querySelector('main')

            // this.sliderContent.innerHTML += this.sliderContent.innerHTML
            // this.sliderContent.innerHTML += this.sliderContent.innerHTML
            // this.sliderContent.innerHTML += this.sliderContent.innerHTML
            // this.sliderContent.innerHTML += this.sliderContent.innerHTML
            // this.sliderContent.innerHTML += this.sliderContent.innerHTML
            // this.sliderContent.innerHTML += this.sliderContent.innerHTML

            this.length = this.sliderContent.childElementCount
                // this.sliderContent.style.width = `300%`
            this.iWidth = document.querySelector('.subpage').offsetWidth
        }

        // transition_end() { 
        //     this.sliderContent.addEventListener("webkitTransitionEnd", f => { 
        //         if (this.index >= this.length / 3 * 2 || this.index / 3) {
        //             this.sliderContent.style.transition = "none"
        //             this.index = this.index % (this.length / 8) + this.length / 2;
        //             Slider.set_position(this.sliderContent, -this.index * this.iWidth)
        //         }
        //         console.log('end ' + this.index)

        //     }, false)
        // }
        touch_event() {
            let isMove = true,
                isFirst = true,
                touchStart, touchMove, touchEnd, iStartPageX, iStartPageY
            touchStart = e => {
                //  e.preventDefault()
                e.stopPropagation()
                isMove = true
                isFirst = true
                iStartPageX = e.changedTouches[0].pageX
                iStartPageY = e.changedTouches[0].pageY
            }

            // if (isMove) {
            //     (this.index === 0) && (this.index = this.length / 2);
            //     this.sliderContent.style.transition = 'none';
            //     Slider.set_position(this.sliderContent, -this.index * this.iWidth + iDisX)
            // }

            // }
            touchEnd = e => {

                // if(sliderContent.style.transform)
                this.sliderContent.style.transition = '.5s';
                let iDisX = e.changedTouches[0].pageX - iStartPageX
                this.index = this.index - Math.round(iDisX / this.iWidth) //判斷滑動距離 增加減少index
                if (this.index > 3) {
                    this.index = 3
                }
                if (this.index < 0) {
                    this.index = 0
                }
                Slider.set_position(this.sliderContent, -this.index * this.iWidth)
            }
            this.sliderContent.addEventListener("touchstart", touchStart, false)
            this.sliderContent.addEventListener("touchmove", touchMove, false)
            this.sliderContent.addEventListener("touchend", touchEnd, false)
        }
    }
    window.Slider = Slider
}(window)