@extends('backend.master')
@section('title','Thể loại bài viết')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại bài viết</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Thêm thể loại bài viết
                    </div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post">
                            <div class="form-group">
                                <label>Tên thể loại:</label>
                                <input required type="text" name="name" class="form-control" placeholder="Tên thể loại...">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Thêm Mới" class="form-control btn btn-primary">
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách thể loại bài viết</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-primary">
                                    <th>Tên thể loại bài viết</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($postcatelist as $postcate)
                                    <tr>
                                        <td>{{$postcate->post_cate_name}}</td>
                                        <td>
                                            <a href="{{asset('admin/postcate/edit/'.$postcate->post_cate_id)}}"
                                               class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                            <a href="{{asset('admin/postcate/delete/'.$postcate->post_cate_id)}}"
                                               onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@stop
