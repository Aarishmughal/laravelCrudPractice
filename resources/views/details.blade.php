@extends("layouts.app")
@section("title","Details")
@section("content")
<div class="row mt-3">
    <div class="col-lg"></div>
    <div class="col-lg-8">
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
                    <h1 class="display-1">Item Details</h1><hr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>ID: </td>
                                <th>{{$item->id}}</th>
                            </tr>
                            <tr>
                                <td>Name: </td>
                                <th>{{ $item->name }}</th>
                            </tr>
                            <tr>
                                <td>Price: </td>
                                <th>{{ $item->price }}</th>
                            </tr>
                            <tr>
                                <td>Quantity: </td>
                                <th>{{ $item->quantity }}</th>
                            </tr>
                            <tr>
                                <td>Description:</td>
                                <td style="word-wrap: break-word; max-width: 250px;">{{ $item->desc }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('index')}} " class="btn btn-dark" style="width:100%">Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg"></div>
</div>
@endsection