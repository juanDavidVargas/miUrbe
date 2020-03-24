

function longitudClave()
{
  var pass = document.actualizarclave.newpassword.value;

  if (pass.length >= 8)
  {
    document.actualizarclave.newpassword.style.border = "1px solid  #17dd37";
    $("#avisolargoClave").hide('slow');
  }
  else
  {
    document.actualizarclave.newpassword.style.border = "1px solid  #f22012";
    $("#avisolargoClave").show('slow');
  }
}

function repetirClave()
{
  var pass1 = document.actualizarclave.newpassword.value;
  var pass2 = document.actualizarclave.repeatNewPassword.value;

  if(pass1 === pass2)
  {
    document.actualizarclave.repeatNewPassword.style.border = "1px solid  #17dd37";
    $("#avisoclavesiguales").hide('slow');
  }
  else
  {
    document.actualizarclave.repeatNewPassword.style.border = "1px solid  #f22012";
    $("#avisoclavesiguales").show('slow');
  }
}
