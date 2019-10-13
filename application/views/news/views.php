<?php foreach ($news as $val): ?>
    <h1><?= $val['title'] ?></h1>
    <div class="dotted-line"></div>
    <div class="news-content"><?= $val['content'] ?></div>
<?php endforeach; ?>

    <div class="dotted-line bottom"></div>
    <a href="/news">Все новости >></a>