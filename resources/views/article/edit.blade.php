@component('layouts.master')

    <section class="blog-pages">

  <div class="col-md-12">

      <div class="panel-body">

            <h2 class="text-center"> 创作文章</h2>
            <hr>
                <form method="POST" action="{{ url('articles/'. $article->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('PATCH ') }}

                  <div class="form-group">
                    <select  class="form-control" name="category_id">
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $category->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>


                <div class="form-group">
                  <input type="text" class="form-control" name="title" placeholder="请填写标题" value="{{ $article->title }}">
                </div>

                <div class="form-group">
                    <markdown content="{{ $article->content }}"></markdown>
                </div>

                <div class="form-group status-post-submit">
                  <button class="btn btn-primary" type="submit" name="is_draft" value="1" id="">发 布</button>

                                            &nbsp;&nbsp;or&nbsp;&nbsp;
                        <button class="btn btn-basic" type="submit" name="is_draft" value="0">保存草稿</button>
                                    </div>
            </form>
      </div>

  </div>
</section>


@endcomponent