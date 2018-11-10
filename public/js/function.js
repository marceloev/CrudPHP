var MODEL_ALERT =
"<div class='modal custom-modal-dialog' tabindex='-1' role='dialog'> " +
    "<div class='modal-dialog' role='document'> " +
        "<div class='modal-content' style='box-shadow: 15px 20px 0px rgba(0,0,0,0.1); border: solid 1.2px;'> " +
            "<div id='modal-header' class='modal-header'> " +
                "<h3 id='modal-title-text' class='modal-title text-center w-100'>Sem título</h3> " +
                "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" +
            "</div> " +
            "<div class='modal-body'> " +
                "<p id='modal-body-text'>Sem mensagem de erro.</p> " +
            "</div> " +
        "</div> " +
    "</div> " +
"</div>";

function showErrorMsg(title, content) { showMessage("alert-danger", title, content); };
function showWarnMsg(title, content) { showMessage("alert-warning", title, content); };
function showInfoMsg(title, content) { showMessage("alert-info", title, content); };
function showSuccessMsg(title, content) { showMessage("alert-success", title, content); }

function showMessage(alertType, title, content) {
    $(".custom-modal-dialog").remove();
    $("body").append(MODEL_ALERT);
    $("#modal-header")[0].classList.toggle(alertType);
    $("#modal-title-text")[0].innerText = title;
    $("#modal-body-text")[0].innerText = content;
    $('.custom-modal-dialog').modal();
};