<?php include 'config.php' ?>

<body>
  <?php include('header.php'); ?>

  <main role="main" class="container">

    <div class="row">
      <div class="col-sm-8 blog-main">

  
        <?php 

        $sql1= "SELECT * FROM posts ORDER BY created_at DESC";
        $statement = $connection->prepare($sql1);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $statement->fetchAll();

        ?>

        <?php foreach ($posts as $post) { ?>

          <article class="va-c-article">
            <header>
              <h1><a href="single-post.php?post_id=<?php echo ($post['id']) ?>"><?php echo ($post['title']) ?></a></h1>
              <div class="va-c-article__meta"> <?php echo ($post['created_at']) ?> by <?php echo ($post['author']) ?></div>
            </header>

            <div>
              <p><?php echo ($post['body']) ?></p>
            </div>
          </article>

        <?php } ?>

        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
      
       
      </div>
      <?php include 'sidebar.php'; ?>
        </div>
        </main>
        <?php include 'footer.php'; ?>
</body>

