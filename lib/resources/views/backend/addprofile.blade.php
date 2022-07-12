@extends('backend.master')
@section('title','Thêm profile')
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
                    <div class="panel-heading">Thêm Profile</div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Tên</label>
                                        <input required type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>Thông tin</label>
                                        <input required type="text" name="info" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>Năm sinh</label>
                                        <input required type="text" name="date" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>Giới tính</label>
                                        <input required type="text" name="sex" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>Email</label>
                                        <input required type="text" name="mail" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>Phone</label>
                                        <input required type="text" name="phone" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>Liên hệ</label>
                                        <input required type="text" name="contact" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>Địa chỉ</label>
                                        <input required type="text" name="address" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                        <label>Hình ảnh</label>
                                        <input required id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
                                    </div>
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <a href="{{asset('admin/profile')}}" class="btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@stop
