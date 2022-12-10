const container = document.querySelector(".container");
const signUpBtn = document.querySelector(".green-bg button");
const signinBtn = document.querySelector(".orange-bg button");

signUpBtn.addEventListener("click", () => {
  container.classList.toggle("change");
});
