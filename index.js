function showLogin() {
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

function showRegister() {
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

$("#loginButton").click(function(e) {
    e.preventDefault();
    window.location.href = "http://forum.co/views/home.php";
});