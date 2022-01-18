/* Mains Slider*/
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
let index = 0;


function prevSlide(n) {
    index += n;
    changeSlide();
}

function nextSlide(n) {
    index += n;
    changeSlide();

}

changeSlide()

function changeSlide() {
    if (index > slides.length - 1)
        index = 0;
    if (index < 0)
        index = slides.length - 1;

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].classList.remove("active1");
    }
    slides[index].style.display = "block";
    dots[index].classList.add("active1");
}


/*slider2--books*/
