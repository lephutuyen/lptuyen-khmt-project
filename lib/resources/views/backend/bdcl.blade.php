@extends('backend.master')
@section('title','Đảm bảo chất lượng')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đảm bảo chất lượng</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Đảm bảo chất lượng</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{asset('admin/dbcl/add')}}" class="btn btn-primary">Thêm</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th width="10%">No.</th>
                                        <th width="10%">Introduction</th>
                                        <th width="60%">Title</th>
                                        <th width="15%">File</th>
                                        <th width="15%">Cate</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bdcllist as $key => $dbcl)

                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$dbcl -> dbcl_code}}</td>
                                            <td>{{$dbcl -> dbcl_title}}</td>
                                            <td><a href="{{$dbcl -> dbcl_file}}" download>{{$dbcl -> dbcl_file}}</a></td>

                                            <td>{{$dbcl -> dbcl_cate}}</td>
                                            <td>
                                                <a href="{{asset('admin/dbcl/edit/'.$dbcl->dbcl_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa phần giới thiệu này?')" href="{{asset('admin/dbcl/delete/'.$dbcl->dbcl_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
