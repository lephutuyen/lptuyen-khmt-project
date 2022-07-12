@extends('backend.master')
@section('title','Sửa bài báo')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bài báo</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Sửa bài báo</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Tên tác giả</label>
                                        <input required type="text" name="author" class="form-control"
                                               value="{{$product->prod_author}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Tên bài báo</label>
                                        <input required type="text" name="acticle" class="form-control"
                                               value="{{$product->prod_acticle}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Nhà xuất bản</label>
                                        <input required type="text" name="publisher" class="form-control"
                                               value="{{$product->prod_publisher}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Năm xuất bản</label>
                                        <input required type="text" name="year" class="form-control"
                                               value="{{$product->prod_year}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Vị trí</label>
                                        <input required type="text" name="chapter" class="form-control"
                                               value="{{$product->prod_chapter}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Thể loại</label>
                                        <select required name="cate" class="form-control">
                                            @foreach($listcate as $cate)
                                                <option value="{{$cate->cate_id}}"
                                                @if($product->prod_cate == $cate->cate_id) selected
                                                    @endif>{{$cate->cate_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label>Giảng viên</label>
                                        <select required name="profile" class="form-control">
                                            @foreach($proflist as $profile)
                                                <option value="{{$profile->prol_id}}"
                                                        @if($product->prod_profile == $profile->prol_id) selected
                                                    @endif>{{$profile->prol_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{asset('admin/product')}}" class="btn btn-danger">Hủy bỏ</a>
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
