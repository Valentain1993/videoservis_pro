document.querySelectorAll('.header_lk-button').forEach(function (element) {
    element.onclick = showModal;
});

function showModal() {
    let modalId = this.dataset.modal;
    document.querySelector(modalId).classList.remove('hide-wrap');
    event.stopPropagation();

    document.onkeydown = function (event) {
        //закрываем окно на кнопку Esc
        if (event.keyCode == 27) closeModal();
    }
}

// это закрытие всплывающего окна по нажатию

/*
document.querySelectorAll('.header_wrap-container').forEach(function (element) {
    element.onclick = closeModal;
})
*/

function closeModal() {
    document.querySelectorAll('.header_wrap-container').forEach(function (element) {
        element.classList.add('hide-wrap');
    });
    //document.onkeydown = null;
}



// это для логина

document.querySelector('#header_wrap-button').onclick = function (event) {
    event.preventDefault();
    let pass = document.querySelector('.header_wrap-pass').value;
    let email = document.querySelector('.header_wrap-log').value; // тут использ классы!

    let data = {
        "pass": pass,
        "email": email
    }

    ajax('core/login.php', 'POST', login, data);

    function login(result) {
        //console.log(result);
        if (result == 2) {
            alert('Заполните поля');
        }
        else if (result == 0) {
            alert('Пользователь не найден!');
        }
        else {
            console.log(result);
            result = JSON.parse(result);
            var d = new Date();
            d.setTime(d.getTime() + (30*60 * 1000));
            var expires = d.toUTCString();
            document.cookie = `email=${result.email}; expires=${expires}; path=/`;
            location.href = "cabinet.php";
        }
    }
}

// система комментариев

/*
document.querySelector('#button-comments').onclick = function(event) {
    event.preventDefault();
    let plaseComment = document.querySelector('.text-comments');
    let textComment = document.createElement('div');
    textComment.innerHTML = document.querySelector('.input-comments').value;
    plaseComment.appendChild(textComment);
}
*/

//console.log(document.querySelector('#button-comments'));

let hrefNew = document.querySelector('.main_nav-movie');
let hrefTV = document.querySelector('.main_nav-TVchannels');
let url = window.location.toString()



if (url = 'http://www.videoservis.ru/index.html') {
    hrefNew.style.color = '#333333';
    hrefTV.style.color = '#E5261E';
}

else {
    hrefTV.style.color = '#333333';
}



//if (url = 'http://www.videoservis.ru/TVchannels.html') {
    //hrefTV.style.color = '#333333';
//}

//console.log(window.location.toString());



