@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        <!--{!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}-->

        <select name="status">
        <option selected="selected" value="">ステータス</option>
        <option>未着手</option>
        <option>実行中</option>
        <option>完了</option>
        </select>

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
    
    
    

@endsection



