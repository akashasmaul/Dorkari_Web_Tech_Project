function validateForm() {

    // Name Validation

    let x = document.forms["signup"]["username"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
      
    }
// email validation
    var emailval=document.forms["signup"]["useremail"].value;
    var pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(emailval ==""){
        alert("Email must be filled out");
        return false;
    }
    else{
    if(emailval.match(pattern)){
       

        if(nameExists2())
        return true;

    }
    else{

        alert("Invalid email format");

        return false;

    }
    }
    
  }

  


	
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});