@extends('layouts.master')

@section('title')
    Delete Announcement
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Delete Announcement</h1>
                    </div>
                    <div class="panel-body">
                        <h4>Are you sure you want to delete <em>{{$announcement->title}}</em>?</h4>
                        <p><strong><a href='/announcement/delete/{{$announcement->id}}'>Yes, delete it.</a></strong></p>
                        <p><a href='/announcement/show/{{$announcement->id}}'>No, I changed my mind.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
