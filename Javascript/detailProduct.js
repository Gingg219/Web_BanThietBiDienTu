var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
        myIndex = 1
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 2 seconds
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    x[slideIndex - 1].style.display = "block";
}

const showTechnical = document.getElementById("showTechnical")
const modalHide = document.querySelector(".modal--hide");
const body = document.querySelector('body')
const endShow = document.querySelector(".modal-body__overlay")
const hideTechnicalInfo = document.getElementById("hideTechnicalInfo")
const headerHideTechInfo = document.getElementById("headerHideTechInfo")

if (showTechnical) {
    showTechnical.onclick = (e) => {
        e.preventDefault()
        if (modalHide) {
            modalHide.classList.toggle("toggleHideShow")
            body.style.overflow = "hidden"
        }
    }
}
if (hideTechnicalInfo) {
    hideTechnicalInfo.onclick = (e) => {
        e.preventDefault()
        if (modalHide) {
            modalHide.classList.toggle("toggleHideShow")
            body.style.overflow = "inherit"
        }
    }
}
if (headerHideTechInfo) {
    headerHideTechInfo.onclick = (e) => {
        e.preventDefault()
        if (modalHide) {
            modalHide.classList.toggle("toggleHideShow")
            body.style.overflow = "inherit"
        }
    }
}


function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("showMoreInfo");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Xem thêm";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Ẩn đi";
        moreText.style.display = "inline";
    }
}