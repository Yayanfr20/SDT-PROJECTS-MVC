<div class="container">
  <div class="row">
    <div class="col-12 col-lg-4">
      <?php include __DIR__."/partials/sidenav.php"; ?>
    </div>
    <div class="col-12 col-lg-8">
      <?php include __DIR__."/partials/nav.php"; ?>
      <div id="container" class="px-2 py-1">
        
        <div class="content">
          <div class="row">
           <?php foreach($posts as $post): ?>
             <div class="col-12 col-md-6 col-lg-4 mb-2">
               <div class="post d-flex flex-column">
                 <h1 class="post-title"><?= $post["title"]; ?></h1>
                 <p class="post-category"><?= $post["kategori"]; ?></p>
                 <img src="<?= $post["gambar"] ?? 'https://source.unsplash.com/1200x400?'.$post["kategori"]; ?>" alt="" class="post-thumbnail">
                 <p class="post-description">
                   <?= $post["deskripsi"]; ?>
                 </p>
                 <div class="actions my-2">
                   <a href="<?= $post["demo"]; ?>" class="btn btn-primary">
                     demo
                   </a>
                   <a href="<?= $post["source"]; ?>" class="btn btn-info">
                     source
                   </a>
                 </div>
               </div>
             </div>
           <?php endforeach; ?>
         </div>
        </div>
        
      </div>
    </div>
  </div>
</div>