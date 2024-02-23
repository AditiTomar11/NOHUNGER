const form = document.getElementById("donation-form");
const openFormButton = document.getElementById("open-form-button");
openFormButton.addEventListener("click", () => {
  formContainer.style.display = "block";})

form.addEventListener("submit", function(event) {
  event.preventDefault();
  const item = document.getElementById("item").value;
  const username = document.getElementById("username").value;
  if (item === "donator") {
    window.location.href = "https://www.bluesnap.com/buy-now/donator";
  } else if (item === "supporter") {
    window.location.href = "https://www.paypal.com"
 }}
)
