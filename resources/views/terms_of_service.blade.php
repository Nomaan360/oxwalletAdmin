@extends('include/layout')
@section('title', 'Terms Of Service')


@section('customcss')
                         
<link rel="stylesheet" href="{{ asset('vendor/libs/bootstrap-select/bootstrap-select.css') }}" /> 
<link rel="stylesheet" href="{{ asset('vendor/libs/tagify/tagify.css') }}" /> 

@endsection
@section('content')
 

<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Terms Of Service</h5>
   <div class="card-body">
        <form class="needs-validation" action="{{ url(route('add_terms_of_service')) }}" novalidate method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-floating form-floating-outline mb-6">
            <input type="text" class="form-control" id="heading" name="heading" value="{{ old('heading') }}"  required />
            <label for="heading">Heading</label>
            @if ($errors->has('heading'))
                <small class="text-danger">{{ $errors->first('heading') }}</small>
            @endif
          </div>
          <div class="form-floating form-floating-outline mb-6">
            <textarea name="text" id="text" rows="10" cols="80"></textarea>
            <label for="text">Text</label>
            @if ($errors->has('text'))
                <small class="text-danger">{{ $errors->first('text') }}</small>
            @endif
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
</div>
<!--/ Basic Bootstrap Table -->



<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('text');
</script>
@endsection
@section('customjs')
<script src="{{ asset('vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('vendor/libs/tagify/tagify.js') }}"></script>

@endsection 