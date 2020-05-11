//campo para esconder tabela da view cliente
var tela = 0;

function esconde($id) {
    if (tela == 0) {
        document.getElementById($id).style.display = "none";
        document.getElementById('barra').style.display = "block";
        tela = 1;
    } else if (tela == 1) {
        document.getElementById($id).style.display = "block";
        document.getElementById('barra').style.display = "none";
        tela = 0;
    }
}