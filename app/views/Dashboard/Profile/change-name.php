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
                  <form class="mb-3" action="<?= url('/profile/editData'); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="name" class="form-label">
                        nama baru
                      </label>
                      <input pattern="[a-zA-Z]" placeholder="masukkan nama baru .." value="<?= $user["name"]; ?>" type="text" class="form-control" id="name" name="name">
                      <div class="invalid-feedback">
                        nama tidak boleh terdiri dari simbol khusus dan angka
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">
                        konfirmasi password
                      </label>
                      <input placeholder="masukkan password .." value="" type="password" class="form-control" id="password" name="password">
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
  $("#name").on("input", function() {
    let exp = /(\d|\W|\s|\_)/gm;
    let value = $(this).val()
    if (exp.test(value)) {
      $(this, "form").addClass("is-invalid")
    } else {
      $(this, "form").removeClass("is-invalid")
    }
    console.log(value, exp.test(value))
  })
</script>