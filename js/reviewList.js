function submit(){
  var movieName = document.getElementById('movieForm');
  var listData = movieName.value.split();

  var listContainer = document.getElementById('list');
  var listElement = document.createElement("ul");
  listContainer.appendChild(listElement);

  var numberOfMovies = listData.length;
  var listItem;

  for(var i=0; i<numberOfMovies; ++i){
    listItem = document.createElement("li");
    listItem.innerHTML = listData[i];
    listElement.appendChild(listItem);
  }
  document.getElementById("list-title").style.visibility="visible"; 
}