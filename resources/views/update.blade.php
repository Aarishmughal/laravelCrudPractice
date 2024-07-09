@extends('layouts.app')
@section('title', 'Add New Item')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-7">
            <div class="card p-3">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Edit Item</h1>
                        <hr>
                    </div>
                </div>
                <form action="{{ Route('updateItem', ['id' => $item->id]) }}" method="POST">
                    @csrf
                    <div class="row mb-2">
                        <div class="col">
                            <label for="name" class="form-text">Item Name</label>
                            <input type="text" class="form-control" value="{{ $item->name }}" name="name"
                                id="name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="price" class="form-text">Item Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" value="{{ $item->price }}" name="price"
                                    id="price">
                            </div>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-text">Item Quantity</label>
                            <input type="number" class="form-control" value="{{ $item->quantity }}" name="quantity"
                                id="quantity">
                            @error('quantity')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="desc" class="form-text">Item Description <i>(200 Words Max)</i></label>
                            <textarea type="text" class="form-control" name="desc" id="desc" maxlength="200">{{ $item->desc }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-outline-primary" style="width:100%">Update Item</button>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('index')}}" class="btn btn-outline-dark" style="width:100%">Back</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-lg-5">
            <div class="card p-3">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Item Summary</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-info fst-italic">Once you hit submit, the following item will be added to
                            the database.</div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover rounded-table">
                            <thead>
                                <tr>
                                    <th>Previously</th>
                                    <th></th>
                                    <th>Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-danger">{{ $item->name }}</td>
                                    <td>-></td>
                                    <td class="text-success" id="itemName">{{ $item->name }}</td>
                                </tr>
                                <tr>
                                    <td class="text-danger">{{ Str::limit($item->desc, 5) }}</td>
                                    <td>-></td>
                                    <td class="text-success" id="itemDescription">{{ Str::limit($item->desc, 5) }}</td>
                                </tr>
                                <tr>
                                    <td class="text-danger">{{ $item->price }}</td>
                                    <td>-></td>

                                    <td class="text-success" id="itemPrice">{{ $item->price }}</td>
                                </tr>
                                <tr>
                                    <td class="text-danger">{{ $item->quantity }}</td>
                                    <td>-></td>

                                    <td class="text-success" id="itemQuantity">{{ $item->quantity }}</td>
                                </tr>
                                <tr>
                                    <td class="text-danger display-5 fs-4">${{ $item->price*$item->quantity }}</td>
                                    <td>-></td>
                                    <td class="text-success display-5" id="totalPrice">Total Price</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
