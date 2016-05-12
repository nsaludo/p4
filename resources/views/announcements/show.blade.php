@extends('layouts.master')

@section('title')
    {{ $announcement->title }}
@stop

@section('head')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2 class='truncate'>{{ $announcement->title }}</h2>
                </div>
                <div class="panel-body">

    <h3 class='truncate'>{{ $announcement->details}}</h3>

    <a href='/announcement/edit/{{$announcement->id}}'><i class='fa fa-pencil'></i> Edit</a><br>
    <a href='/announcement/confirm-delete/{{$announcement->id}}'><i class='fa fa-trash'></i> Delete</a><br>
</div>
</div>
</div>
</div>
</div>
@stop


@section('body')
@stop
