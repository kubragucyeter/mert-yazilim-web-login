function kontrolEt() {
    var username = document.forms["Form"]["email"].value;
    var password = document.forms["Form"]["passw"].value;
    var uyariBox1 =document.getElementById("email-uyari");
    var uyariBox2 =document.getElementById("sifre-uyari");
    if (username == "") {
        uyariBox1.innerHTML = "Kullanıcı adı boş bırakılamaz";
        return false;
      }
      else {
        uyariBox1.innerHTML = "";
      }
      if (password == "") {
        uyariBox2.innerHTML = "Şifre alanı boş bırakılamaz";
        return false;
      } else if (password.length < 6) {
        uyariBox2.innerHTML = "En az 6 karakter girmelisiniz";
        return false;
      }
      else {
        uyariBox2.innerHTML = "";
      }
  }