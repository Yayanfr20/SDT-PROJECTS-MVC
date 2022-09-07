<div class="d-flex justify-content-center head" style="background-image: url(<?= BASEURL; ?>/img/bg2-gif.gif);">

   <div class="mobile">
      <?Flasher::flash(); ?>
      <form action="<?=BASEURL; ?>/Login/autentikasi" method="post">
         <h1 class="text-center" style="color: var(--skyblue)">SDT PROJECT</h1>
         <div class="form-authenticate d-flex flex-column gap-2">
            <div class="form-floating mb-2">
               <input autofocus="on" type="text" class="input form-control py-2 px-3" name="username" id="username" placeholder="username">
               <label for="username">username</label>
            </div>
            <div class="form-floating mb-2">
               <input type="password" class="input form-control py-2 px-3" name="password" id="password" placeholder="Password">
               <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-outline-info">
               submit
            </button>
         </div>
      </form>
   </div>

   <div class="desktop">
      <h1 class="text-center" style="color: var(--skyblue)">SDT PROJECTS</h1>
      <form action="<?=BASEURL; ?>/Login/autentikasi" method="post">
         <div class="form-authenticate d-flex flex-column gap-2">
            <div class="form-floating mb-2">
               <input autofocus="on" type="text" class="input form-control py-2 px-3" name="username" id="username" placeholder="username">
               <label for="username">username</label>
            </div>
            <div class="form-floating mb-2">
               <input type="password" class="input form-control py-2 px-3" name="password" id="password" placeholder="Password">
               <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-outline-info">
               submit
            </button>
         </div>
      </form>
   </div>
</div>