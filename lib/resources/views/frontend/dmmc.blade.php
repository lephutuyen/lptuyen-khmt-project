@extends('frontend.home-master')
@section('title','Danh mục minh chứng')
@section('home')

    <!-- section -->
{{--    <div class="About-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="aboutheading">--}}
{{--                        <h3>DANH MỤC MINH CHỨNG<span class="orange_color"> AUN-QA</span></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive" >
                            <table class="table table-bordered" style="margin-top:20px; max-width: 80%; margin-left: 150px">
                                <thead>
                                <tr class="bg-primary" style="color: #FFFFFF;font-weight: 600; font-size: 15px">
                                    <th width="10%">No.</th>
                                    <th width="15%">Introduction</th>
                                    <th width="60%">Title</th>
                                    <th width="15%">Cate</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dmmclist as $key => $dmmc)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$dmmc -> dbcl_code}}</td>
                                        <td>{{$dmmc -> dbcl_title}}</td>
                                        <td>{{$dmmc -> dbcl_cate}}</td>
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

@stop
