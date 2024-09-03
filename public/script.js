let login = document.querySelector(".login");
login.addEventListener("click", () => {
  window.location.href = "login.php";
});

let createRoom = document.querySelectorAll("#create");
createRoom.forEach((btn)=>{
  btn.addEventListener('click',()=>{
    window.location.href = "createroom.php";
  })
});
let joinRoom = document.querySelectorAll("#join");
joinRoom.forEach((btn)=>{
  btn.addEventListener('click',()=>{
    window.location.href = "joinroom.php";
  })
})