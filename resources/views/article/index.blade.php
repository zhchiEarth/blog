@component('layouts.master')

    <div class="row">
        <section class="mt50 mb50">
            <div class="col-sm-12">
                {{-- <h3>最新文章</h3> --}}
                <div class="articles-list">
                    @foreach ($articles as $article)
                        <div class="blog-list panel-group pb20">
                        <header class="blog-heading">
                            <a target="_blank" href="categories/{{ $article->category_id }}" class="title-type">{{ $categories[$article->category_id] }}<i></i></a>
                            <h4><a href="{{ url('articles/'. $article->id) }}">{{ $article->title }} </a></h4>
                        </header>
                         <div class="blog-body">
                            <p>{{ $article->slug }}</p>
                        </div>
                        <div class="blog-footer">
                          <span>zhchi</span>
                          <span>发表于</span> <time>{{ $article->updated_at->diffForHumans() }}</time>
                            <span>阅读({{ $article->view_count }})</span>
                            {{-- <span>评论(<a href="javascript:;" >{{ $article->comment_count }}</a>)</span> --}}
                            <span>标签：
                                <a href="categories/{{ $article->category_id }}">{{ $categories[$article->category_id] }}</a>
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        {{ $articles->links('pagination.default') }}
         </div>
    </div>
@endcomponent