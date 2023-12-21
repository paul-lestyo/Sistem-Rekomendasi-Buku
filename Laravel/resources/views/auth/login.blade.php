@extends('layouts.auth')

@section('content')
<!-- Logo -->
<div class="app-brand justify-content-center">
    <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-text demo text-body fw-bolder text-capitalize">TellTale</span>
    </a>
</div>

<form id="formAuthentication" class="mb-3" action="{{ route('authenticate') }}" method="POST">
    @csrf
    <select class="form-select" name="user_id" id="exampleFormControlSelect1" aria-label="Default select example">
        <option selected>Select User</option>
        @foreach ($users as $user)
            <option value="{{ $user['User-ID'] }}">{{ $user['User-ID'] }}</option>
        @endforeach
      </select>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary d-grid w-100">Login</button>
    </div>
</form>
@endsection