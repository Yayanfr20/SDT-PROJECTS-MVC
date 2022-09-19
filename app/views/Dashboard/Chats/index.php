<div class="container">
  <div class="row">
    <div class="col-12 col-lg-4">
      <?php include __DIR__."/../partials/sidenav.php"; ?>
    </div>
    <div class="col-12 col-lg-8">
      <?php include __DIR__."/../partials/nav.php"; ?>
      <div id="container" class="px-2 py-1">
        
        <div class="content">
          <!-- list online user's -->
          <div class="row">
            <div class="col">
              <div class="d-flex gap-2 list-online">
                <div class="avatar">
                  <img src="//github.com/fiandev.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At assumenda cumque ratione, excepturi atque nemo quam accusamus dolores. Ipsa totam nisi vitae itaque perspiciatis consectetur aperiam non adipisci, dolorum mollitia!</p>
                  <div class="info online"></div>
                </div>
                <div class="avatar">
                  <img src="//github.com/fiandev.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At assumenda cumque ratione, excepturi atque nemo quam accusamus dolores. Ipsa totam nisi vitae itaque perspiciatis consectetur aperiam non adipisci, dolorum mollitia!</p>
                  <div class="info online"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- global chats section -->
          <div class="chats">
            <div class='chat d-flex flex-column self'>
              <div class='chat-content'>
                <div class='author'>
                  <img class="avatar" src="//github.com/fiandev.png" />
                  fiandev
                </div>
                <div class="message">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam at, perferendis aperiam impedit eveniet voluptatem qui eos eius quasi cum tempore explicabo expedita libero non, reiciendis atque, itaque ipsa.
                </div>
              </div>
              <p data-time="" class='date'> just now </p>
            </div>
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
  const url = "<?= url('/global-chat/realtime'); ?>"
  const uid = <?= $user["id"]; ?>
  
  const sendStatus = (uid, action) => {
    $.post(url, {
      uid: uid,
      action: action
    })
  }
  
  $(document).ready(function(){
    sendStatus(uid, "online")
  })
  
  $(window).bind("beforeunload", function(){
    sendStatus(uid, "offline")
  })
</script>