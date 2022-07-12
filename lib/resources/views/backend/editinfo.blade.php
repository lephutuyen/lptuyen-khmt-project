@extends('backend.master')
@section('title','Sửa bài viết')
@section('main')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa bài viết</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Sửa bài viết</div>
                    <div class="panel-body">
                        @include('errors.note')
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Tên bài viết</label>
                                        <textarea style="height: 150px;" required name="title" rows="9" placeholder="Nhập nội dung..." class="form-control">{{$infolist -> info_title}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>Nội dung bài viết</label>
                                        <textarea style="height: 150px;" required name="text" rows="9" placeholder="Nhập nội dung..." class="form-control">{{$infolist -> info_content}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label>Hình ảnh</label>
                                        <input id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px" src="{{asset('lib/storage/app/informations/'.$infolist->info_image)}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Thể loại</label>
                                        <select required name="postcate" class="form-control">
                                            @foreach($postcatelist as $postcate)
                                                <option value="{{$postcate->post_cate_id}}">{{$postcate->post_cate_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                    <a href="{{asset('admin/information')}}" class="btn btn-danger">Hủy bỏ</a>
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
