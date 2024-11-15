@extends('layouts.app')
@section('content')
<h2 class="mt-4 mb-4">All Customer</h2>

<!-- message -->
@if(session()->has('message'))
<p class="alert alert-success text-center mt-4">{{ session()->get('message') }}</p>
@elseif(session()->has('error'))
<p class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</p>
@endif
<!-- end-message -->

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between">
        <span>
        </span>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Customer">Create New Customer</button>
        <!-- Modal -->
        <div class="modal fade" id="Customer" tabindex="-1" aria-labelledby="CustomerLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="CustomerLabel">Create New Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- add form -->
                    <form action="{{ route('customer.store') }}" method="POST">
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
                                <div class="row">

                                    <div class="col-6">
                                        <label class="form-label">Customer Name</label>
                                        <input type="text" class="form-control" name="cc_name" required>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Customer Code</label>
                                        <input type="text" name="father_name" class="form-control"required >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="number" name="contact" class="form-control"required >
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Credit Limit</label>
                                        <input type="number" name="email" class="form-control"required>
                                    </div>
                                </div>
                                <div class="my-3"></div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" name="address" cols="30" rows="4" required></textarea>
                                    </div>

                                </div>
                                <div class="my-3"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- table -->
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr class="text-capitalize">
                    <th>SN</th>
                    <th>Customer Name</th>
                    <th>Customer Code</th>

                    <th>mobile number</th>
                    <th>credit limit</th>
                    <th>address</th>

                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($customers as $key=>$customer)
                <tr>
                    <td>{{ $key+1 }} </td>


                    <td>{{ $customer->cc_name }}</td>
                    <td>{{ $customer->father_name }}</td>
                    <td>{{ $customer->contact }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>



                    <td>
                        <a class="btn btn-success" href="{{ route('customer.edit', $customer->id) }}" style="font-size:13px"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a class="btn btn-danger" href="{{ route('client_setup.customer.delete', $customer->id) }}" onclick="return confirm('are you sure !!!')" style="font-size:13px"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @empty
                <p class="text-danger text-center">No Customer available</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
