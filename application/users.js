//user login
function user_login() {
  preventDefault();
  const pass = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  fetch('https://eshod-security-company-ltd.koyeb.app/Controller/user_login.php', {
    method: 'post',
    headers: {
      'Content-Type: application/json'
    },
    body: JSON.stringify( email: pass, password: password )
  })
  .then((response) => response.json())
  .then((data) => {
    alert(data)
  })
  .then((error) => {
    consolog(error)
  })
}

//user register
function user_register() {
  preventDefault();
  const jina = document.getElementById('name').value;
  const pepe = document.getElementById('email').value;
  const msimbo = document.getElementById('password').value;

  fetch('https://eshod-security-company-ltd.koyeb.app/Controller/user_register.php', {
    method: 'post',
    headers: {
      'Content-Type: application/json'
    },
    body: JSON.stringify( name: jina, email: pepe, password: msimbo )
  })
  .then((response) => response.json())
  .then((data) => {
    alert(data)
  })
  .then((error) => {
    consolog(error)
  })
}
