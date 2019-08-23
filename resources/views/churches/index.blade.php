@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default" style="background-color: white">
                <div class="panel-heading" style="text-align: center;">Churches</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                              <th>
                                    Name
                              </th>
                              <th>
                                    URL
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>
                                    Delete
                              </th>
                        </thead>
                        <tbody>
                              @foreach($churches as $church)
                                    <tr>
                                          <td>{{ $church->name }}</td>
                                          <td>{{ $church->url }}</td>
                                          <td>
                                                <a href="{{ route('churches.edit', ['id' => $church->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                          </td>
                                          <td>
                                                <form action="{{ route('churches.destroy', ['id' => $church->id ]) }}" method="post">
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
