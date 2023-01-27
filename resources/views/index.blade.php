@extends('layout.app')
@section('content')
@if( session('success') )
<div class="alert alert-primary">{{ session('success') }}</div>
@endif
@if( session('delete') )
<div class="alert alert-danger">{{ session('delete') }}</div>
@endif
<form method="POST" action="">
    @csrf
    <input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
    <input class="form-control mb-2" type="text" name="email" placeholder="Email" required>
    <select class="form-select mb-2" id="inputGroupSelect01" name="membership_type" required>
        <option selected>Membership Type</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <button type="submit" class="btn btn-warning">Submit</button>
</form>
<table class="table table-striped table-dark table-striped table-hover mt-3 border border-2 p-3">
    <thead>
        <tr class="fw-bold text-warning">
            <th class="border border-end">Name of Member</th>
            <th class="border border-end">Email</th>
            <th class="border border-end">Membership Type</th>
            <th class="border border-end">Membership Expiration</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-end text-white">asd</td>
            <td class="border border-end text-white">asd</td>
            <td class="border border-end text-white">asd</td>
            <td class="border border-end text-white">asdasd</td>
            <td class="text-center">
                <a href="" class="me-2">✍</a>
                <a href="">❌</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection