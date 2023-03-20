function kontrolEt() {
  var username = document.forms["Form"]["email"].value;
  var password = document.forms["Form"]["passw"].value;
  var uyariBox1 = document.getElementById("email-uyari");
  var uyariBox2 = document.getElementById("sifre-uyari");
  console.log(password);

  if (username == "") {
    uyariBox1.innerHTML = "Username cannot be left blank";
    return false;
  } else {
    uyariBox1.innerHTML = "";
  }

  if (password == "") {
    uyariBox2.innerHTML = "Password field cannot be left blank";
    return false;
  } else if (password.length < 6) {
    uyariBox2.innerHTML = "You must enter at least 6 characters";
    return false;
  } else {
    uyariBox2.innerHTML = "";
  }
}

// Boşluk tuşuna basıldığında otomatik olarak alert devreye girecektir ve engelleyecektir.
document.addEventListener("keydown", function (event) {
  if (event.code === "Space") {
    event.preventDefault();
    alert("You cannot use a space character!");
  }
});
