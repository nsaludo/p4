@extends('layouts.master')

@section('title')
    Delete Announcement
@stop

@section('content')
    <h1>Delete Announcement</h1>
    <p>Are you sure you want to delete <em>{{$announcement->title}}</em>?</p>
    <p><strong><a href='/announcements/delete/{{$announcement->id}}'>Yes, delete it.</a></strong></p>
    <p><a href='/announcement/show/{{$announcement->id}}'>No, I changed my mind.</a></p>
@stop
