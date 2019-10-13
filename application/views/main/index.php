<div class="news">
  <div class="news-wrap">
    <h1>Новости</h1>
    <div class="dotted-line"></div>

      <?php foreach ($news as $val):
          $timestamp= $val['idate'];
          $idate = gmdate("d.m.Y", $timestamp);
          ?>

        <div class="news-block">
          <span class="date"><?= $idate ?></span>
          <a href="views.php?id=<?= $val['id'] ?>" class="title"><?= $val['title'] ?></a>
          <p><?= $val['announce'] ?></p>
        </div>

      <?php endforeach; ?>

    <div class="dotted-line bottom"></div>
    <div class="pages">Странницы:</div>

      <?php for ($i = 1; $i <= $pagesCount; $i++) {
          if ($page == $i) {
              $class = ' class="pages-number active"';
          } else {
              $class = ' class="pages-number"';
          }
          echo "<a href=\"?page=$i\"$class>$i</a>";
      }
      ?>

  </div>
</div>
