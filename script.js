let login = document.querySelector(".login");
login.addEventListener("click", () => {
  window.location.assign("Login.html");
});
let anchor = document.querySelectorAll("a");
anchor.forEach((a) => {
  a.addEventListener("click", (e) => {
    e.preventDefault();
  });
});
