let myModalCreateAccount = null;
let myModalLogin = null;
let myModalRequestPassword = null;
$( document ).ready(function() {
    $(".cadastro_modal").click(function(e){
        myModalCreateAccount = new bootstrap.Modal(document.getElementById('modalCreateAccount'), {
            keyboard: false
        });
        myModalCreateAccount.toggle()
    });
    $(".login_modal").click(function(e){
        if(myModalCreateAccount) myModalCreateAccount.hide();
        myModalLogin = new bootstrap.Modal(document.getElementById('modalLogin'), {
            keyboard: false
        });
        myModalLogin.toggle()
    });
    $(".esqueci_senha").click(function(e){
        if(myModalLogin) myModalLogin.hide();
        myModalRequestPassword = new bootstrap.Modal(document.getElementById('modalRequestPassword'), {
            keyboard: false
        });
        myModalRequestPassword.toggle()
    });
});