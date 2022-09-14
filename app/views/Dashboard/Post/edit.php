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
                  <form class="mb-3" action="<?= url('/Posts/getEdit'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$user['name'];?>" name="author">
                     <input type="hidden" value="<?=$post['id'];?>" name="id">
                      <div class="mb-3">
                        <label for="title" class="form-label">judul project</label>
                        <input value="<?= $post['title']; ?>" name="title" type="text" class="form-control" id="title">
                        <?= $post['title']; ?>
                      </div>
                      <div class="mb-3">
                        <label for="kategori" class="form-label">kategori</label>
                        <select class="form-select" name="kategori" id="kategori">
                          <?php foreach($categories as $category): ?>
                            <?php if($post["kategori"] === $category): ?>
                              <option selected value="<?= $category; ?>">
                                <?= $category; ?>
                              </option>
                            <?php else: ?>
                              <option value="<?= $category; ?>">
                                <?= $category; ?>
                              </option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="demo" class="form-label">link demo</label>
                        <input value="<?= $post['demo']; ?>" type="text" class="form-control" id="demo" name="demo">
                      </div>
                      <div class="mb-3">
                        <label for="source" class="form-label">
                          link source code
                        </label>
                        <input value="<?= $post['source']; ?>" type="text" class="form-control" id="source" name="source">
                      </div>
                      <div class="mb-3">
                        <label for="images" class="form-label">preview</label>
                        <?php if (!empty($post["images"])): ?>
                          <img id="preview" style="width: 10rem; height: 5rem" data-src="<?= url($post['images']); ?>" src="<?= url($post['images']); ?>" alt="" class="img-fluid d-block mb-2">
                        <?php endif; ?>
                        <input class="form-control" type="file" name="images" id="images" />
                      </div>
                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control"><?= $post['deskripsi']; ?></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">
                        posting
                      </button>
                      <a href="<?= url('/dashboard'); ?>" type="button" class="btn btn-info">
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
    $("#images").on("change", function (event){
      var files = event.target.files,
                  file;
     if (files && files.length > 0) {
       file = files[0]
       try {
         let fileReader = new FileReader();
         let dataSrc = $("#preview").attr("data-src")
         fileReader.onload = function (e) {
           $("#preview").attr("src", e.target.result)
           console.log(e.target.result);
         };
         fileReader.readAsDataURL(file);
       } catch (e) {
         console.log("FileReader are not supported ");
       }
     }
     else {
       let dataSrc = $("#preview").attr("data-src")
       $("#preview").attr("src", dataSrc)
     }
    })
</script>
