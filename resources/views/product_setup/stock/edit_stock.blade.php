@extends('layouts.app')
@section('content')
<h2 class="mt-4 mb-4">Edit stock</h2>

<!-- message -->
@if(session()->has('message'))
<p class="alert alert-success text-center mt-4">{{ session()->get('message') }}</p>
@elseif(session()->has('error'))
<p class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</p>
@endif
<!-- end-message -->

<!-- add form -->
<form action="{{ route('admin.update.stock',$stock->id) }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="message">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <div class="border p-3 rounded">
            <div class="col-12">
                <label class="form-label">Total Product</label>
                <input type="number" class="form-control" name="total_qty"  value="{{ $stock->total_qty }}" required>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Update now</button>
    </div>
</form>
@endsection