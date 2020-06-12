let select = document.querySelector("#select");
let content = document.querySelector("#contend");


let anomalia =
    '<select class="custom-select" id="select">' +
    '<option value="Exógena">Exógena</option>' +
    '<option value="Endógena">Endógena </option>' +
    '<option value="Natural">Natural</option>' +
    '<option value="Funcional">Funcional</option>' +
    '</select>';

let falha =
    '<select class="custom-select" id="select">' +
    '<option value="Planejamento">Planejamento</option>' +
    '<option value="Execução">Execução</option>' +
    '<option value="Operacional">Operacional</option>' +
    '<option value="Gerencial">Gerencial</option>' +
    '</select>';

function classificacao() {
    let valor = select.options[select.selectedIndex].value;

    console.log(valor);

    if (valor == "Anomalia") {
        content.innerHTML = anomalia;
    }
    if (valor == "Falha") {
        content.innerHTML = falha;
    }

}