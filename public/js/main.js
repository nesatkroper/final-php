let icon = document.getElementById("pass");

passIcon = document.addEventListener("click", () => {
  pass.type == "password" ? (pass.type = "text") : (pass.type = "password");
  passIcon.className == "fa fa-eye"
    ? (passIcon.className = "fa fa-eye-slash")
    : (passIcon.className = "fa fa-eye");
});

(() => {
  "use strict";

  const forms = document.querySelectorAll(".needs-validation");

  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

document.getElementById("image").addEventListener("change", function (event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const imgElement = document.getElementById("imageDisplay");
      imgElement.src = e.target.result;
      imgElement.style.display = "block";
    };
    reader.readAsDataURL(file);
  }
});
