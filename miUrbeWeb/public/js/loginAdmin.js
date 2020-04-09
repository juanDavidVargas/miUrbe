
function formatoEmail() {
  var correo = document.loginAdmin.correoadmin.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (expr.test(correo)) {
    document.loginAdmin.correoadmin.style.border = "1px solid  #17dd37";
    $("#formatoEmailAdmin").hide('slow');
    return true;
  } else {
    document.loginAdmin.correoadmin.style.border = "1px solid #f22012";
    $("#formatoEmailAdmin").show('slow');
    return false;
  }
}

function longitudPassword() {
  var pass = document.loginAdmin.passwordadmin.value;

  if (pass.length >= 8) {
    document.loginAdmin.passwordadmin.style.border = "1px solid  #17dd37";
    $("#longitudPassAdmin").hide('slow');
  } else {
    document.loginAdmin.passwordadmin.style.border = "1px solid  #f22012";
    $("#longitudPassAdmin").show('slow');
  }
}