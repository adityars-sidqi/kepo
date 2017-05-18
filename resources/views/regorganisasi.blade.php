@extends('layouts.app')

@section('content')
  <div class="main margin-bottom-5">
    <div class="container">
      <div class="row margin-bottom-20">
        <div id="id-error-alert" class="alert alert-danger" role="alert" style="display: none;">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <strong>Failed while registering</strong><br/>
          <ul id="id-error-ul-messages">
          </ul>
        </div>
        <h1>Create An Account Organization</h1>
        <div class="col-md-8 col-sm-12 padding-top-10">
          <form class="form-horizontal" action="{{ asset('register/organisasi') }}" role="form" id="id-form-register" method="post">
            <fieldset>
              <legend>Organization details</legend>
              <div class="form-group">
                <label for="nama" class="col-lg-4 control-label">Organization Name <span class="require">*</span></label>
                <div class="col-lg-8">
                  <input type="text" name="nama" class="form-control" id="nama">
                  <span id="helpBlockNama" class="help-block">
                    {{ $errors->has('nama') ? $errors->first('nama') : ''}}
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="telp" class="col-lg-4 control-label">Phone <span class="require">*</span></label>
                <div class="col-lg-8">
                  <input type="text" name="telp" class="form-control" id="telp">
                  <span id="helpBlockTelp" class="help-block">
                    {{ $errors->has('telp') ? $errors->first('telp') : ''}}
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="alamat" class="col-lg-4 control-label">Address <span class="require">*</span></label>
                <div class="col-lg-8">
                  <textarea name="alamat" rows="3" class="form-control"></textarea>
                  <span id="helpBlockAlamat" class="help-block">
                    {{ $errors->has('alamat') ? $errors->first('alamat') : ''}}
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                <div class="col-lg-8">
                  <input type="email" name="email" class="form-control" id="email">
                  <span id="helpBlockEmail" class="help-block">
                    {{ $errors->has('email') ? $errors->first('email') : ''}}
                  </span>
                </div>
              </div>
            </fieldset>
            <fieldset class="padding-top-15">
              <legend>Account password</legend>
              <div class="form-group">
                <label for="passsword" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                <div class="col-lg-8">
                  <input type="password" name="password" class="form-control" id="password">
                  <span id="helpBlockPassword" class="help-block">
                    {{ $errors->has('password') ? $errors->first('password') : ''}}
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="password_confirmation" class="col-lg-4 control-label">Confirm Password <span class="require">*</span></label>
                <div class="col-lg-8">
                  <input type="password" name="password_confirmation" class="form-control" id="confirm-password">
                  <span id="helpBlockConfirmPassword" class="help-block">
                    {{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : ''}}
                  </span
                </div>
              </div>
            </fieldset>
            <fieldset class="padding-top-15">
              <div class="row">
                <div class="col-lg-8 pull-right">
                  <label><input type="checkbox" name="tos" checked="checked"> I agree to
                  the terms of service </label>
                </div>
              </div>
            </fieldset>
            <fieldset class="padding-top-15" style="margin-top:10px">
              <legend></legend>
              <div class="row">
                <div class="col-lg-8 pull-right">
                  <div class="g-recaptcha" data-sitekey="6Ld3ryEUAAAAANeVbnTX6rAG3DJwgJUkoCHBcQUb"></div>
                </div>
              </div>
            </fieldset>
            <div class="row" style="margin-top: 20px">
              <div class="col-lg-12 col-md-offset-4 padding-top-20">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary" id="id-create-account-btn">Create an account</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="form-info">
            <h2>Important Information</h2>
            <p>An activation code will be sent to your email.</p>
            <!-- <button type="button" class="btn btn-default">More details</button> -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
