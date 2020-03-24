
function formatoEmailUser()
{
  var correo = document.resetpass.email.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.resetpass.email.style.border = "1px solid  #17dd37";
      $("#avisoformatoemail").hide('slow');
      return true;
  }
  else
  {
    document.resetpass.email.style.border = "1px solid #f22012";
    $("#avisoformatoemail").show('slow');
    return false;
  }
}
