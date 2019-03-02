@extends('layouts.master')

@section('header')
    <h2>資料庫</h2>
@stop


@section('content')
    
    <br>
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

       
    </table>

@stop