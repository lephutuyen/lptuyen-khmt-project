@extends('backend.master')
@section('title','Sửa ĐBCL')
@section('main')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Sửa đảm bảo chất lượng</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Sửa ĐBCL</div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Introduction</label>
                                        <textarea style="height: 150px;" required name="code" rows="9" placeholder="Nhập nội dung..." class="form-control">{{$dbcl -> dbcl_code}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>Tiêu đề</label>
                                        <textarea style="height: 150px;" required name="title" rows="9" placeholder="Nhập nội dung..." class="form-control">{{$dbcl -> dbcl_title}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>File minh chứng</label>
                                        <input id="img" type="file" name="file" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px" src="{{asset('lib/storage/app/avatar/'.$dbcl->dbcl_file)}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Cate</label>
                                        <select required name="cate" class="form-control">
                                            <option>Document</option>
                                            <option>Link</option>
                                            <option>Image</option>
                                        </select>
                                    </div>
                                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                    <a href="{{asset('admin/dbcl')}}" class="btn btn-danger">Hủy bỏ</a>
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
