const type = document.querySelector(".type");
const option = document.querySelector(".option");
const submit = document.querySelector(".submit");
const form = document.querySelector("form");

document.querySelector(".btn").addEventListener("click", () => {
  submit.click();
});

option.addEventListener("click", () => {
  if (type.innerText === "Please Login") {
    type.innerText = "Register Now";
    option.innerText = "Already have an account? login now.";
    form.action = "register.php";
    submit.value = "Register";
  } else {
    type.innerText = "Please Login";
    option.innerText = "No account yet? register now.";
    form.action = "login.php";
    submit.value = "Login";
  }
});
