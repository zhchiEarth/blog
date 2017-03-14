@component('layouts.master')

    <section class="blog-pages">

  <div class="col-md-12 panel">

      <div class="panel-body">

            <h2 class="text-center"> 创作文章</h2>
            <hr>
                <form method="POST" action="{{ url('articles') }}  ">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <select  class="form-control" name="category_id">
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>


                <div class="form-group">
                    <input class="form-control" id="topic-title" placeholder="请填写标题" name="title" type="text" value="" required="require">
                </div>



                <div class="form-group">
                    <markdown content='Please'></markdown>
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