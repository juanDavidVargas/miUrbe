

function formatoEmail()
{
  var correo = document.login.correo.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.login.correo.style.border = "1px solid  #17dd37";
      $("#avisoformatoemail").hide('slow');
      return true;
  }
  else
  {
    document.login.correo.style.border = "1px solid #f22012";
    $("#avisoformatoemail").show('slow');
    return false;
  }
}

function longitudPassword()
{
  var pass = document.login.pass.value;

  if (pass.length >= 8)
  {
    document.login.pass.style.border = "1px solid  #17dd37";
    $("#longitudPass").hide('slow');
  }
  else
  {
    document.login.pass.style.border = "1px solid  #f22012";
    $("#longitudPass").show('slow');
  }
}
