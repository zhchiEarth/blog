@component('layouts.home')

    <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="./img/user4-128x128.jpg" alt="User profile picture">
              <h3 class="profile-username text-center">Nina Mcintire</h3>
              <p class="text-muted text-center">Software Engineer</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>
              <a href="javascript:;" class="btn btn-primary btn-block"><b>关注</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>
              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">专栏文章</div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($articles as $article)
                            <li class="list-group-item">
                              <a href="{{ url('articles/'. $article->id) }}" title="{{ $article->title }}">
                                {{ $article->title }}
                              </a>
                              <span class="meta">我的专栏
                                <span> ⋅ </span>
                                {{ $article->vote_count }} 点赞
                                <span> ⋅ </span>
                                {{ $article->comment_count }} 回复
                                <span> ⋅ </span>
                                <span>{{ $article->updated_at->diffForHumans() }}</span>
                                <span >
                                    <a href="{{ url("articles/{$article->id}/edit") }}" class="glyphicon glyphicon-pencil"></a>
                                </span>
                              </span>
                            </li>
                        @endforeach
                  </ul>
                  <div class="text-center">
                      <a href="{{ url('articles/create') }}" class="btn btn-primary">创建文章</a>
                  </div>
                </div>
            </div>

            <div class="panel panel-default my-images">
                <div class="panel-heading">我的图片</div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($images as $image)
                          <li class="list-group-item"><img src="./{{ $image->url }}"></li>
                        @endforeach
                    </ul>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">上传图片</button>
                  </div>
            </div>


            </div>
        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ url('images') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">上传图片</h4>
      </div>

      <div class="modal-body">
          <div class="form-group">
            <label for="file" class="control-label">图片</label>
            <input type="file" class="form-control" id="file" name="file">
          </div>
          <div class="form-group">
            <label for="file_name" class="control-label">图片名</label>
            <input type="text" class="form-control" id="file_name" name="file_name">
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-primary">确定</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endcomponent
