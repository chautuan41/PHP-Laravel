@extends('admin.partials.app')
@section('title') Edit Account @endsection
@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Components</a></li>
            <li class="breadcrumb-item active" aria-current="page">Forms</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Forms</h1>
            <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
        </div>
        <div>
            <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/forms/"
                class="btn btn-outline-gray"><i class="far fa-question-circle mr-1"></i> Forms Docs</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-lg-4 col-sm-6">
                        <form action="{{ route('invoicedetails.edit.post',['ID'=>$dt->id]) }}" method="POST"
                            role="form">
                            <!-- Form -->
                            @csrf

                            <!-- Form -->
                            <div class="mb-3">
                                <label for="disabledTextInput">Invoice Id</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Disabled input" disabled value="{{$dt->invoices_id}}" require>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="disabledTextInput">Product Id</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Disabled input" disabled value="{{$dt->products_id}}" require>
                            </div>
                            <!-- End of Form -->
                            <div class="mb-3">
                                <label for="firstName">Quantity</label>
                                <input type="text" class="form-control" id="text" aria-describedby="emailHelp"
                                    name="quantity" value="{{$dt->quantity}}" require>
                            </div>
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="disabledTextInput">Unit price</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Disabled input" disabled value="{{$dt->unitprice}}" require>
                            </div>
                            <!-- End of Form -->
                            <button type="submit" class="btn btn-block btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection