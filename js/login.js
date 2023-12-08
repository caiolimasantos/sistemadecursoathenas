const user = document.getElementById("usuario");
const password = document.getElementById("senha");
const userContainer = document.getElementById("user-container");
const passwordContainer = document.getElementById("password-container");
const buttonContainer = document.getElementById("button");

function showPassword(){
    if ((password.value.length > 2) && (user.value.length > 2)) {
      buttonContainer.style.display ='block';
    } else {
      buttonContainer.style.display ='none';
    }
}

user.addEventListener("focusout", showPassword);
userContainer.addEventListener("mouseleave", showPassword);
password.addEventListener("focusout", showPassword);
passwordContainer.addEventListener("mouseleave", showPassword);

