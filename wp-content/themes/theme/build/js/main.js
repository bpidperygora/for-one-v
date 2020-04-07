"use strict";

var hasSub = document.querySelector('li.menu-item-has-children');
var subSpan = document.createElement('span');
subSpan.classList.add('submenu-button');
hasSub.appendChild(subSpan);
document.querySelector('#cssmenu').addEventListener('click', function (event) {
  if (event.target.getAttribute('id') === 'menu-button') {
    var mainmenu = document.querySelector('.parent_ul');

    if (mainmenu.classList.contains('open')) {
      mainmenu.style.display = 'none';
      mainmenu.classList.remove('open');
    } else {
      mainmenu.style.display = 'block';
      mainmenu.classList.add('open');
    }
  }

  if (event.target.className === 'submenu-button') {
    if (hasSub.querySelector('.sub-menu').classList.contains('open')) {
      hasSub.querySelector('.sub-menu').style.display = 'none';
      hasSub.querySelector('.sub-menu').classList.remove('open');
    } else {
      hasSub.querySelector('.sub-menu').style.display = 'block';
      hasSub.querySelector('.sub-menu').classList.add('open');
    }
  }
});
var massorny = document.querySelector('.masonry');

function getRandomHeight() {
  var min = Math.ceil(80);
  var max = Math.floor(120);
  return 100 + Math.floor(Math.random() * (max - min + 1)) + min;
}

if (massorny) {
  var img = document.querySelectorAll('.item_thumbnail img');

  for (var i = 0; i < img.length; i++) {
    img[i].style = 'max-height:' + getRandomHeight() + 'px';
  }
}