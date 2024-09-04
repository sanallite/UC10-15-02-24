const formOpenBtn = document.querySelector("#form-open"),
home  = document.querySelector(".home"),
formContainer  = document.querySelector(".form_container"),
formCloseBtn  = document.querySelector(".form_close"),
singupBtn = document.querySelector("#singup"),
loginBtn = document.querySelector("#login"),
pwShowHide = document.querySelectorAll(".pw_hide");

formOpenBtn.addEventListener("click", () => home.classList.add("show") );
formCloseBtn.addEventListener("click", () => home.classList.remove("show") );

pwShowHide.forEach(icon =>{
    icon.addEventListener("click", () =>{
        let getPwInput = icon.parentElement.querySelector("input");
        if(getPwInput.type === "password"){
            getPwInput.type = "text";
            icon.classList.replace("bi-eye-slash", "bi-eye");
        }else{
            getPwInput.type = "password";
            icon.classList.replace("bi-eye", "bi-eye-slash")
        }
    })
})



singupBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.remove("active");
});