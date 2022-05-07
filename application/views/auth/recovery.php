
  <form action="#" class="login-form">
    <h1><?php echo $page_cover ?></h1>
    <h5>Mengganti Password akun dengan Email: <p class="badge badge-success btn-sm mb-2">emai@gmail.com</p></h5>
    <div class="textb">
      <input type="password" class="form-control form-control-user" name="password1" id="password1" required>
      <div class="placeholder">Password</div>
      <div class="show-password fas fa-eye-slash"></div>
      <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>

    <div class="textb">
      <input type="password" class="form-control form-control-user" name="password2" id="password2" required>
      <div class="placeholder">Password</div>
      <div class="show-password fas fa-eye-slash"></div>
      <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>

    <button class="btn fas fa-arrow-right" disabled></button>
  </form>

  <script>
    var fields = document.querySelectorAll(".textb input");
    var btn = document.querySelector(".btn");
    function check(){
      if(fields[0].value != "" && fields[1].value != "")
        btn.disabled = false;
      else
        btn.disabled = true;  
    }

    fields[0].addEventListener("keyup",check);
    fields[1].addEventListener("keyup",check);

    document.querySelector(".show-password").addEventListener("click",function(){
      if(this.classList[2] == "fa-eye-slash"){
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
        fields[1].type = "text";
      }else{
        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");
        fields[1].type = "password";
      }
    });
  </script>
</body>
</html>