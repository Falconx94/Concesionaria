// Obtén referencias a los elementos de los tabs
var signInTab = document.getElementById("signInTab");
var signUpTab = document.getElementById("signUpTab");

// Obtén referencias a los formularios de login y sign up
var loginForm = document.getElementById("loginForm");
var signUpForm = document.getElementById("signUpForm");

// Agrega eventos de clic a los títulos de los tabs
signInTab.addEventListener("click", function() {
    signInTab.classList.add("active");
    signUpTab.classList.remove("active");
    loginForm.style.display = "block";
    signUpForm.style.display = "none";
});

signUpTab.addEventListener("click", function() {
    signUpTab.classList.add("active");
    signInTab.classList.remove("active");
    signUpForm.style.display = "block";
    loginForm.style.display = "none";
});
