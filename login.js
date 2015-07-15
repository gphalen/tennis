function myFunct(){
        var myEmail = document.getElementById("email").value;
        var validEmail = /[0-9A-z]+@{1}(mail\.)?umw\.edu/.test(myEmail);
        if(validEmail){
                alert("Congrats!");
        }
        if(!validEmail){
                alert("Invalid email.");
        }
}

function validatePassword() {
        var d=document.getElementById("password");
        if (d.value==""){
         alert("Please enter a password");
         return false;
}
        else
        return true;

        }

function validate(){
validatePassword();
myFunct();
}
echo "# tennis" >> login.js
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/gphalen/tennis.git
git push -u origin master
# tennis
