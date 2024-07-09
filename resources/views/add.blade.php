@extends('layouts.app')
@section('title', 'Add New Item')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-7">
            <div class="card p-3">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Add New Item</h1>
                        <hr>
                    </div>
                </div>
                <form action="{{ Route('addItem') }}" method="POST">
                    @csrf
                    <div class="row mb-2">
                        <div class="col">
                            <label for="name" class="form-text">Item Name</label>
                            <input type="text" class="form-control" value="{{ old("name")}}" name="name" id="name">
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
                                <input type="number" class="form-control" value="{{ old("price")}}" name="price" id="price">
                            </div>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-text">Item Quantity</label>
                            <input type="number" class="form-control" value="{{ old("quantity")}}" name="quantity" id="quantity">
                            @error('quantity')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="desc" class="form-text">Item Description <i>(200 Words Max)</i></label>
                            <textarea type="text" class="form-control" name="desc" id="desc" maxlength="200">{{ old("desc") }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary" style="width:100%">Add Item</button>
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
                        <ul class="list-group">
                            <li class="list-group-item" id="itemName">Name</li>
                            <li class="list-group-item" id="itemDescription">Description</li>
                            <li class="list-group-item" id="itemPrice">$0.00</li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" id="itemQuantity">
                                Quantity</li>

                            <li class="list-group-item text-end display-5" id="totalPrice">Total Price</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
