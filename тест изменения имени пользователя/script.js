let Name = document.querySelector('.name');
let input = document.querySelector('.input');

Name.onclick = function () {
    Name.classList.add('hide');
    input.classList.remove('hide');
}

let btn = document.querySelector('.save');
let inputValue = document.querySelector('.input').value;

localStorage.setItem('name', inputValue);

let SaveName = localStorage.getItem(inputValue);
localStorage.setItem('name', SaveName);


btn.onclick = function() {
    //localStorage.getItem('name');
    //Name.innerHTML = SaveName;
    console.log(SaveName);
    //Name.classList.remove('hide');
    //input.classList.add('hide');
}

//--------------------------------------------------------------------------------

//function chips() {
    //let wrap = document.createElement('div');
    //wrap.classList.add('chips-style');
//}

let chipsBtn = document.querySelector('.chips-btn');

chipsBtn.onclick = function() {
    let wrap = document.createElement('div');
    console.log(wrap);
    wrap.classList.add('chips-style');
    //wrap.innerHTML = 'Аллоххха';
    document.querySelector('body').appendChild(wrap);
}



