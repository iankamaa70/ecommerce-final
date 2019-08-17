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
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;"><h4><b>Settings</b></h4></div>

                <div class="panel-body">
                    <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <h5 style="text-align: center;"><b>Homepage</b></h5>
                        <div class="form-group">
                              <label for="name">Text 1</label>
                              <input type="text" name="homepage_text1" class="form-control" value="{{ $settings->homepage_text1 }}">
                        </div>
                        <div class="form-group">
                              <label for="description">Text 2</label>
                              <textarea name="homepage_text2" id="description" cols="20" rows="5" class="form-control">{{ $settings->homepage_text2 }}</textarea>
                        </div>
                        <div class="form-group">
                              <label for="name">Youtube Video</label>
                              <input type="text" name="homepage_youtube" class="form-control" value="{{ $settings->homepage_youtube }}">
                        </div>

                        <br>
                        <h5 style="text-align: center;"><b>Paypal</b></h5>
                        <div class="form-group">
                              <label for="name">CMD</label>
                              <input type="text" name="paypal_cmd" class="form-control" value="{{ $settings->paypal_cmd }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Email</label>
                              <input type="email" name="paypal_email" class="form-control" value="{{ $settings->paypal_email }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Paypal Item Name</label>
                              <input type="text" name="paypal_item_name" class="form-control" value="{{ $settings->paypal_item_name }}">
                        </div>
                        <div class="form-group">
                              <label for="description">Text</label>
                              <textarea name="paypal_text" id="description" cols="20" rows="5" class="form-control">{{ $settings->paypal_text }}</textarea>
                        </div>

                        <br>
                        <h5 style="text-align: center;"><b>Contact</b></h5>
                        <div class="form-group">
                              <label for="name">Email</label>
                              <input type="email" name="contact_email" class="form-control" value="{{ $settings->contact_email }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Phone</label>
                              <input type="text" name="contact_phone" class="form-control" value="{{ $settings->contact_phone }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Address</label>
                              <input type="text" name="contact_address" class="form-control" value="{{ $settings->contact_address }}">
                        </div>

                        <br>
                        <h5 style="text-align: center;"><b>Social Media Links</b></h5>
                        <div class="form-group">
                              <label for="name">Facebook</label>
                              <input type="text" name="fb" class="form-control" value="{{ $settings->fb }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Twitter</label>
                              <input type="text" name="twitter" class="form-control" value="{{ $settings->twitter }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Youtube</label>
                              <input type="text" name="youtube" class="form-control" value="{{ $settings->youtube }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Link In</label>
                              <input type="text" name="li" class="form-control" value="{{ $settings->li }}">
                        </div>
                        <div class="form-group">
                              <label for="name">Instagram</label>
                              <input type="text" name="ig" class="form-control" value="{{ $settings->ig }}">
                        </div>

                        <br>


                        <div class="form-group">
                              <button class="form-control btn btn-success">Update Settings</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection
