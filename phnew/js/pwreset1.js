var userName = document.getElementById('userName');
var email = document.getElementById('email');
var next = document.getElementById('next');

/*field empty check.............................................*/
next.addEventListener('click' ,function(){
    if(userName.value == "")
    {
        userName.style.borderColor = 'red';
    }
  
    else if(userName.value != ""){
        userName.style.borderColor = 'green';
    }
  });

  next.addEventListener('click' ,function(){
    if(email.value == "")
    {
        email.style.borderColor = 'red';
    }
  
    else if(email.value != ""){
        email.style.borderColor = 'green';
    }
  });
/*field empty check end.............................................*/
