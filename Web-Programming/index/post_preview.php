<div class="posts-featured-post">
  <img class="posts-featured-image" src=<?= $post['img-modifier'] ?>>
    <p class="featured-title">
      <?= $post['title'] ?>
    </p>
    <a class= 'featured-text' title='<?= $post['title'] ?>' href='/post.php?id=<?= $post['id'] ?>'>
      <?= $post['subtitle'] ?>
    </a>
    <div class="featured-footer">
      <img class="featured-footer-image" src=<?= $post['icon'] ?>></img>
      <p class="featured-footer-name">
        <?= $post['author'] ?> 
      </p>
      <p class="featured-footer-date">
        <?= $post['date'] ?>
      </p>
    </div>
  </img>
</div>
            
