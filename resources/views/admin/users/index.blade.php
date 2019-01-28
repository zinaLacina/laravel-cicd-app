@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Permission</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </thead>
                <tbody>
                    @if($users->count()>0)
                        @foreach ($users as $user)
                            
                        <tr>
                        <td>
                            <img src="{{asset($user->profile->avatar)}}" alt="{{$post->title}}" width="50px"/>
                            {{-- {{$post->featured}} --}}
                        </td>
                            <td> {{$user->name}} </td>
                        
                            <td>
                            <td> Permission </td>
                        
                                    <td>
                                <a href="{{ route('post.edit',['id'=>$user->id]) }}" class="btn btn-xs btn-info">
                                    edit
                                </a>
                            </td>
                            <td>
                                    <a href="{{ route('post.delete',['id'=>$ser->id]) }}" class="btn btn-xs btn-danger">
                                        delete
                                    </a>
                                </td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                            <td colspan="5" class="text-center">No yet users</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection