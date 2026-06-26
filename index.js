const loginBtn = document.querySelector(".login-btn");
const popup = document.querySelector(".form-popup");
const closeBtn = document.querySelector(".close-btn");

loginBtn.addEventListener("click", () => {
    popup.style.display = "block";
});

closeBtn.addEventListener("click", () => {
    popup.style.display = "none";
});