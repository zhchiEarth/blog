@component('layouts.master')

    <section class="mt50 mb50">
        @foreach ($categories as $category)
        <div class="row">
            <div class="category-list">
              <h3>{{ $category->name }} <small>{{ $category->article_count }}</small></h3>
                <ul class="list-group">
                   @foreach ($category->articles as $article)
                         <li class="list-group-item">
                            <a href="{{ url('articles/'. $article->id) }}">{{ $article->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </section>

@endcomponent