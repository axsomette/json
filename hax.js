




function Json() {


fetch('player.json')
  .then((response) => {
    return response.json()
  
  })
  .then((data) => {
    for (var i = 0; i < data.length; i++){
    document.getElementById('don').innerHTML = "<strong>Avatar : </strong><br><img src='"+data[0].url+"' style='width:100px; heigth:auto;'><br>"+ data[0].nom + "<br>"+data[0].prenom+"<br>"+data[0].exp+"<br>"+data[0].type+"<br>";
    document.getElementById('don2').innerHTML = "<strong>Avatar : </strong><br><img src='"+data[1].url+"' style='width:100px; heigth:auto;'><br>"+ data[1].nom + "<br>"+data[1].prenom+"<br>"+data[1].exp+"<br>"+data[1].type+"<br>";
}
console.log(data)
  })
  .catch((err) => {

  })


}




