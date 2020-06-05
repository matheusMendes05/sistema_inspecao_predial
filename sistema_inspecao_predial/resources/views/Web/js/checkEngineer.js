let form = document.querySelector('#form-register');
// escondendo Formulario
form.style.display = 'none';

let card_n = document.querySelector('#card_n');


// verificar CREA Engenheiro 
function checkEngineer() {

    let engineer = {
        card_n: card_n.value
    }

    fetch('http://localhost:3000/api/user', {

        method: 'POST',
        headers: new Headers({
            'Content-Type': 'application/json',
        }),
        body: JSON.stringify(engineer)
    })
        .then((res) => res.json())
        .then((json) => {
            // console.log(typeof (json.engineer.situation)); //return string
            if (json.engineer.situation === "REGULAR") {
                console.log("CREA VALIDO");

                document.getElementById('content').innerHTML = ' <h1 class ="text-warning display-4 ">CREA VÁLIDO</h1>';

                form.style.display = 'flex';

                document.querySelector('#name').value = json.engineer.name
                document.querySelector('#email').value = json.engineer.email
                document.querySelector('#profissional_tittle').value = json.engineer.professional_tittle
                document.querySelector('#national_registry').value = json.engineer.national_registry
                document.querySelector('#crea').value = json.engineer.card_n
                document.querySelector('#situation').value = json.engineer.situation



            } else if (json.engineer.situation != "REGULAR") {
                console.log("SITUACAO: " + json.engineer.situation);

                document.getElementById('content').innerHTML = ' ';

                document.getElementById('content').innerHTML += `<h5 class="col-12">ERRO. <strong class = "text-danger">${json.engineer.situation}</strong></h5>`;
            } else if (json.error) {
                console.log(json.error);

            }
        })
        .catch((error) => {
            alert("ERRO: CREA INVALIDO OU CAMPO VAZIO");
        })



}