function register() {

    var firstname = $("#firstname");
    var lastname = $("#secondname");
    var email = $("#email");
    var password = $("#password");
    var password_check = $("#password_check");
    var pass1 = document.getElementById("password");
    var pass2 = document.getElementById("password_check");


    if (isNotEmptyLog(firstname) && isNotEmptyLog(lastname) && isNotEmptyLog(email) && isNotEmptyLog(password) && isNotEmptyLog(password_check)) {

        if (isShort(password)) {

            if (pass1.value == pass2.value) {


                $.ajax({

                    url: 'register.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {

                        email: email.val(),
                        password: password.val(),
                        firstname: firstname.val(),
                        lastname: lastname.val()

                    }, success:function (response) {

                        if (response.status == "success")
                            alert('Registrierung Erfolgreich!')
                        window.location.href = "index.php";
                        if (response.status == "mailexists")
                        alert('E-Mail ist bereits vergeben!')
                    }
                });
            } else {
                password.css('border', '2px solid red');
                password_check.css('border', '2px solid red')
                alert('Passwörter stimmen nicht überein')
            }
        }
    }
}


function pwsetback() {
    var email = $("#email");
    var password = $("#password");
    var password_check = $("#password_check");
    var pass1 = document.getElementById("password");
    var pass2 = document.getElementById("password_check");

    if (isNotEmptyLog(email) && isNotEmptyLog(password) && isNotEmptyLog(password_check)) {

        if (isShort(password)) {

            if (pass1.value == pass2.value) {


                $.ajax({

                    url: 'pwforgot.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {

                          password: password.val(),
                          email: email.val(),

                    }, success: function (response) {

                        if (response.status == "success") {
                            alert('Passwortänderung Erfolgreich!')
                            window.location.href = "index.php";
                        }

                        if (response.status == "wrongemail") {

                            alert('E-Mail Adresse unbekannt')
                        }
                    }
                });
            } else {
                password.css('border', '2px solid red');
                password_check.css('border', '2px solid red')
                alert('Passwörter stimmen nicht überein')
            }
        }
    }
}





function login() {

    var email_log = $("#email_log");
    var password_log = $("#password_log");

    if (isNotEmptyLog(email_log) && isNotEmptyLog(password_log)) {

        $.ajax({

            url: 'login.php',
            method: 'POST',
            dataType: 'json',
            data: {

                email_log: email_log.val(),
                password_log: password_log.val()
            }, success: function (response) {

                if (response.status == "success")
                    alert('Login Erfolgreich!')
                window.location.href = "main.php";
                if (response.status == "wrongpassword")
                    alert('Falsches Passwort!')
                if (response.status == "wrongemail")
                    alert('E-Mail Adresse unbekannt')
            }
        });
    }
}



function isShort(caller) {
    if (caller.val().length <= 6) {
        caller.css('border', '2px solid red');
        alert('Paswort zu kurz! Muss mindestens 7 Zeichen beinhalten')
        return false;
    } else
        caller.css('border', '');
    return true;
}

function isNotEmptyLog(caller) {

    if (caller.val() == "") {

        caller.css('border', '2px solid red');
        return false;
    } else
        caller.css('border', '');

    return true;
}

function like(num) {
    var id = "clicks-" + num;
    var counter = Number(document.getElementById(id).innerHTML);
    if (document.getElementById("plusfresh").onclick) {
        counter += 1;
        document.getElementById(id).innerHTML = counter;
    }
}

function dislike(num) {
    var id = "clicks-" + num;
    var counter = Number(document.getElementById(id).innerHTML);
    if (document.getElementById("plusfresh").onclick) {
        counter -= 1;
        document.getElementById(id).innerHTML = counter;
    }
}
