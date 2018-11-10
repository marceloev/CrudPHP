function sendNewProduto() {
    var var_Descricao = document.getElementById("descrprod").value;
    var var_Marca = document.getElementById("marca").value;
    var var_Categoria= document.getElementById("ctgprod").value;
    var objJson = {
        descricao: var_Descricao,
        marca: var_Marca,
        categoria: var_Categoria
    };

    $.ajax({
        type: "POST",
        contentType: "application/json",
        url: "/novo-produto",
        data: JSON.stringify(objJson),
        dataType: 'json',
        cache: false,
        timeout: 600000,
        success: function(data) {
        	console.log(data);
            showSuccessMsg(data.message, "Produto cadastrado com sucesso.");
        },
        error: function(e) {
        	console.log(e);
            showErrorMsg("Erro ao tentar cadastrar produto.", e.responseJSON.message);
        }
    });

};