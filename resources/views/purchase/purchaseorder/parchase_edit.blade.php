@extends('layouts.app')
@section('content')
<h2 class="mt-4 mb-4">Edit Purchase Order</h2>

<!-- message -->
@if(session()->has('message'))
<p class="alert alert-success text-center mt-4">{{ session()->get('message') }}</p>
@elseif(session()->has('error'))
<p class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</p>
@endif
<!-- end-message -->

<!-- add form -->
<form action="{{ route('admin.update.order',$purchaseorder->id) }}" method="POST">
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
                <label class="form-label">Date</label>
                <input type="date" class="form-control" name="date" value="{{ $purchaseorder->date }}" required>
            </div>
            <div class="col-12">
                <label class="form-label">Order No</label>
                <input type="text" class="form-control" name="o_no" value="{{ $purchaseorder->o_no }}" required>
            </div>
            <div class="col-12">
                <label class="form-label">Total</label>
                <input type="number" class="form-control" name="total" value="{{ $purchaseorder->total }}" required>
            </div>
            <div class="col-12">
                <label class="form-label">Note</label>
                <input type="text" class="form-control" name="note" value="{{ $purchaseorder->note }}" required>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ URL::previous() }}" class="btn btn-secondary">Close</a>
        <button type="submit" class="btn btn-info">Update now</button>
    </div>
</form>
@endsection
