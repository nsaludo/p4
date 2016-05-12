@extends('layouts.master')

@section('title')
    {{ $announcement->title }}
@stop

@section('head')
@stop

@section('content')

    <h1 class='truncate'>{{ $announcement->title }}</h1>

    <h2 class='truncate'>{{ $announcement->details}}</h2>

    <a href='/announcement/edit/{{$announcement->id}}'><i class='fa fa-pencil'></i> Edit</a><br>
    <a href='/announcement/confirm-delete/{{$announcement->id}}'><i class='fa fa-trash'></i> Delete</a><br>

@stop


@section('body')
@stop
