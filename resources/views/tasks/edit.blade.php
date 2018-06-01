@extends('layouts.app')

@section('content')

    <h1 class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">id: {{ $task->id }} のタスク編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
            <div class="form-group">
                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <select name="status" class="form-control">
                        <option selected="selected" value="">ステータス</option>
                        <option>未着手</option>
                        <option>実行中</option>
                        <option>完了</option>
                    </select>
                <!--/.col-sm-10---></div>
            <!--/form-group--></div>
                
        
                {!! Form::submit('更新', ['class' => 'btn btn-info']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection



