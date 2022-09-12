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
                  </div>
               </div>
               
               <div class="row">
                 <?php foreach($posts as $post): ?>
                   <div class="col-12 col-md-6 col-lg-4 mb-2">
                     <div class="post d-flex flex-column">
                       <h1 class="post-title"><?= $post["title"]; ?></h1>
                       <p class="post-category"><?= $post["kategori"]; ?></p>
                       <img src="<?= $post["gambar"] ? url($post["gambar"]) : 'https://source.unsplash.com/1200x400?'.$post["kategori"]; ?>" alt="" class="post-thumbnail">
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
  })
</script>