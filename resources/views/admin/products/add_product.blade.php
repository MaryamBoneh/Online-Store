@extends('admin_template')

@section('title')
افزودن محصول
@endsection

@section('content')

<div class="input-group">
    <span class="input-group-btn">
      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
      </a>
    </span>
    <input id="thumbnail" class="form-control" type="text" name="filepath">
 </div>

 <img id="holder" style="margin-top:15px;max-height:100px;">

 <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

@endsection