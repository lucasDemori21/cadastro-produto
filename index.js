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
    alert('Cadastrado com sucesso!');
}