var search = document.getElementById['pesquisar'].value;

search.addEventListener("keydown", function(event) {
    if(event.key === "Enter"){
        searchData();
    }
});

function searchData(){
    window.location = 'consulta.php?search='+ search.value;
}

function exibirStatus(){

    if (document.frmcadastrar.nomeProduto.value == "") {
		alert("Preencha o campo Nome produto.");
		document.frmcadastrar.nomeProduto.focus();
		return false;
	} else if (document.frmcadastrar.preco.value == "") {
		alert("Preencha o campo Preço produto.");
		document.frmcadastrar.preco.focus();
		return false;
	} else if (document.frmcadastrar.codigo.value == "") {
		alert("Preencha o campo Código produto.");
		document.frmcadastrar.codigo.focus();
		return false;
    }else{
        alert("Cadastro realizado com succeso!");
        return true;
    }
}