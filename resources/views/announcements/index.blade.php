@extends('layouts.master')

@section('head')
@stop

@section('title')
    All announcements
@stop

@section('content')

    <h1>All Announcements</h1>

    @if(sizeof($announcements) == 0)
        You have not added any announcements, you can <a href='/announcement/create'>add a announcement now to get started</a>.
    @else
        <div id='announcements' class='cf'>
            @foreach($announcements as $announcement)
                <section class='announcement'>

                    <a href='/announcement/show/{{$announcement->id}}'><h2 class='truncate'>{{ $announcement->title }}</h2></a>

                    <h3 class='truncate'>{{ $announcement->details }} </h3>

                    <a href='/announcement/edit/{{$announcement->id}}'><i class='fa fa-pencil'></i> Edit</a><br>
                    <a href='/announcement/show/{{$announcement->id}}'><i class='fa fa-eye'></i> View</a><br>

                </section>
            @endforeach
        </div>
    @endif

@stop
