// const listyear = ["deg0", "deg36", "deg72", "deg108", "deg144", "deg180", "deg216", "deg252", "deg288", "deg324"];
const listyear = ["deg108", "deg144", "deg180", "deg216", "deg252", "deg288", "deg324"];

const slides = document.getElementsByClassName('datajourney');
const tablist = document.getElementsByClassName('menu-item');
function changeposition(id) {
    for (let slide of slides) {
        slide.classList.remove('activejourney');
    }
    slides[id - 1].classList.add('activejourney');
    let datalama;
    for (let tab of tablist) {
        if (tab.classList.contains('activetab')) {
            datalama = tab.id;
        }
        tab.classList.remove('activetab');
    }
    // console.log(datalama);
    // console.log(id);
    for (var i = 0; i < tablist.length; i++) {
        var position = listyear.indexOf(tablist[i].classList[1]);
        // console.log(position)
        // tablist[i].classList.remove('deg0');
        // tablist[i].classList.remove('deg36');
        // tablist[i].classList.remove('deg72');
        tablist[i].classList.remove('deg108');
        tablist[i].classList.remove('deg144');
        tablist[i].classList.remove('deg180');
        tablist[i].classList.remove('deg216');
        tablist[i].classList.remove('deg252');
        tablist[i].classList.remove('deg288');
        tablist[i].classList.remove('deg324');
        let perubahan;
        if (datalama > id) {
            perubahan = datalama - id;
        }
        else {
            perubahan = datalama - id;
        }
        perubahan = position + perubahan;
        if (perubahan < 0) {
            perubahan = 7 + perubahan;
        }
        // console.log(perubahan);
        tablist[i].classList.add(listyear[(perubahan) % 7])
    }
    tablist[id - 1].classList.add('activetab');
}
var y = setInterval(function () {
    var datalama;
    for (let tab of tablist) {
        if (tab.classList.contains('activetab')) {
            datalama = tab.id;
            break;
        }
    }
    if (datalama <= 1) {
        datalama = 8;
    }
    changeposition((datalama - 1));
}, 10000);
// Time For Techno Event
const timetechnotext = document.getElementById("timetechno")
var datetechnoevent = new Date("Sep 18, 2021 15:37:25").getTime();

//Time For Hishot Event
const timehishottext = document.getElementById("timehishot")
var datehishotevent = new Date("Sep 18, 2021 15:37:25").getTime();

//Time For ... Event
const timeannivtext = document.getElementById("timetechno")
var dateannivevent = new Date("Aug 1, 2021 15:37:25").getTime();

//Time For ... Event
const timebalontext = document.getElementById("timetechno")
var datebalonevent = new Date("Aug 1, 2021 15:37:25").getTime();

var x = setInterval(function () {
    var now = new Date().getTime();
    // Techno
    var distance = datetechnoevent - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    timetechnotext.innerHTML = days + "D " + hours + "H "
        + minutes + "M " + seconds + "S ";
    if (distance < 0) {
        clearInterval(x);
        timetechnotext.innerHTML = "Now";
    }
    // HISHOT
    distance = datehishotevent - now;
    days = Math.floor(distance / (1000 * 60 * 60 * 24));
    hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    seconds = Math.floor((distance % (1000 * 60)) / 1000);
    timehishot.innerHTML = days + "D " + hours + "H "
        + minutes + "M " + seconds + "S ";
    if (distance < 0) {
        clearInterval(x);
        timehishot.innerHTML = "Now";
    }
}, 1000);