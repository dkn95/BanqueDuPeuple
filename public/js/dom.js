function recherche() {
	var num = document.getElementById("numeroCompte").value;
	console.log(num);
    window.location.href = "/finance.sn/controller/compteController.php?num="+num;
}
function rechercheClient() {
	var cni = document.getElementById("cniClient").value;
    window.location.href = "/finance.sn/view/indexFinance.php?view=rechClient&cni="+cni;
}
var fieldset = document.getElementById("nouveauCompteF");
var btn = document.getElementsByName("nouveauCompteBtn");
for(let i=0; i<btn.length; i++){
	btn[i].onclick = function()
	{
		fieldset.removeAttribute("hidden");
		var id = btn[i].attributes[1].value;
		var btnAjout = document.getElementById("btnAjoutCompte");
		btnAjout.setAttribute('value',id);		
	}
}
