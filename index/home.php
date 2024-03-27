<?php
$posts = [
 [
    'id' => 1,
    'title' => 'The Road Ahead',
    'subtitle' => 'The road ahead might be paved - it might not be.',
    'author' => 'Mat Vogels',
    'date' => 'September 25, 2015',
    'button' => '',
    'icon' => '../static/images/man1.jpg',
    'img-modifier' => '../static/images/sever.jpg'
 ],
 [
    'id' => 2,
    'title' => 'From Top Down',
    'subtitle' => 'Once a year, go someplace you’ve never been before.',
    'author' => 'William Wong',
    'date' => 'September 25, 2015',
    'button' => 'ADVENTURE',
    'icon' => '../static/images/man2.jpg',
    'img-modifier' => '../static/images/celeb.jpg'
 ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Index</title>
    <style>
      ul {
        list-style-type: none;
      }
    </style>
  <link rel="stylesheet" href="styles/index-style.css">
</head>
<body>
  <header class="header">
    <div class="header-filter">
      <div class="header-bar">
        <img class="header-bar-title" src='../static/images/logobl.svg'>
  
        </img>
        <ul class="header-bar-navigation">
            <li>home</li>
            <li>categories</li>
            <li>about</li>
            <li>contact</li>
        </ul>
      </div> 
      <div class="header-main">
        <h1 class="header-main-text"> 
          Let's do it together.
        </h1>
        <h2 class="header-main-down-text">
          We travel the world in search of stories. Come along for the ride.
        </h2>
        <button class="header-main-button">
            View Latest Posts
        </button>
      </div> 
    </div>
  </header>
  <div class="posts">
    <ul class="posts-bar">
      <li>Nature</li>
      <li>Photography</li>
      <li>Relaxation</li>
      <li>Vacation</li>
      <li>Travel</li>
      <li>Adventure</li>
    </ul>
    <div class="posts-featured">
      <div class="posts-featured-title">
        <div class="posts-featured-text">
          Featured Posts
        </div>
        <div class="posts-featured-line">
        </div>
        <div class="posts-featured-container">
          <?php 
          foreach ($posts as $post) {
            include 'post_preview.php';
          }
          ?> 
        </div>
      </div>
    </div>
    <div class="posts-most-recent">
      <div class="posts-most-recent-title">
        <div class="posts-most-recent-text">
          Most Recent
        </div>
        <div class="posts-most-recent-line">
        </div>
      </div>
      <div class="posts-most-recent-container">
        <div class="most-recent-up">
          <div class="most-recent-one">
            <img class="recent-one-image">
            </img> 
            <div class="recent-one-title">
              Still Standing Tall
            </div>
            <div class="recent-one-text">
              Life begins at the end of your comfort zone.
            </div>
            <div class="recent-one-footer">
              <div class="recent-one-footer-image">
              </div>
              <div class="recent-one-footer-name">
                William Wong
              </div>
              <div class="recent-one-footer-date">
                9/25/2015
              </div>
            </div>
          </div>
          <div class="most-recent-two">
            <img class="recent-two-image">
            </img> 
            <div class="recent-two-title">
              Sunny Side Up
            </div>
            <div class="recent-two-text">
              No place is ever as bad as they tell you it's going to be.
            </div>
            <div class="recent-two-footer">
              <div class="recent-two-footer-image">
              </div>
              <div class="recent-two-footer-name">
                Mat Vogels
              </div>
              <div class="recent-two-footer-date">
                9/25/2015
              </div>
            </div>
          </div>
          <div class="most-recent-three">
            <img class="recent-three-image">
            </img> 
            <div class="recent-three-title">
              Water Falls
            </div>
            <div class="recent-three-text">
              We travel not to escape life, but for life not to escape us.
            </div>
            <div class="recent-three-footer">
              <div class="recent-three-footer-image">
              </div>
              <div class="recent-three-footer-name">
                Mat Vogels
              </div>
              <div class="recent-three-footer-date">
                9/25/2015
              </div> 
          </div>
          </div>
        </div>
        <div class="most-recent-down">
          <div class="most-recent-four">
            <img class="recent-four-image">
            </img> 
            <div class="recent-four-title">
              Through the Mist
            </div>
            <div class="recent-four-text">
              Travel makes you see what a tiny place you occupy in the world.
            </div>
            <div class="recent-four-footer">
              <div class="recent-four-footer-image">
              </div>
              <div class="recent-four-footer-name">
                William Wong
              </div>
              <div class="recent-four-footer-date">
                9/25/2015
              </div> 
            </div>
          </div>
          <div class="most-recent-five">
            <img class="recent-five-image">
            </img> 
            <div class="recent-five-title">
              Awaken Early
            </div>
            <div class="recent-five-text">
              Not all those who wander are lost.
            </div>
            <div class="recent-five-footer">
              <div class="recent-five-footer-image">
              </div>
              <div class="recent-five-footer-name">
                Mat Vogels
              </div>
              <div class="recent-five-footer-date">
                9/25/2015
              </div>  
            </div>
          </div>
          <div class="most-recent-six">
            <img class="recent-six-image">
            </img> 
            <div class="recent-six-title">
              Try it Always
            </div>
            <div class="recent-six-text">
              The world is a book, and those who do not travel read only one page.            
            </div>
            <div class="recent-six-footer">
              <div class="recent-six-footer-image">
              </div>
              <div class="recent-six-footer-name">
                Mat Vogels
              </div>
              <div class="recent-six-footer-date">
                9/25/2015
              </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <footer class="footer">
    <div class="footer-filter">
      <img class="footer-name" src='../static/images/logobl.svg'>
      </img>
      <ul class="footer-navigation">
        <li>home</li>
        <li>categories</li> 
        <li>about</li> 
        <li>contact</li>  
      </ul>
    </div>
  </footer>
</body>
</html>