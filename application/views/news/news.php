
    <h1>Новости</h1>
    <div class="dotted-line"></div>

 <?php if (empty($news)): ?>
    <p>Список новостей пуст</p>
 <?php else: ?>
 <?php foreach ($news as $val):
    $timestamp= $val['idate'];
    $idate = gmdate("d.m.Y", $timestamp);
 ?>

        <div class="news-block">
          <span class="date"><?= $idate ?></span>
          <a href="/news/view/<?= $val['id'] ?>" class="title"><?= $val['title'] ?></a>
          <p><?= $val['announce'] ?></p>
        </div>

<?php endforeach; ?>

    <div class="dotted-line bottom"></div>
    <div class="pages">Странницы:</div>

<?php for ($i = 1; $i <= $pagesCount; $i++) { ?>

     <a href="/news/page/<?= $i ?>" class="pages-number"><?= $i ?></a>

<?php } ?>
<?php endif; ?>