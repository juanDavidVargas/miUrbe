
function ValidarFormatoEmail()
{
  var correo = document.registro.email.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.registro.email.style.border = "1px solid  #17dd37";
      $("#avisomailformato").hide('slow');
      return true;
  }
  else
  {
    document.registro.email.style.border = "1px solid #f22012";
    $("#avisomailformato").show('slow');
    return false;
  }
}

function largoNombre()
{
  var nombre = document.registro.name.value;

  if (nombre.length >= 3)
  {
    document.registro.name.style.border = "1px solid  #17dd37";
    $("#avisolargonombre").hide('slow');
  }
  else
  {
    document.registro.name.style.border = "1px solid  #f22012";
    $("#avisolargonombre").show('slow');
  }
}

function largoCelular()
{
  var celular = document.registro.cell.value;

  if (celular.length >= 10)
  {
    document.registro.cell.style.border = "1px solid  #17dd37";
    $("#avisolargocelular").hide('slow');
  }
  else
  {
    document.registro.cell.style.border = "1px solid  #f22012";
    $("#avisolargocelular").show('slow');
  }
}

function largoPassword()
{
  var pass = document.registro.pass.value;

  if (pass.length >= 8)
  {
    document.registro.pass.style.border = "1px solid  #17dd37";
    $("#avisolargopass").hide('slow');
  }
  else
  {
    document.registro.pass.style.border = "1px solid  #f22012";
    $("#avisolargopass").show('slow');
  }
}

function repetirPassword()
{
  if(document.registro.pass.value != document.registro.pass2.value)
  {
    document.registro.pass2.style.border = "1px solid #f22012";
    $("#repetirpass").show('slow');
    return false;
  }
  else
  {
    document.registro.pass2.style.border = "1px solid #17dd37";
    $("#repetirpass").hide('slow');
    return true;
  }
}
