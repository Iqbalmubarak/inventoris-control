<div class="kt-section__body">

  <div class="form-group row text-center">
    <div class="col-lg-12 col-xl-12">
      <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
        @if (Sentinel::getUser()->avatar)
        <div class="kt-avatar__holder" style="background-image: url({{url('img/profile-pict/'.Sentinel::getUser()->avatar)}});"></div>
        @else
        <div class="kt-avatar__holder" style="background-image: url({{asset('theme/media/users/300_20.jpg')}});"></div>
        @endif
        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="@lang('user.field.avatar.change')">
          <i class="fa fa-pen"></i>
          <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
        </label>
        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="@lang('user.field.avatar.cancel')">
          <i class="fa fa-times"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label"></label>
    <div class="col-lg-9 col-xl-6">
      {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>__('user.field.first_name'),'required'=>'required']) !!}
      @error('first_name')
        <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label"></label>
    <div class="col-lg-9 col-xl-6">
      {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>__('user.field.last_name')]) !!}
      @error('last_name')
        <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label"></label>
    <div class="col-lg-9 col-xl-6">
      <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>__('user.field.email'),'aria-describedby'=>'basic-addon1','required'=>'required']) !!}
        <!-- <input type="text" class="form-control" value="nick.bold@loop.com" placeholder="Email" aria-describedby="basic-addon1"> -->
      </div>
      @error('email')
      <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label"></label>
    <div class="col-lg-9 col-xl-6">
      {!! Form::text('username', null, ['class' => 'form-control', 'placeholder'=>__('user.field.username'),'required'=>'required']) !!}
      @error('username')
        <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label"></label>
    <div class="col-lg-9 col-xl-6">
      {!! Form::text('no_hp', null, ['class' => 'form-control', 'placeholder'=>__('user.field.no_hp')]) !!}
      @error('no_hp')
        <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label"></label>
    <div class="col-lg-9 col-xl-6">
      {!! Form::text('satuan_kerja', Sentinel::getUser()->satker->name, ['class' => 'form-control', 'placeholder'=>__('user.field.satker'), 'disabled'=>'disabled']) !!}
      @error('satuan_kerja')
        <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label"></label>
    <div class="col-lg-9 col-xl-6">
      {!! Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder'=>__('user.field.alamat')]) !!}
      @error('alamat')
        <div class="form-text text-danger">{{$message}}</div>
      @enderror
    </div>
  </div>
</div>

@section('tjs')
  <script src="{{asset('theme/js/pages/custom/user/edit-user.js')}}" type="text/javascript"></script>
  <script src="{{asset('theme/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
@endsection

@section('tcss')
  <link href="{{asset('theme/css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css" />
@endsection
