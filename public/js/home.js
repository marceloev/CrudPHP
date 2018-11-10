function sendNewProduto() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var var_Descricao = document.getElementById("descrprod").value;
    var var_Marca = document.getElementById("marca").value;
    var var_Categoria = document.getElementById("ctgprod").value;
    var objJson = {
        descricao: var_Descricao,
        marca: var_Marca,
        categoria: var_Categoria
    };

    $.ajax({
        type: "POST",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        contentType: "application/json",
        url: "/novo-produto",
        data: JSON.stringify(objJson),
        dataType: 'JSON',
        cache: false,
        timeout: 600000,
        success: function(data) {
            var insertedData = '<tr>' +
                                    '<td>' + data.data.codigo +'</td>' +
                                    '<td>' + var_Descricao +'</td>' +
                                    '<td>' + var_Marca +'</td>' +
                                    '<td>' + var_Categoria +'</td>' +
                                '</tr>'
            $("#tableProdutos").append(insertedData);
            showSuccessMsg("Cadastro de Produto", "Produto cadastrado com sucesso.");
        },
        error: function(e) {
            console.log(e);
            showErrorMsg("Erro ao tentar cadastrar produto.", e.responseJSON.message);
        }
    });

};