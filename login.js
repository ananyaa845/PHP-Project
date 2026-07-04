fetch("login.html")
  .then(res => res.text())
  .then(html => {
    document.getElementById("popup-container").innerHTML = html;

    const loginBtn = document.querySelector(".login-btn");
    const popup = document.querySelector(".form-popup");
    const closeBtn = document.querySelector(".close-btn");

    loginBtn.addEventListener("click", () => {
        popup.style.display = "block";
    });

    closeBtn.addEventListener("click", () => {
        popup.style.display = "none";
    });
});