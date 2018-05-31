@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

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

        {!! Form::submit('追加') !!}

    {!! Form::close() !!}

@endsection

