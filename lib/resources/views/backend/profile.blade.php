@extends('backend.master')
@section('title','Profile')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profile</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách Profile</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{asset('admin/profile/add')}}" class="btn btn-primary">Thêm Profile</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th width="5%">No.</th>
                                        <th width="8%">Tên</th>
                                        <th width="8%">Info</th>
                                        <th width="8%">Ngày sinh</th>
                                        <th width="8%">Giới tính</th>
                                        <th width="8%">Địa chỉ Email</th>
                                        <th width="8%">Phone</th>
                                        <th width="8%">Liên hệ</th>
                                        <th width="8%">Địa chỉ</th>
                                        <th width="5%">Hình ảnh</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($proflist as $key => $profile)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$profile->prol_name}}</td>
                                            <td>{{$profile->prol_info}}</td>
                                            <td>{{$profile->prol_date}}</td>
                                            <td>{{$profile->prol_sex}}</td>
                                            <td>{{$profile->prol_mail}}</td>
                                            <td>{{$profile->prol_phone}}</td>
                                            <td>{{$profile->prol_contact}}</td>
                                            <td>{{$profile->prol_address}}</td>
                                            <td>{{$profile->prol_image}}</td>
                                            <td>
                                                <a href="{{asset('admin/profile/edit/'.$profile->prol_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa profile này?')" href="{{asset('admin/profile/delete/'.$profile->prol_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
