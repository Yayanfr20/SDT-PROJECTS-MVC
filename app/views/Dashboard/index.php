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
                 <div class="d-flex align-items-center justify-content-between">
                   <div class="d-flex align-items-center gap-2">
                     <img style="width: 2rem; height:2rem;" src="<?= $user["gambar"] ? url($user["gambar"]) : "https://github.com/fiandev.png"; ?>" alt="Avatar" class="rounded-circle">
                     <small><?= $user["name"]; ?></small>
                   </div>
                   <div class="d-flex">
                    <?php if($post["author"] == $user["id"]): ?>
                      <a href="<?= url('/posts/'. $post['id'] .'/edit') ?>" data-bs-toggle="tooltip" title="post setting">
                         <i class="fa fa-gear"></i>
                      </a>
                    <?php endif; ?>
                   </div>
                 </div>
                 <h1 class="post-title"><?= $post["title"]; ?></h1>
                 <p class="post-category"><?= $post["kategori"]; ?></p>
                 <img src="<?= $post["images"] ? url($post["images"]) : 'https://source.unsplash.com/1200x400?'.$post["kategori"]; ?>" alt="" class="post-thumbnail">
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

<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>