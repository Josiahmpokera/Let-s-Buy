var button = document.getElementById("button");



function done(){
    var passwrdOne = document.forms["createAccount"]["pone"].value;
    var PasswordTwo = document.forms["createAccount"]["ptwo"].value;
    var error = document.getElementById('error');
   if(passwrdOne != PasswordTwo ){
       console.log("Data Can Defference");
       error.style.display = 'inline-block';
       error.style.display = "flex";
       return false
   } else {
       console.log('Data is Equal');
       return true
   }

    
}


class Password {
    
}