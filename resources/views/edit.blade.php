@extends('layout.app')
@section('content')
<form method="POST" action="{{ route('updatemember') }}">
    @csrf
    <input class="form-control mb-2" type="text" name="name" value="{{ $member->name }}" required>
    <input class="form-control mb-2" type="text" name="email" value="{{ $member->email }}" required>
    <select class="form-select mb-2" id="inputGroupSelect01" name="membership_type" required>
        <option selected>{{ $member->membership_type }}</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <input class="form-control mb-2" type="date" name="membership_expiration" value="{{ $member->membership_expiration }}" required>
    <input type="hidden" name="id" value="{{ $member->id }}">
    <button type="submit" class="btn btn-warning">Submit</button>
</form>
@endsection