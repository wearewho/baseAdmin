@extends('layouts.app')

@section('content')
    <div class="row">      
        <div class="col-md-12">                       
            <div class="box box-danger">
            {!! Form::open(['method' => 'POST', 'route' => ['convert'], 'files' => true]) !!}
                <div class="box-header with-border">
                    <h3 class="box-title">Dashboard</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile" name="file">

                    <p class="help-block">Example block-level help text here.</p>
                    </div>
                </div>
                <div class="box-footer">
                {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
