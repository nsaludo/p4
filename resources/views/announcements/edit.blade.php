@extends('layouts.master')

@section('title')
    Edit announcement {{ $announcement->title }}
@stop

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Edit Announcement</h1>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/announcement/edit') }}">
                            {!! csrf_field() !!}
                            <input type='hidden' name='id' value='{{$announcement->id}}'>
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Title</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="title" value='{{ $announcement->title }}'>

                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Details</label>

                                <div class="col-md-6">
                                    <input type="textarea" class="form-control" name="details" value="{{ $announcement->details }}">

                                    @if ($errors->has('details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i>Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
