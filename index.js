function showLogin() {
    $("#registerbutton").click(function(e) {
        e.preventDefault();
        $("#registerForm").css("display", "none");
        $("#loginForm").css("display", "flex");
    });
    $("#link").click(function(e) {
        e.preventDefault();
        $("#registerForm").css("display", "none");
        $("#loginForm").css("display", "flex");
    });
}

function showRegister() {
    $("#link2").click(function(e) {
        e.preventDefault();
        $("#registerForm").css("display", "flex");
        $("#loginForm").css("display", "none");
    });
}
