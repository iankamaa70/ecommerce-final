@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default" style="background-color: white">
                <div class="panel-heading" style="text-align: center;">Videos</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                              <th>
                                    Image
                              </th>
                              <th>
                                    Name
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>
                                    Delete
                              </th>
                        </thead>
                        <tbody>
                              @foreach($videos as $video)
                                    <tr>
                                          <td><img src="{{$video->image}}" alt="{{ $video->image }}" width="130px" height="90px"></td>
                                          <td>{{ $video->name }}</td>
                                          <td>
                                                <a href="{{ route('videos.edit', ['id' => $video->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                          </td>
                                          <td>
                                                <form action="{{ route('videos.destroy', ['id' => $video->id ]) }}" method="post">
                                                      {{ csrf_field() }}
                                                      {{ method_field('DELETE') }}
                                                      <button class="btn btn-xs btn-danger">Delete</button>
                                                </form>
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
