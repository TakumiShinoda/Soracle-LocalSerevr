function hide(className){
  let ele = document.getElementsByClassName(className)[0];
  ele.style.display = 'none';
}

function display(className){
  let ele = document.getElementsByClassName(className)[0];
  ele.style.display = 'block';
}

function requestDelete(id){
  var request = new XMLHttpRequest();
  request.open("GET", 'http://'+ location.hostname +'/Soracle-server/soracle/delete/?id=' + id, true);
  request.send();

  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      if(decodeURI(request.responseText) == 'success') location.reload();
      else alert('fail') ;
    }
  }
}
