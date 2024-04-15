@extends('unicorn.layouts.default')
@section('content')
<!-- main start -->
<section class="main-container">
    <div class="container bg-white">
        <form style="margin: 1px 0px 16px 0px;" class="row row-cols-lg-auto g-3 align-items-center" action="{{ url('token-detail') }}" method="post" >
            {{ csrf_field() }}
            <div class="col-12">
                <input type="text" style="width: 500px;" class="form-control form-control-sm"
                        id="token"  name="token" required placeholder="请输入查询token">

            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-outline-primary btn-sm">
                    <i class="ali-icon">&#xe65c;</i> {{ __('dujiaoka.search_now') }}</button>
            </div>
            <div class="col-12">{{$token}}</div>
        </form>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>时间</th>
                    <th>模型</th>
                    <th>提示</th>
                    <th>补全</th>
                    <th>消耗额度</th>
                    <th>详情</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as  $index => $group)
                <tr>
                    <td>{{date('Y-m-d',$group['created_at']/1000)}}</td>
                    <td>{{$group['model_name']}}</td>
                    <td>{{$group['prompt_tokens']}}</td>
                    <td>{{$group['completion_tokens']}}</td>
                    <td>{{$group['quota']}}</td>
                    <td>{{$group['content']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<!-- main end -->
@stop
@section('js')
@stop
