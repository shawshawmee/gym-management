@extends('layout.app')
@section('content')
@if( session('success') )
<div class="alert alert-primary">{{ session('success') }}</div>
@endif
@if( session('delete') )
<div class="alert alert-danger">{{ session('delete') }}</div>
@endif
<form method="POST" action="{{ route('createmember') }}">
    @csrf
    <input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
    <input class="form-control mb-2" type="text" name="email" placeholder="Email" required>
    <select class="form-select mb-2" name="membership_type">
        <option selected>Membership Type</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <input class="form-control mb-2" type="date" name="membership_expiration" placeholder="Expiration" required>
    <button type="submit" class="btn btn-warning">Submit</button>
    <hr>
</form>
<table class="table table-striped table-dark table-striped table-hover mt-3 border border-2 p-3">
    <thead>
        <tr class="fw-bold text-warning">
            <th class="border border-end">Name of Member</th>
            <th class="border border-end">Email</th>
            <th class="border border-end">Name of Trainer</th>
            <th class="border border-end">Membership Type</th>
            <th class="border border-end">Membership Expiration</th>
            <th class="border border-end">Membership Price</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $member)
        <tr>
            <td class="border border-end text-white">{{ $member->name }}</td>
            <td class="border border-end text-white">{{ $member->email }}</td>
            <td class="border border-end text-white">{{ $member->trainer->name }}</td>
            <td class="border border-end text-white">{{ $member->membership_type }}</td>
            <td class="border border-end text-white">{{ $member->expiration }}</td>
            <td class="border border-end text-white">{{ fake()->randomFloat }}</td>
            <td class="text-center">
                <a href="{{ route('editmember', $member->id) }}" class="me-2">✍</a>
                <a href="{{ route('deletemember', $member->id) }}">❌</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
<p class="bg-warning text-light text-center"><strong>Trainer</strong></p>
<table class="table table-striped table-dark table-striped table-hover mt-3 border border-2 p-3">
    <thead>
        <tr class="fw-bold text-warning">
            <th class="border border-end">Name of Trainer</th>
            <th class="border border-end">Email</th>
            <th class="border border-end">Specialization</th>
            <th class="border border-end">Phone Number</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trainers as $trainer)
        <tr>
            <td class="border border-end text-white">{{ fake()->name }}</td>
            <td class="border border-end text-white">{{ fake()->email }}</td>
            <td class="border border-end text-white">Upper and Lower Workouts</td>
            <td class="border border-end text-white">{{ fake()->phoneNumber }}</td>
        @endforeach
    </tbody>
</table>
@endsection