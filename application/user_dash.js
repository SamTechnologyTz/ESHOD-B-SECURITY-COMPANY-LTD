setInterval(() => {
  const user_id = document.getElementById('uid').value;
  fetch('http://localhost/somahii/Controller/user_dash.php', {
    method: 'POST',
    header: {
      'Content-Type: application'
    },
    body: JSON.stringify( uid: user_id )
  })
  .then((response) = response.json())
  .then((data) => {
    document.getElementById().innerTEXT=JSON.stringify(data.name);
  })
  .then((error) => {
    console.log(`Error: ${error}`)
  })

}, 500)
