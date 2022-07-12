@extends('backend.master')
@section('title','Bài viết')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bài viết</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Bài viết</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{asset('admin/information/add')}}" class="btn btn-primary">Thêm</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th width="10%">No.</th>
                                        <th width="25%">Tên bài viết</th>
                                        <th width="50%">Nội dung bài viết</th>
                                        <th width="15%">Danh mục</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($inforlist as $key => $info)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$info->info_title}}</td>
                                            <td>{{$info->info_content}}</td>
                                            <td>{{$info->post_cate_name}}</td>

                                            <td>
                                                <a href="{{asset('admin/information/edit/'.$info->info_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa phần giới thiệu này?')" href="{{asset('admin/information/delete/'.$info->info_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@stop
