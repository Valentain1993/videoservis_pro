document.querySelector('#header_lk-exit').onclick = function() {
    let c = document.cookie;
    let d = new Date();
    d.setTime(d.getTime()-(30*1000));
    let expires = d.toUTCString();
    document.cookie = `email=${c}; expires=${expires}; path=/`;
    location.reload();
}
