@extends('layouts.master')

@section('header')
    <h2>Edit Blog</h2>
@stop

@section('content')
    {!! Form::model($blog, ['route'=>['blog.update', $blog->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}
          <div class="form-group">
            {!! Form::label('title', '標題', ['class'=>'control-lable col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('title', '', ['class'=>'form-control']) !!}
                {!! $errors->has('title')?$error->first('title'):'' !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('description', '內容', ['class'=>'control-lable col-md-2']) !!}
             <div class="col-md-10">
                {!! Form::text('description', '', ['class'=>'form-control']) !!}
                {!! $errors->has('description')?$error->first('description'):'' !!}

            </div>
            <div class="col-md-offset-2 col-md-10">
                <br>
                {!! Form::submit('修改', ['class'=>'btn btn-primary']) !!}
            </div>
            
        </div>

    </form>
    {!! Form::close() !!}
@stop