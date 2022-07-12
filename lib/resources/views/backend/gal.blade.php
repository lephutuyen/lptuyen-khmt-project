@extends('backend.master')
@section('title','Đào tạo')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gallery</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Gallery</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{asset('admin/gallery/add')}}" class="btn btn-primary">Thêm</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th width="10%">No.</th>
                                        <th width="40%">Title</th>
                                        <th width="40%">Hình ảnh</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($gallist as $key => $gal)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$gal -> gal_title}}</td>
                                            <td>{{$gal -> gal_img}}</td>
                                            <td>
                                                <a href="{{asset('admin/gallery/edit/'.$gal->gal_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa phần giới thiệu này?')" href="{{asset('admin/gallery/delete/'.$gal->gal_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
