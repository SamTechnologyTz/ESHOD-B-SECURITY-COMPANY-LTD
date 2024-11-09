setInterval(() => {
  const jina = document.getElementById('jina').value;
  fetch('http:localhost/somahii/Controller/user_dash.php', {
    method: 'POST',
    header: {
      'Content-Type: application'
    },
    body: JSON.stringify( name: jina )
  })
  .then((response) = response.json())
  .then((data) => {
    alert(JSON.stringify(data));
  })
  .then((error) => {
    conso.log
  })

}, 500)
