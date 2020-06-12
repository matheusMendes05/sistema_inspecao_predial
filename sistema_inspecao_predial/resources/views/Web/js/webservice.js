
// DATA LOCAL
let data = new Date
let dataLocal = data.toLocaleDateString();
let date = document.getElementById('data_inspecao').value = dataLocal

// WEBSERVICE CORREIOS
function requisitar() {
    let cep = document.querySelector("#cep").value;
    let url = `https://viacep.com.br/ws/${cep}/json/`;
    let ajax = new XMLHttpRequest();
    ajax.open("GET", url);
    ajax.onreadystatechange = () => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            let dadosJSONText = ajax.responseText
            let dadosJSONObj = JSON.parse(dadosJSONText)
            document.getElementById('endereco').value = dadosJSONObj.logradouro;
            document.getElementById('bairro').value = dadosJSONObj.bairro;
            document.getElementById('complemento').value = dadosJSONObj.complemento;
        }
        if (ajax.readyState == 4 && ajax.status == 404) {
            // document.getElementById('conteudo').innerHTML = 'requisição finalizada, porém o recurso solicitado não foi encontrado, o status é 404'
            alert('Erro ao buscar CEP');
        }
    }
    ajax.send();
}