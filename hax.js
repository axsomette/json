




function Json() {


fetch('player.json')
  .then((response) => {
    return response.json()
  
  })
  .then((data) => {
    document.getElementById('don').append("<strong>Avatar</strong><img src='"+data.url+"'><br>")
    document.getElementById('don').append(data.nom)
    document.getElementById('don').append(data.prenom)
    document.getElementById('don').append(data.exp)
    document.getElementById('don').append(data.type)
    console.log(data)
  })
  .catch((err) => {
  })


}




