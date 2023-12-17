<!doctype html>

<title>My blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <?php foreach ($posts as $post) :?>
    <article>
        <h1>
            <a href="/posts/<?= $post->id; ?>">
                <?= $post->title ?>
            </a>
        </h1>

        <p><?=$post->excerpt ?></p>
    </article>

<?php endforeach ?>

</body>
