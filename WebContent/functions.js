// Registrierung
function register() {
    var firstname = $("#firstname");
    var lastname = $("#secondname");
    var email = $("#email");
    var password = $("#password");
    var password_check = $("#password_check");
    var pass1 = document.getElementById("password");
    var pass2 = document.getElementById("password_check");
    // Alle Felder ausgefüllt?
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
                        if (response.status == "success") {
                            alert('Registrierung Erfolgreich!');
                            window.location.href = "index.php";
                        }
                        if (response.status == "mailexists") {
                            alert('E-Mail ist bereits vergeben!');
                        }
                    }
                });
            } else {
                password.css('border', '2px solid red');
                password_check.css('border', '2px solid red');
                alert('Passwörter stimmen nicht überein');
            }
        }
    }
}
//Passwort zurücksetzen
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
// Login
function login() {

    var email_log = $("#email_log").val();
    var password_log = $("#password_log").val();

    if (isNotEmptyLog($("#email_log")) && isNotEmptyLog($("password_log"))) {

        $.ajax({

            url: 'login.php',
            method: 'POST',
            dataType: 'json',
            data: {

                email_log: email_log,
                password_log: password_log
            }, success: function (response) {

                if (response.status == "success") 
                    window.location.href = "main.php";
                if (response.status == "wrongpassword")
                    alert('Falsches Passwort!')
                if (response.status == "wrongemail")
                    alert('E-Mail Adresse unbekannt')
            }
        });
    }
}
// Check: Mindestlänge Passwort
function isShort(caller) {
    if (caller.val().length <= 6) {
        caller.css('border', '2px solid red');
        alert('Paswort zu kurz! Muss mindestens 7 Zeichen beinhalten')
        return false;
    } else
        caller.css('border', '');
    return true;
}
// Check: Felder ausgefüllt, sonst hervorheben des Feldes
function isNotEmptyLog(caller) {
    if (caller.val() == "") {
        caller.css('border', '2px solid red');
        return false;
    } else
        caller.css('border', '');
    return true;
}

// Email senden
function sendEmail() {
    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var body = $("#body");
    // Alle Felder ausgefüllt?
    if (isNotEmptyLog(name) && isNotEmptyLog(email) && isNotEmptyLog(subject) && isNotEmptyLog(body)) {
        $.ajax({
            url: 'sendEmail.php',
            method: 'POST',
            dataType: 'json',
            data: {
                name: name.val(),
                email: email.val(),
                subject: subject.val(),
                body: body.val()
            }, success: function (response) {
                if (response.status == "success")
                    alert(response.response);
                else {
                    alert(response.response);
                }
            }
        });
    }
}



// Like Button
function like(num) {
    var id = "clicks-" + num;
    var counter = Number(document.getElementById(id).innerHTML);
    if (document.getElementById("plusfresh").onclick) {
        counter += 1;
        document.getElementById(id).innerHTML = counter;
    }
}
// Dislike Button
function dislike(num) {
    var id = "clicks-" + num;
    var counter = Number(document.getElementById(id).innerHTML);
    if (document.getElementById("plusfresh").onclick) {
        counter -= 1;
        document.getElementById(id).innerHTML = counter;
    }
}


// Login / Registration Switch
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

// Popup
var pop = {
    open : function (title, text) {
    // open() : open the popup
    // PARAM title : title of popup box
    //       text : text
  
      document.getElementById("pop-title").innerHTML = title;
      document.getElementById("pop-text").innerHTML = text;
      document.getElementById("pop-up").classList.add("open");
    },
  
    close : function () {
    // close() : close the popup
  
      document.getElementById("pop-up").classList.remove("open");
    }
};
