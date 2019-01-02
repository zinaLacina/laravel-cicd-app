@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Category name</th>
            <th>Editing</th>
            <th>Deleting</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
             
            <tr>
                <td> {{$category->name}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection