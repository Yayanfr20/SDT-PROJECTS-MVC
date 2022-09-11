<div class="bg-sidenav d-lg-none"></div>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidenav">
   <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-5">
         SDT Projects
      </span>
   </a>
   <hr>
   <ul class="nav nav-pills d-flex flex-column gap-2 mb-auto">
      <li class="nav-item">
         <a href="<?= url('/dashboard'); ?>" class="nav-link text-white <?= route('/dashboard') ? 'active' : ''; ?>" aria-current="page">
            <i class="fa fa-home me-2"></i>
            Home
         </a>
      </li>
      <li>
         <a href="<?= url('/profile'); ?>" class="nav-link text-white <?= route('/profile') ? 'active' : ''; ?>">
            <i class="fa fa-user me-2"></i>
            profile
         </a>
      </li>
      <li>
         <a href="#" class="nav-link text-white <?= route('/global-chat') ? 'active' : ''; ?>">
            <i class="fa fa-comment me-2"></i>
            Global chat
         </a>
      </li>
      <li>
         <a href="<?= url('/post-project'); ?>" class="nav-link text-white <?= route('/post-project') ? 'active' : ''; ?>">
            <i class="fa fa-file me-2"></i>
            post project
         </a>
      </li>
      <li>
         <a href="#" class="nav-link text-white <?= route('/teams') ? 'active' : ''; ?>">
            <i class="fa fa-users me-2"></i>
            teams
         </a>
      </li>
      <li>
         <a href="#" class="nav-link text-white <?= route('/notification') ? 'active' : ''; ?>">
            <i class="fa fa-bell me-2"></i>
            notification
         </a>
      </li>
      <li>
         <a href="<?= url('/setting'); ?>" class="nav-link text-white <?= route('/setting') ? 'active' : ''; ?>">
            <i class="fa fa-gear me-2"></i>
            setting
         </a>
      </li>
   </ul>
   <hr>
   <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
         <img src="<?= $user->gambar ?? "https://github.com/fiandev.png"; ?>" alt="" width="32" height="32" class="rounded-circle me-2">
         <strong><?=$user['name'] ?? "unknown";?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
         <li>
            <a class="dropdown-item d-flex align-items-center gap-2" href="<?= url('/profile/edit'); ?>">
               <i class="fa fa-gear"></i>
               edit profile
            </a>
         </li>
         <li>
            <a class="dropdown-item d-flex align-items-center gap-2" href="#">
               <i class="fa fa-file"></i>
               20 posts
            </a>
         </li>
         <li><hr class="dropdown-divider"></li>
         <li>
            <a class="dropdown-item d-flex align-items-center gap-2" href="<?=BASEURL ?>/Dashboard/logout">
               <i class="fa-solid fa-person-walking-arrow-right"></i>
               Sign out
            </a>
         </li>
      </ul>
   </div>
</div>