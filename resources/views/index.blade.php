@extends('layouts.app')

@section('title', 'Stored')

@section('content')
    <div class="row mt-3">
        <div class="col-lg">
            @if (session('error'))
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="errorToast" class="toast show bg-danger text-white" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Error</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session('success'))
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="successToast" class="toast show bg-success text-white" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Success</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="card p-3">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1 card-title">Stored Items</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Added On</th>
                                    <th>Controls</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>
                                            <a href="/show/{{ $item->id }}">{{ $item->id }}</a>
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ number_format($item->price, 2) }}</td>
                                        <td>{{ Str::limit($item->desc, 10) }}</td>
                                        <td>{{ $item->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <a href="/update/{{ $item->id }}" class="btn btn-info">Edit</a>
                                            <a href="/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
