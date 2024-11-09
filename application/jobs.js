// job application 
function tuma_ombi(e) {
    e.preventDefalt();
}

function () {
 const name = document.getElementById('name').value;
 const email = document.getElementById('email').value;
 const number = document.getElementById('phone').value;
 const position = document.getElementById('position').value;
 const barua = document.getElementById('cover_letter').value;
 const url = `http://localhost/somahii/Controller/application.php`;
 
 fetch(url, {
     method: 'POST',
     headers: {
         'Content-Type: application/json'
     },
     body: JSON.stringify(name: name, email: email, number: number, position: position, barua: barua)
 })
 .then((response) => response.json())
 .then((data) => {
     alert(JSON.stringify(data))
 })
 .then((error) => {
     console.log(`Error ${error}`)
 }) 
}
