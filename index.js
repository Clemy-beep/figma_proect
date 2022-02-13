function showLogin(e) {
    e.preventDefault();
    $('#registerForm').animate({
        opacity: 0,
    }, {
        duration: 500,
        complete: function() {
            $("#registerForm").css("display", "none");
            $("#loginForm").css("display", "flex");
            $("#loginForm").css("opacity", "1");
        }
    });
}

function showRegister(e) {
    e.preventDefault();
    $("#loginForm").animate({
        opacity: 0,
    }, {
        duration: 500,
        complete: function() {
            $("#loginForm").css("display", "none");
            $("#registerForm").css("display", "flex");
            $("#registerForm").css("opacity", "1");
        }
    });
}

function goHome(e) {
    e.preventDefault();
    console.log("vouh");
    window.location.href = "http://forum.co/views/home.php";
}
