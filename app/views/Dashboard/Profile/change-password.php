<div class="container">
  <div class="row">
    <div class="col-12 col-lg-4">
      <?php include __DIR__."/../partials/sidenav.php"; ?>
      </div>
      <div class="col-12 col-lg-8">
         <?php include __DIR__."/../partials/nav.php"; ?>
         <div id="container" class="px-2 py-1">

            <div class="content">
              <div class="row">
                <div class="col">
                  <form class="mb-3" action="<?= url('/profile/changePass'); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="newPassword" class="form-label">
                        masukkan password baru
                      </label>
                      <input required placeholder="masukkan password baru .." value="" type="text" class="form-control" id="newPassword" name="newPassword">
                      <div class="invalid-feedback">
                        password terlalu pendek, min 8 karakter
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="confirmPassword" class="form-label">
                        konfirmasi password baru
                      </label>
                      <input required placeholder="konfirmasi password baru .." value="" type="text" class="form-control" id="confirmPassword" name="confirmPassword">
                      <div class="invalid-feedback">
                        password tidak sama
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">
                        konfirmasi password
                      </label>
                      <input required placeholder="masukkan password anda .." value="" type="password" class="form-control" id="password" name="password">
                      <div class="invalid-feedback">
                        password salah
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                      kirim
                    </button>
                    <a href="<?= url('/setting'); ?>" class="btn btn-info">
                      kembali
                    </a>
                  </form>
                </div>
              </div>
            </div>

         </div>
      </div>
  </div>
</div>


<script>
  $("#confirmPassword").on("input", function() {
    let newPass = $("#newPassword").val()
    let value = $(this).val()
    if (value !== newPass) {
      $(this, "form").addClass("is-invalid")
    } else {
      $(this, "form").removeClass("is-invalid")
    }
  })
  
  $("#newPassword").on("change", function(){
    let exp = /(\w{8})/;
    let value = $(this).val()
    if (!exp.test(value)) {
      $(this, "form").addClass("is-invalid")
    } else {
      $(this, "form").removeClass("is-invalid")
    }
  })
</script>