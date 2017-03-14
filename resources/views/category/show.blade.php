@component('layouts.master')

    <section class="mt50 mb50">
        <div class="row">
            <div class="category-list">
              <h3>{{ $category->name }} <small>{{ $category->article_count }}篇文章</small></h3>
                <ul class="list-group">
                   @foreach ($category->articles as $article)
                         <li class="list-group-item">
                            <a href="{{ url('articles/'. $article->id) }}">{{ $article->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

@endcomponent