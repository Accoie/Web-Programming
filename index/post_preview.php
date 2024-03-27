
        <div class="posts-featured-post">
          <img class="posts-featured-image" src=<?= $post['img-modifier'] ?>>
                <div class="featured-title">
                  <?= $post['title'] ?>
                </div>
                <div class="featured-text">
                <a class= 'text' title='<?= $post['title'] ?>' href='/post.php?id=<?= $post['id'] ?>'>
                  <?= $post['subtitle'] ?>
                </a>
                </div>
                <div class="featured-footer">
                <img class="featured-footer-image" src=<?= $post['icon'] ?>></img>
                <div class="featured-footer-name">
                  <?= $post['author'] ?> 
                </div>
                <div class="featured-footer-date">
                  <?= $post['date'] ?>
                </div>
           
                </div>
          </img>
        </div>
            
