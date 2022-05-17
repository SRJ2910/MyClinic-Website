document.getElementById('selectedTrainTable')
      .addEventListener('click', function (item) {
          var row = item.path[1];
          setCookie('train_number', row.cells[0].innerHTML);
          setCookie('amount',row.cells[5].innerHTML);
      });

    function setCookie(cName, cValue) {
        document.cookie = cName + "=" + cValue + "; " + "; path=/";
}

document.getElementById('selectedTrainTable')
.addEventListener('click', function (item) {
    var x = document.getElementById("selectedTrainTable").getElementsByTagName("td");
    for(var i = 0; i<x.length; i++){
        x[i].style.backgroundColor = "transparent"; 
    } 
    var row = item.path[1];
    for (var j = 0; j < row.cells.length; j++) {
        row.cells[j].style.backgroundColor = "#B4FF9F";
    }
});