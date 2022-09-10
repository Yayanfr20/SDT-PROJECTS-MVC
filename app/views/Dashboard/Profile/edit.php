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
                  <form class="mb-3" action="<?=BASEURL;?>/profile/editData" method="post" enctype="multipart/form-data">
                    <input type="hidden" name='id' value="<?=$user['id'];?>" >
                      <div class="mb-3">
                        <label for="gambar" class="form-label pp-change">
                          <img data-src="<?= $user["gambar"] ? url("/images/".$user["gambar"]) : "https://github.com/fiandev.png"; ?>" class="photo" src="<?= $user["gambar"] ? url("/images/".$user["gambar"]) : "https://github.com/fiandev.png"; ?>" alt="">
                          <span>
                            <i class="fa fa-pencil"></i>
                          </span>
                        </label>
                        <input value="" name="gambar" type="file" class="form-control d-none" id="gambar">
                      </div>
                      <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input value="<?= $user["name"] ?? "unknown"; ?>" name="name" type="text" class="form-control" id="name">
                      </div>
                      <div class="mb-3">
                        <label for="address" class="form-label">
                          alamat <b><?= $user["alamat"] ? "" : "*default"; ?></b>
                        </label>
                        <input value="<?= $user["alamat"] ?? ""; ?>" type="text" class="form-control" id="address" name="address">
                      </div>
                      <div class="mb-3">
                        <label for="birthdate" class="form-label">
                         tanggal lahir <b><?= $user["tanggal_lahir"] ? "" : "*default"; ?></b>
                        </label>
                        <input value="<?= $user["tanggal_lahir"] ?? date('Y-m-d'); ?>" type="date" class="form-control" id="birthdate" name="birthdate">
                      </div>
                      <button type="submit" class="btn btn-primary">
                        update
                      </button>
                    </form>
                </div>
              </div>
            </div>

         </div>
      </div>
  </div>
</div>


<script type="text/javascript">
  $("#gambar").on("change", function (event){
      var files = event.target.files,
                  file;
     if (files && files.length > 0) {
       file = files[0]
       try {
         let fileReader = new FileReader();
         let dataSrc = $(".photo").attr("data-src")
         fileReader.onload = function (e) {
           $(".photo").attr("src", e.target.result)
           console.log(e.target.result);
         };
         fileReader.readAsDataURL(file);
       } catch (e) {
         console.log("FileReader are not supported ");
       }
     }
     else {
       let dataSrc = $(".photo").attr("data-src")
       $(".photo").attr("src", dataSrc)
     }
    })
</script>