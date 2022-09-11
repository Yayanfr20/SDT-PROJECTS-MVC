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
                  <div class="bg-profile" style="background-image: url('<?= $user["gambar"] ?? "https://github.com/ryugen.png"; ?>');">
                     <div class="pp-profile">
                        <img src="<?= $user['gambar'] ?? "https://github.com/fiandev.png"; ?>" alt="" class="avatar">
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
                              bergabung sejak <b>2022</b>
                           </p>
                        </li>
                        <li class="list">
                           <i class="fa fa-person"></i>
                           <p>
                              umur <b>17 tahun</b>
                           </p>
                        </li>
                        <li class="list">
                           <i class="fa fa-city"></i>
                           <p>
                              alamat <b>jongol, bujang city, Jakarta</b>
                           </p>
                        </li>
                     </ul>
                  </div>
               </div>
               
               <div class="row">
                 <?php foreach($postingan as $data): ?>
                   <div class="col-12 col-md-6 col-lg-4 mb-2">
                     <div class="post d-flex flex-column">
                       <h1 class="post-title"><?=$data['title'];?></h1>
                       <p class="post-category"><?=$data['kategori'];?></p>
                       <img src="<?=$data['images'];?>" alt="" class="post-thumbnail">
                       <p class="post-description">
                        <?=$data['deskripsi'];?>
                       </p>
                       <div class="actions my-2">
                         <a href="<?=$data['demo'];?>" class="btn btn-primary">
                           demo
                         </a>
                         <a href="<?=$data['source'];?>" class="btn btn-info">
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