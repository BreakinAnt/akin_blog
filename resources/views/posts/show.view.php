<?php require("resources/views/partials/head.php") ?>
<?php require("resources/views/partials/nav.php") ?>

<main>
  <div class="post-header" style="--bg-image: url('<?= getImage($post->banner_path) ?>')">
    <img class="post-banner full" src="<?= getImage($post->banner_path) ?>">
  </div>

  <div class="container">
    <div class="row justify-content-center">
          <article class="post-view">
            <h1 class="mb-3 text-dark fw-bold"><?= $post->title ?></h1>
            
            <p class="text-muted mb-4">
              By <span class="fw-semibold"><?= $post->user->name ?></span> • <?= formatDate($post->date) ?>
            </p>
            
            <p>
              <?= $post->content ?>
            </p>

            <div class="post-footer">
              <div>
                <img class="circle medium" src="<?= $post->user->photo_path ?>"/>
              </div>
              <div>
                <h4><?= $post->user->name ?></h4>
                <p><?= $post->user->bios ?></p>
              </div>
            </div>

            <!-- <div class="mt-5">
              <script src="https://utteranc.es/client.js"
                  repo="BreakinAnt/akin_blog"
                  issue-term="pathname"
                  theme="github-light"
                  crossorigin="anonymous"
                  async>
              </script>
            </div> -->
          </article>
        </div>
  </div>
</main>

<!-- PrismJS for syntax highlighting -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>

<?php require("resources/views/partials/footer.php") ?>
<?php require("resources/views/partials/end.php") ?>