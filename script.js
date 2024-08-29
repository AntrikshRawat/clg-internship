if(window.location.pathname === "/index.html"){
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

let createRoom = document.querySelectorAll("#create");
createRoom.forEach((btn)=>{
  btn.addEventListener('click',()=>{
    window.location.pathname = "/createroom.html";
  })
});

let joinRoom = document.querySelectorAll("#join");
joinRoom.forEach((btn)=>{
  btn.addEventListener('click',()=>{
    window.location.pathname = "/joinroom.html";
  })
})
}
if(window.location.pathname === "/joinroom.html") {
  let copyToClip = document.querySelector('.copy');
  let input = document.querySelector('input');
  let roomCode = input.value;
  copyToClip.addEventListener('click',()=>{
    navigator.clipboard.writeText(roomCode).then(()=>{
      alert("Room Code Copied To ClipBoard");
    })
  })
}