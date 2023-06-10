var newPassword = document.getElementById('newPassword');
var conf_pass = document.getElementById('conf-pass');
var next = document.getElementById('next');

/*field empty check.............................................*/
next.addEventListener('click' ,function(){
    if(newPassword.value == "")
    {
        newPassword.style.borderColor = 'red';
    }
  
    else if(newPassword.value != ""){
        newPassword.style.borderColor = 'green';
    }
  });

  next.addEventListener('click' ,function(){
    if(conf_pass.value == "")
    {
        conf_pass.style.borderColor = 'red';
    }
  
    else if(conf_pass.value != ""){
        conf_pass.style.borderColor = 'green';
    }
  });
/*field empty check end.............................................*/

/*password length check*/
next.addEventListener('click' ,function(){
 if(newPassword.value.length <8){
      alert('Password must be more than 8 characters!');
     newPassword.style.borderColor = 'red';
  }
});
 /*password length check end*/

 next.addEventListener('click' ,function(){
    if(newPassword.value != conf_pass.value){
        alert('Confirm password faild!');
        conf_pass.style.borderColor = 'red';
    }
  });