<div class="conatiner">
    <h1 class="text-center">START</h1>

    <?php foreach ($data['text'] as $text) : ?>
        <p><?= $text['text']; ?></p>
    <?php endforeach; ?>
</div>