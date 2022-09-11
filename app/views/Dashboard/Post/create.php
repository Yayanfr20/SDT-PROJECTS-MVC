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
                  <form class="mb-3" action="<?= url('/post-project/upload'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$user['name'];?>" name="author">
                      <div class="mb-3">
                        <label for="title" class="form-label">judul project</label>
                        <input value="" name="title" type="text" class="form-control" id="title">
                      </div>
                      <div class="mb-3">
                        <label for="kategori" class="form-label">kategori</label>
                        <select class="form-select" name="kategori" id="kategori">
                          <?php foreach($categories as $category): ?>
                            <option value="<?= $category; ?>">
                              <?= $category; ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="demo" class="form-label">link demo</label>
                        <input value="" type="text" class="form-control" id="demo" name="demo">
                      </div>
                      <div class="mb-3">
                        <label for="source" class="form-label">
                          link source code
                        </label>
                        <input value="" type="text" class="form-control" id="source" name="source">
                      </div>
                      <div class="mb-3">
                        <label for="images" class="form-label">preview</label>
                        <input class="form-control" type="file" name="images" id="images" />
                      </div>
                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
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