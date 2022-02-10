function showLogin() {
    $("#registerbutton").click(function(e) {
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
    });
    $("#link").click(function(e) {
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
    });
}

function showRegister() {
    $("#link2").click(function(e) {
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


    });

}