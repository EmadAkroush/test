/*function myfuntiona(a) {
    /*document.getElementsByClassName("div-hover-boxes")[a].style.display = "block";
    document.getElementsByClassName("boxes-text")[a].style.display = "none";
    document.getElementsByClassName("img-box")[a].style.width = "250px";
    document.getElementsByClassName("img-box")[a].style.height = "250px";*/
    
    /*document.getElementsByClassName("img-box")[a].setAttribute('onclick', 'myfuntionb(a);');
    document.getElementsByClassName("div-hover-boxes")[a].classList.toggle("dhba");
    document.getElementsByClassName("boxes-text")[a].classList.toggle("bt");
    document.getElementsByClassName("img-box")[a].classList.toggle("ib");
    
}; */



function myfuntionb(a) {
    document.getElementsByClassName("div-hover-boxes")[a].style.display = "none";
    document.getElementsByClassName("boxes-text")[a].style.display = "block";
    document.getElementsByClassName("img-box")[a].style.width = "200px";
    document.getElementsByClassName("img-box")[a].style.height = "200px";
    
    document.getElementsByClassName("img-box")[a].setAttribute('onclick',  'myfuntiona(a);');
}; 




function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}



var acc = document.getElementsByClassName("accordion-qu");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active-qu");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}





if ($(window).width() < 600) {
    document.getElementById("main-content").classList.add("container");

} else {
document.getElementById("main-content").classList.add("third-class");
};

//function jakob(){};
function scrollup() {
    window.scrollTo(0, 0);

};


function scrollupamozesh() {
    window.scroll({
        top: 800,
        left: 0,
        behavior: 'smooth'
    });

};
