@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Post title name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </thead>
                <tbody>
                    @if($posts->count()>0)
                        @foreach ($posts as $post)
                            
                        <tr>
                        <td>
                            <img src="{{$post->featured}}" alt="{{$post->title}}" width="50px"/>
                            {{-- {{$post->featured}} --}}
                        </td>
                            <td> {{$post->title}} </td>
                        
                            <td>
                                <a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-xs btn-info">
                                    edit
                                </a>
                            </td>
                            <td>
                                    <a href="{{ route('post.delete',['id'=>$post->id]) }}" class="btn btn-xs btn-danger">
                                        delete
                                    </a>
                                </td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                            <td colspan="5" class="text-center">No yet posts</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection