var container = document.querySelector(".container");
var calculation = false;
    
function callUrlToGetData(url, functionName) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      printData(JSON.parse(this.responseText), functionName);
    }
  };
  xhttp.open("GET", url);
  xhttp.send();
}

function printData(data, functionName) {
    functionName('callback', data);
}

function getUsers(state, data) {
    if(state=='firstcall')
    callUrlToGetData("https://jsonplaceholder.typicode.com/users", getUsers);
    if(state=='callback') {
        container.innerHTML = '';
        for(item in data)
        container.innerHTML += `
        <a class="user-link" onclick="singleUserPosts('firstcall', this, `+data[item].id+`)">`+data[item].name+`</a><br>`;
    }
}
getUsers('firstcall');
    
function getPosts(state, data) {
    if(state=='firstcall')
    callUrlToGetData("https://jsonplaceholder.typicode.com/posts", getPosts);
    if(state=='callback') {
        container.innerHTML = '';
        for(item in data)
        container.innerHTML += data[item].title + "<br>";
    }
}

function singleUserPosts(state, data, user) {
    if(state=='firstcall'){
        callUrlToGetData("https://jsonplaceholder.typicode.com/posts?userId=" + user, singleUserPosts);
        console.log(user);
    }
    if(state=='callback') {
      container.innerHTML = "";
      for (x in data) {
        container.innerHTML += 'User ID: '+ data[x].userId + '<br>'+' Title: ' + data[x].title + '<br>' + 'Text: ' + data[x].body + '<br>';
      }
    }
}

















