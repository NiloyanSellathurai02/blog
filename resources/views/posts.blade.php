<!doctype html>

<title>My blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <?php foreach ($posts as $post) :?>
    <article>
        <h1>
            <a href="/posts/<?= $post->slug; ?>">
                {!! $post->title !!}
            </a>
        </h1>
        <p>
            <a href="/categories/{{ $post->category-> slug}}">{{ $post->category->name }}</a>
        </p>

        <p>{!! $post->excerpt !!}</p>
    </article>

<?php endforeach ?>

</body>
