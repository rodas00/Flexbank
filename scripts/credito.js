
function computeResults() {


  var valor = document.getElementById("valor").value;

  document.getElementById("credito").innerHTML = valor + " €";

  var mensal = document.getElementById("mes").value;

  document.getElementById("tempo").innerHTML = mensal + " Meses";


  var jurosACR = +valor * 0.0625;
  //imposto do selo = 100€
  var MTIC = +valor +jurosACR +100;
  var mensalidade = +MTIC / +mensal;
  mensalidade = mensalidade.toFixed(2)

  document.getElementById("mensalidade").innerHTML = mensalidade;

  document.getElementById("MTIC").innerHTML = Math.round(MTIC);
}
