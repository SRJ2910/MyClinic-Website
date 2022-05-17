function changeQuery(index){
  let e = document.getElementsByClassName("queries");
  for(var i = 0; i<e.length; i++){
    if(i==index){
      e[i].style.display = "block";
    }
    else{
      e[i].style.display = "none";
    }
  }
}
