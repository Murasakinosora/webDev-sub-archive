const name = document.getElementById('user');
const pass = document.getElementById('pass');
const form = document.getElementById('form');
let username,password=[],here ={};
function Send_Data(){
var name = document.getElementById('user').value;
var pass = document.getElementById('pass').value;
var check = 0;
$.ajax({type:"POST",url:"save.php",data:{user:name,pass:pass},success:function(data){console.log(data)}})

}
function obj() {

  for(let prop in here){
    if(here[prop].username===name.value && here[prop].password===pass.value){
      console.log(here)
        var check = 1
   }else{

   }
  }
if (check == 1){
  window.location.href = 'table.php';
  return false;
}else{

  Send_Data();
}

}



  form.addEventListener('submit',(e)=>{

    if (name.value ==='' || name.value==null){
      e.preventDefault()
    }else{

      fetch("validation.json")
        .then(function(resp){
          return resp.json()
        })
        .then(function(data){
          username = data.username;
          password = data.password;
          here = data;
          obj();
        })


    }
  })
