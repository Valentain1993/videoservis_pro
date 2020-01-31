// это скрипт для всплывающего окна для Однажды в Голливуде

let blockWrap = document.querySelector('.new_golliwud-info');
let blockImg = document.querySelector('.new_golliwud-img');

blockImg.onmouseover = function() {
    blockWrap.classList.remove('hide-wrap');
}

blockImg.onmouseout= function() {
    blockWrap.classList.add('hide-wrap');
}
