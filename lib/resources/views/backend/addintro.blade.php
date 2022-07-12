@extends('backend.master')
@section('title','Thêm introduce')
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
                    <div class="panel-heading">Thêm đào tạo</div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Title 1</label>
                                        <textarea style="height: 150px;" required name="title" rows="9" placeholder="Nhập nội dung..." class="form-control"></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>Mô tả 1</label>
                                        <textarea style="height: 150px;" required name="name" rows="9" placeholder="Nhập nội dung..." class="form-control"></textarea>
{{--                                        <textarea style="height: 150px;" required name="name" rows="9" placeholder="Nhập nội dung..." class="ckeditor"></textarea>--}}
{{--                                        <script type="text/javascript">--}}
{{--                                            var editor= CKEDITOR.replace('name',{--}}
{{--                                                language:'vi',});--}}
{{--                                        </script>--}}
                                    </div>
                                    <div class="form-group" >
                                        <label>Title 2</label>
                                        <textarea style="height: 150px;" required name="title2" rows="9" placeholder="Nhập nội dung..." class="form-control"></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>Mô tả 2</label>
                                        <textarea style="height: 150px;" required name="name2" rows="9" placeholder="Nhập nội dung..." class="form-control"></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>Title 3</label>
                                        <textarea style="height: 150px;" required name="title3" rows="9" placeholder="Nhập nội dung..." class="form-control"></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>Mô tả 3</label>
                                        <textarea style="height: 150px;" required name="name3" rows="9" placeholder="Nhập nội dung..." class="form-control"></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>Hình ảnh</label>
                                        <input required id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
                                    </div>
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <a href="{{asset('admin/introduce')}}" class="btn btn-danger">Hủy bỏ</a>
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
