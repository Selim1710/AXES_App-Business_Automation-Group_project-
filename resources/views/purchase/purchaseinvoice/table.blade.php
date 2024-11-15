@extends('layouts.app')
@section('content')
<h2 class="mt-4 mb-4">All purchase Invoice</h2>

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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseInvoice">Create Purchase Invoice</button>
        <!-- Modal -->
        <div class="modal fade" id="purchaseInvoice" tabindex="-1" aria-labelledby="purchaseInvoiceLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="purchaseInvoiceLabel">Create purchase Invoice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- add form -->
                    <form action="{{ route('admin.store.invoice') }}" method="POST">
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
                                    <input type="date" class="form-control" id="currentDate" name="date" required>
                                </div>
                                <div class="col-12">
                                        <label class="form-label">Product Name</label>
                                        <select name="pro_name" id="branchID" class="form-control">
                                            <option value="">-- SELECT --</option>
                                             @foreach ($Products as $Product)
                                            <option value="{{ $Product->id }}">{{ $Product->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="col-12">
                                        <label class="form-label">Branch Name</label>
                                        <select name="b_name" id="branchID" class="form-control">
                                            <option value="">-- SELECT --</option>
                                            @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>

                                </div>
                                <div class="col-12">
                                        <label class="form-label">Suppliar Name</label>
                                        <select name="s_name" id="s_nameID" class="form-control">
                                            <option value="">-- SELECT --</option>
                                            @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}">{{ $supplier->ss_name }}</option>
                                            @endforeach
                                        </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Invoice</label>
                                    <input type="text" class="form-control" id="p_invno" name="invoice" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Total</label>
                                    <input type="number" class="form-control" name="total" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Note</label>
                                    <input type="text" class="form-control" name="note" required>
                                </div>
                                <label class="form-label">IMEI/Serial</label>
                                <input type="text" class="form-control" name="imei" required>
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
                <tr>
                    <th>SN</th>
                    <th>Date</th>
                    <th>Product Name</th>
{{--                    <th>Branch</th>--}}
                    <th>Suppliar</th>
                    <th>Invoice</th>
                    <th>Total</th>
                    <th>Note</th>
                    <th>IMEI</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($PurchaseInvoicesss as $key=>$purchaseInvoice)
                <tr>
                    <td>{{ $key+1 }} </td>
                    <td>{{ $purchaseInvoice->date }}</td>
                    <td>{{ $purchaseInvoice->name }}</td>
{{--                    <td>{{ $purchaseInvoice->name }}</td>--}}
                    <td>{{ $purchaseInvoice->ss_name }}</td>
                    <td>{{ $purchaseInvoice->invoice }}</td>
                    <td>{{ $purchaseInvoice->total }}</td>
                    <td>{{ $purchaseInvoice->note }}</td>
                    <td>{{ $purchaseInvoice->imei }}</td>

                    <td>
                        <a class="btn btn-success" href="{{ route('admin.edit.invoice', $purchaseInvoice->id) }}" style="font-size:13px"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a class="btn btn-danger" href="{{ route('admin.delete.invoice', $purchaseInvoice->id) }}" onclick="return confirm('are you sure !!!')" style="font-size:13px"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @empty
                <p class="text-danger text-center">No purchaseInvoice available</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<input type="hidden" id="total-invoices"  value="{{ count($PurchaseInvoicesss) }}"/>
    <script>
        var i = 0 + parseInt(document.getElementById('total-invoices').value);
        // console.log(typeof i);
        var date = new Date();
        var currentDate = date.toISOString().slice(0, 10);
        document.getElementById('currentDate').value = currentDate;

        var defaultExpense =
            `PURINV:${date.getDate()}${date.getMonth() + 1}${date.getUTCFullYear().toString().slice(2,4)}${++i}`;
        document.getElementById('p_invno').value = defaultExpense;
    </script>

@endsection
