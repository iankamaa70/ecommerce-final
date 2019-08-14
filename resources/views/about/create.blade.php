@extends('layouts.app')

@section('content')
<div class="container">
          @if ($errors->any())
            <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-8" style="padding-top: 20px">
                        <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                        </div>
                    </div>
                <div class="col-md-2"></div>
            </div>            
          @endif
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Create New Category</div>

                <div class="panel-body">
                    <form action="{{ route('abouts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                              <label for="description">Content</label>
                              <textarea name="content" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                        </div>
                        
                        <div class="form-group">
                              <button type="submit" class="form-control btn btn-success">Save</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
  <script>
  tinymce.init({
        selector:"textarea",
        plugins: "image link code emoticons"

});
</script>
@endsection