<div class="container">
   <div class="row">
      <div class="col-12 col-lg-4">
         <?php include __DIR__."/../partials/sidenav.php"; ?>
      </div>
      <div class="col-12 col-lg-8">
         <?php include __DIR__."/../partials/nav.php"; ?>
         <div id="container" class="px-2 py-1">

            <div class="content">

               <div class="row d-flex align-items-center mb-5">
                 <div class="col-12">
                  <div class="bg-profile" style="background-image: url('<?= $user['gambar'] ? url($user['gambar']) : "https://github.com/fiandev.png"; ?>');">
                     <div class="pp-profile">
                        <img src="<?= $user['gambar'] ? url($user['gambar']) : "https://github.com/fiandev.png"; ?>" alt="" class="avatar">
                     </div>
                  </div>
                 </div>
                  <div class="col-12 d-flex flex-column">
                     <h1 class="fs-5 text-center">
                       <?= $user['name'] ?? "name"; ?>
                     </h1>
                     <ul class="list-info-profile d-flex flex-column gap-2">
                        <li class="list">
                           <i class="fa fa-clock"></i>
                           <p>
                              bergabung sejak <b><?= $user["create_at"] ? $user["create_at"] : now("date"); ?></b>
                           </p>
                        </li>
                        <li class="list">
                           <i class="fa fa-person"></i>
                           <p>
                              umur <b id="age" class="date" data="<?= $user["tanggal_lahir"]; ?>"></b>
                           </p>
                        </li>
                        <li class="list">
                           <i class="fa fa-city"></i>
                           <p>
                              alamat <b><?= $user["alamat"] ? $user["alamat"] : "..."; ?></b>
                           </p>
                        </li>
                        <li class="list">
                           <i class="fa fa-file"></i>
                           <p>
                              total posts <b><?= count($posts); ?></b>
                           </p>
                        </li>
                     </ul>
                     
                    <?php if(count($posts) > 0): ?>
                     <div class="percentage-categories">
                       <small>Persentage</small>
                       <div class="progressbar">
                         <?php foreach($percentages as $category => $percentage): ?>
                           <div data-bs-toggle="tooltip" title="<?= $category . ' : '. $categoryMode[$category]; ?>" category-name="<?= $category; ?>" style="width: <?= $percentage ?>%" class="progress"></div>
                         <?php endforeach; ?>
                       </div>
                     </div>
                   <?php endif; ?>
                  </div>
               </div>
               
               <div class="row">
                 <?php foreach($posts as $post): ?>
                   <div class="col-12 col-md-6 col-lg-4 mb-2">
                     <div class="post d-flex flex-column">
                       <div class="d-flex align-items-center justify-content-between">
                         <a href="<?= url('/profile/'. $post["username"]); ?>" class="d-flex align-items-center gap-2">
                           <img style="width: 2rem; height:2rem;" src="<?= $user["gambar"] ? url($user["gambar"]) : "https://github.com/fiandev.png"; ?>" alt="Avatar" class="rounded-circle">
                           <small><?= $user["name"]; ?></small>
                         </a>
                         <div class="d-flex">
                          <?php if($post["author"] == $user['id']): ?>
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
<script>
  const rule_categories = {
    php: "#4F5D95",
    javascript: "#f1e05a",
    html: "#e44b23",
    css: "#563d7c",
    golang: "#51dcff",
    python: "#3572A5"
  }
  $(document).ready(function(){
    let birthdate = $("#age").attr("data")
    let joindate = $("#join").attr("data")
    if (birthdate === "") {
      $("#age").html("NaN Tahun")
    }
    let now = new Date()
    let diff = now - new Date(birthdate)
    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
    let years = Math.floor(days / 365.25)
    
    $("#age").html(years)
    
    
    
    $(".percentage-categories .progress").each(function(){
      let categoryName = $(this).attr("category-name")
      let color = typeof rule_categories[categoryName] !== "undefined" ? rule_categories[categoryName] : "#000000"
      $(this).css("background-color", color)
    })
  })
</script>