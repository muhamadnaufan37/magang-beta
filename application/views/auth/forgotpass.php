
  <form action="#" class="login-form">
    <h1><?php echo $page_cover ?></h1>
    <div class="textb">
      <input type="email" id="email" name="email" required>
      <div class="placeholder">Email</div>
    </div>

    <button class="btn fas fa-arrow-right" disabled></button>
    <a class="text-primary" href="<?php echo base_url('auth') ?>">Already have an account?</a>
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