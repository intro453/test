<div class="entry-meta">
    <ul>
        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                href="{{ route('landing.blog_article', $article->slug) }}">Admin</a></li>
        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                href="{{ route('landing.blog_article', $article->slug) }}">
                <time
                    datetime="{{ $article->formatted_published_at }}">{{ $article->human_published_at }}</time>
            </a></li>
    </ul>
</div>
