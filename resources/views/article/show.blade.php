@component('layouts.master')

@section('content')
    <div class="row">
    <section>
        <div class="container">
            <div class="row article">
                <div class="col-sm-12 mb50">
                    <header class="text-center article-header">
                        <h3>{{ $article->title }}</h3>
                        <p class="meta">
                            <span>zhchi发表于<time>{{ $article->updated_at->diffForHumans() }}</time></span>
                            <span>分类：<a href=" {{ url('categories/'. $article->category->id) }}" class="title-type">{{ $article->category->name }}</a></span>
                            <span>阅读({{ $article->view_count }})</span>
                            {{-- <span>评论({{ $article->content }}条评论)</span> --}}
                        </p>
                    </header>
                    <div class="article-body">
                        <div class="markdown">
                            <parse content="{{ $article->content }}"></parse>
                            {{-- {{ $article->content }} --}}
                        </div>
                    </div>
                {{-- <nav aria-label="...">
                  <ul class="pager">
                    <li class="previous"><a href="#"><span aria-hidden="true">上一篇：</span> 基于gulp前端静态站点结构</a></li>
                    <li class="next"><a href="#">基于gulp前端静态站点结构 <span aria-hidden="true">下一篇</span></a></li>
                  </ul>
                </nav> --}}
            </div>
            </div>
        </div>
    </section>
    </div>
@endcomponent