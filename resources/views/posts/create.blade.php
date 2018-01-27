@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection



@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        
        {!! Form::open(array('route' => 'posts.store')) !!}

            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'maxlength' => '255')) }}

            {{Form::label('body', "Post Body:") }}
            {{Form::textarea('body', null, array('class' => 'form-control')) }}

            {{Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

        {!! Form::close() !!}

        <hr>


    

    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection