
var title = document.querySelector('.title_item_1 ');
var img = document.querySelector('.bander_show_img');

var titles = [
    'Chef Antons Cajun Seasoning',
    'Aniseed Syrup 2018',
    'Change',
    'Aniseed Syrup',


]
var imgs = [
    './img/banner1.jpg',
    './img/banner2.jpg',
    './img/banner3.jpg',
    './img/banner4.jpg',
]
var index = 0;
function next() {
    index++;
    if (index >= 4) {
        index = 0;
    }
    title.innerHTML = titles[index];
    img.src = imgs[index];
}
var loop = setInterval(next, 2000);