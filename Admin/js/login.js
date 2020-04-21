function validation(){
			var email=document.getElementById('email').value;
			var password=document.getElementById('pass').value;
			if(email==' ' || password==' '){
				alert("Please enter your email");
			}
			else{
				email_regx=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
				pass_regx=/^[A-Za-z]\w{5,10}$/
				if(!email.match(email_regx)){
					alert("please check your id something is wrong");
				}
				if(!password.match(pass_regx)){
					alert("Your password must be between 5 to 10 character long!");
				}
		}
}

function signin_validation(){
			var email=document.getElementById('email').value;
			var password=document.getElementById('pass').value;
			var confirm_pass=document.getElementById('conf_pass').value;
			if(email==' ' || password==' '){
				alert("Please enter your email");
			}
			else{
				email_regx=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
				pass_regx=/^[A-Z0-9a-z]\w{5,10}$/
				if(!email.match(email_regx)){
					alert("please check your id something is wrong");
				}
				if(!password.match(pass_regx)){
					alert("Your password must be between 5 to 10 character long!");
				}
				if(password!= confirm_pass){
					alert("Password and cofirm password not matches");
				}
		}

}