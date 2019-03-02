@extends('layouts.master')

@section('header')
    <h2>資料庫</h2>
@stop


@section('content')
    
    <table class="table table-striped task-table" style="margin-top: 20px;" >

        <thead >

            <tr>
                <th>ID</th>
                <th>標題</th>
                <th>內容</th>
                <th>時間</th>
                <th >編輯</th>
                <th >刪除</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{$blog->id }}</td>
                <td>{{$blog->title }}</td>
                <td>{{$blog->description }}</td>
                <td>{{$blog->created_at }}</td>
                <td>


                    <a href="{{ route('blog.edit', $blog->id) }}"  class="btn btn-success">修改</a>

                </td>
                <td>

                    {!! Form::open(['method'=>'delete', 'route'=>['blog.destroy', $blog->id]]) !!}
                    {!! Form::submit('刪除', ['class'=>'btn btn-danger', 'onclick'=> 'return confirm("確定刪除?")']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach 
        </tbody>  
    
    
    </table>

@stop