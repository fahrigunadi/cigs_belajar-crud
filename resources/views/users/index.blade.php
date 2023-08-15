@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <x-search />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = $users->firstItem();
                @endphp

                @forelse ($users as $user)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">KOSONG</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $users->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection

@section('content-footer')
    BRO
@endsection
