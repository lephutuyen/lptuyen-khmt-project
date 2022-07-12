@extends('backend.master')
@section('title','Đào tạo')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đào tạo</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Đào tạo</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{asset('admin/introduce/add')}}" class="btn btn-primary">Thêm</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th width="14%">Title 1</th>
                                        <th width="14%">Mô tả 1</th>
                                        <th width="14%">Title 2</th>
                                        <th width="14%">Mô tả 2</th>
                                        <th width="14%">Title 3</th>
                                        <th width="14%">Mô tả 3</th>
                                        <th width="14%">Hình ảnh</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($introlist as $intro)
                                        <tr>
                                            <td>{{$intro->intro_title}}</td>
                                            <td>{{$intro->intro_text}}</td>
                                            <td>{{$intro->intro_title_2}}</td>
                                            <td>{{$intro->intro_text_2}}</td>
                                            <td>{{$intro->intro_title_3}}</td>
                                            <td>{{$intro->intro_text_3}}</td>
                                            <td>{{$intro->intro_img}}</td>
                                            <td>
                                                <a href="{{asset('admin/introduce/edit/'.$intro->intro_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa phần giới thiệu này?')" href="{{asset('admin/introduce/delete/'.$intro->intro_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
