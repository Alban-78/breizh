function search() {
    document.getElementById('matchAddress').innerHTML = '';
    let addressSign = document.getElementById('adress').value;

    fetch("https://api-adresse.data.gouv.fr/search/?q=" + addressSign)
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {


            json.features.forEach(function (feature) {
                let li = document.createElement('li');
                li.innerText = feature.properties.label;
                document.getElementById('matchAddress').appendChild(li);

                li.addEventListener('click', function () {
                    let adress = document.getElementById('adress');
                    adress.value = li.textContent;
                    li.innerHTML = "";
                })
            })
        })
}