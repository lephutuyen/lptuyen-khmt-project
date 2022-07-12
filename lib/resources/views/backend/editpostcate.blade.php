@extends('backend.master')
@section('title','Sửa thể loại bài viết')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách thể loại bài viết</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Sửa thể loại bài viết
                    </div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post">
                            <div class="form-group">
                                <label>Tên thể loại bài viết:</label>
                                <input type="text" name="name" class="form-control" placeholder="Tên thể loại..." value="{{$postcatelist->post_cate_name}}">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" value="Sửa" class="form-control btn btn-primary">
                            </div>
                            <div class="form-group">
                                <a href="{{asset('admin/postcate')}}" class="form-control btn btn-danger">Hủy bỏ</a>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@stop

