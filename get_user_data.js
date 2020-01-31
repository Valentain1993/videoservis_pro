let userEmail = getCookie('email');
console.log(userEmail);
ajax('core/get_user_data.php', 'POST', getUserData, { "email": userEmail });

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function getUserData(result) {
    result = JSON.parse(result);
    console.log(result);
    document.querySelector('#header_lk-name').value = result.name;
    document.querySelector('#header_lk-pass').value = result.password;
}


// header_lk-name mouseout

document.querySelector('#header_lk-name').onblur = function (event) {
    event.preventDefault();
    let updateData = {
        "email": userEmail,
        "name": document.querySelector('#header_lk-name').value,
        "pass": document.querySelector('#header_lk-pass').value,
        "comment": document.querySelector('#input-comments').value,
    };
    ajax('core/update_user_data.php', 'POST', updateUserData, updateData);
}



/*
function updateUserData(result) {
    console.log(result);
    if (result == 1) {
        alert('Данные успешно обновлены!');
    }
    else {
        alert('ошибка обновления');
    }
}
*/