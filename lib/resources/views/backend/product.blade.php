@extends('backend.master')
@section('title','Danh sách bài báo')
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
					<div class="panel-heading">Danh sách bài báo</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm bài báo</a>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>No.</th>
											<th width="10%">Tác giả</th>
                                            <th width="30%">Bài báo</th>
											<th width="20%">Nhà xuất bản</th>
											<th width="10%">Năm xuất bản</th>
											<th width="10%">Vị trí</th>
											<th width="10%">Thể loại</th>
                                            <th width="15%">Giảng viên</th>
										</tr>
									</thead>
									<tbody>
                                    @foreach($productlist as $key => $product)
										<tr>
											<td>{{$key+1}}</td>
											<td>{{$product->prod_author}}</td>
                                            <td>{{$product->prod_acticle}}</td>
											<td>{{$product->prod_publisher}}</td>
                                            <td>{{$product->prod_year}}</td>
                                            <td>{{$product->prod_chapter}}</td>
                                            <td>{{$product->cate_name}}</td>
                                            <td>{{$product->prol_name}}</td>
											<td>
												<a href="{{asset('admin/product/edit/'.$product->prod_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn có chắc chắn muốn xóa bài báo?')" href="{{asset('admin/product/delete/'.$product->prod_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
