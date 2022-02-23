var x = document.getElementById("login-form")
var y = document.getElementById("register-form")
var z = document.getElementById("btn")

function register() {
      x.style.left = "-400px"
      y.style.left = "50px"
      z.style.left = "110px"
}

function login() {
      x.style.left = "50px"
      y.style.left = "450px"
      z.style.left = "0"
}

function show(state) {
      document.getElementById('form-box').style.display = state;
      document.getElementById('background-mask').style.display = state;
}