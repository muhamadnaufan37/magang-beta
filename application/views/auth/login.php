
  <form action="<?php echo base_url('auth'); ?>" method="post" class="login-form">
    <h1><?php echo $page_cover ?></h1>
    <div class="textb">
      <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" required>
      <div class="placeholder">Email</div>
    </div>
      <?= form_error('email', '<small class="text-danger">','</small>'); ?>

    <div class="textb">
      <input type="password" class="form-control" id="password" name="password" required>
      <div class="placeholder">Password</div>
      <div class="show-password fas fa-eye-slash"></div>
    </div>
      <?= form_error('password', '<small class="text-danger">','</small>'); ?>

    <div class="checkbox">
      <input type="checkbox">
      <div class="fas fa-check"></div>
      Stay signed in
    </div>

    <button class="btn fas fa-arrow-right" disabled></button>
    <a href="<?php echo base_url('auth/register') ?>">Register</a>
    <a href="<?php echo base_url('auth/forgotpass') ?>">Can't Sign in?</a>
  </form>

   <script src="<?php echo base_url('assets/plugins/node_modules/sweetalert2')?>/dist/sweetalert2.all.min.js"></script>
   <script src="<?php echo base_url('assets/plugins/node_modules/sweetalert2')?>/dist/sweetalert2.min.js"></script>
   <script src="<?php echo base_url('assets/plugins/') ?>alert.js"></script>
   <?php echo "<script>".$this->session->flashdata('message')."</script>"?>

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