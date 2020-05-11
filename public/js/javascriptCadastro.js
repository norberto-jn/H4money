//funçao mascara cpf
function mascara_cpf($id) {
    var cpf = document.getElementById($id);
    var valor_cpf = cpf.value;
    var total_cpf = valor_cpf.toString().length;

    switch (total_cpf) {
        case 3:
            cpf.value = valor_cpf + ".";
            break;
        case 7:
            cpf.value = valor_cpf + ".";
            break;
        case 11:
            cpf.value = valor_cpf + "-";
            break;
        case 14:
            cpf_fixo = cpf.value;
            break;
        case 15:
            cpf.value = cpf_fixo;
            break;

    }
}

//funçao mascara cep
function mascara_cep($id) {
    var cep = document.getElementById($id);
    var valor_cep = cep.value;
    var total_cep = valor_cep.toString().length;

    switch (total_cep) {
        case 5:
            cep.value = valor_cep + "-";
            break;
        case 9:
            cep_fixo = cep.value;
            break;
        case 10:
            cep.value = cep_fixo;
            break;
    }
}

//funçao para buscar dados de campo do formulario
$("#cep").focusout(function() {

    $.ajax({

        url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
        dataType: 'json',

        success: function(resposta) {
            $("#endereco").val(resposta.logradouro);
            $("#bairro").val(resposta.bairro);
            $("#cidade").val(resposta.localidade);
            $("#uf").val(resposta.uf);
        }
    });
});