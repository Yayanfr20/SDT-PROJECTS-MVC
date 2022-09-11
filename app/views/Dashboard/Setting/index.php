<div class="container">
  <div class="row">
    <div class="col-12 col-lg-4">
      <?php include __DIR__."/../partials/sidenav.php"; ?>
    </div>
    <div class="col-12 col-lg-8">
      <?php include __DIR__."/../partials/nav.php"; ?>
      <div id="container" class="px-2 py-1">
        
        <div class="content">
          <h1 class="fs-5">setting menu</h1>
          <ul class="d-flex gap-2 setting-menu flex-column align-items-center">
            <li>
              <a class="d-flex justify-content-center align-items-center py-2 rounded" href="<?= url('/profile/change-username'); ?>">
                change username
              </a>
            </li>
            <li>
              <a class="d-flex justify-content-center align-items-center py-2 rounded" href="<?= url('/profile/change-password'); ?>">
                change password
              </a>
            </li>
            <li>
              <a class="d-flex justify-content-center align-items-center py-2 rounded bg-danger" href="<?= url('/profile/delete'); ?>">
                delete account
              </a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</div>