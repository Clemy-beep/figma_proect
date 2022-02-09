function showLogin() {
    let registerbutton = document.getElementById('registerbutton');
    console.log('aie');
    registerbutton.addEventListener('click', function(e) {
        e.preventDefault();
        $('#loginForm').css('display', 'block');
        $("#registerForm").css('display', 'none');
    });
}