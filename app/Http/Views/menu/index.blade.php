@extends('layouts.app')
@section('head')
    <link type="text/css" rel="stylesheet" href="{{url('/').'/admin/css/jquery.dataTables.min.css'}}">
    <link type="text/css" rel="stylesheet" href="{{url('/').'/admin/css/dataTables.css'}}">
@endsection
@section('content')
    <div class="w-clearfix head-div">
        <a href="{{url('/menu/create')}}" class="w-button button">NEW</a>
        <h2 class="heading2">Menus</h2>
    </div>
    <table id="myTable">
        <thead>
        <tr>
            <th>id</th>
            <th>management</th>
            <th>name</th>
            <th>description</th>
            <th>action</th>
        </tr>
        </thead>
    </table>
@endsection
@section('foot')
    <script type="text/javascript" src="{{url('/').'/admin/js/jquery.dataTables.min.js'}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            oTable = $('#myTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "/menu/get",
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'management.company_name', name: 'management.company_name'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    {data: 'actions', name: 'actions'}
                ]
            });
        });
    </script>
@endsection