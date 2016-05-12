@extends('layouts.master')

@section('title')
Add a new announcement
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Add a new announcement</h1>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/announcement/create') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="title" class="form-control" name="title" value="{{ old('title') }}">

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
                                <input type="details" class="form-control" name="details" value="{{ old('title') }}">

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
                                    <i class="fa fa-btn fa-sign-in"></i>Add announcement
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
