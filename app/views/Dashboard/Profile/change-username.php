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
                  <form class="mb-3" action="<?= url('/profile/change'); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="username" class="form-label">
                      username baru
                      </label>
                      <input required placeholder="masukkan username baru .." value="<?= $user["username"]; ?>" type="text" class="form-control" name="username" id="username">
                      <div class="invalid-feedback">
                        username hanya boleh terdiri dari huruf kecil dan angka
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">
                        konfirmasi password
                      </label>
                      <input required placeholder="masukkan password .." value="" type="password" class="form-control" id="password" name="password">
                      <div class="invalid-feedback">
                        kata sandi salah
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
  $("#username").on("input", function() {
    let exp = /(\_|\-|\W|[A-Z])/g;
    let value = $(this).val()
    if (exp.test(value) && value !== "") {
      $(this).addClass("is-invalid")
      $("form").addClass("is-invalid")
    } else {
      $(this).removeClass("is-invalid")
      $("form").removeClass("is-invalid")
    }
    console.log(value, exp.test(value))
  })
</script>