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
                  <div class="col-lg-4 bg-profile" style="background-image: url('<?= $user->gambar ?? "https://github.com/ryugen.png"; ?>');">
                     <div class="pp-profile">
                        <img src="<?= $user['gambar'] ?? "https://github.com/fiandev.png"; ?>" alt="" class="avatar">
                     </div>
                  </div>
                  <div class="col-lg-8 d-flex flex-column align-items-center">
                     <h1 class="fs-5"><?=$user['name'] ?? "name"; ?></h1>

                  </div>
               </div>

               <div class="row">
                  <div class="col">
                     <ul class="list-info-profile d-flex flex-column gap-2">
                        <li class="list">
                           <i class="fa fa-clock"></i>
                           <p>
                              bergabung sejak <b>2022</b>
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
            </div>

         </div>
      </div>
   </div>
</div>