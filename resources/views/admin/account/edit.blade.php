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
                        <form action="{{route('accounts.edit.post',['ID'=>$dt->id]) }}" method="POST" role="form">
                            <!-- Form -->
                            @csrf
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="firstName">Full Name</label>
                                <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                                    name="fullname" value="{{$dt->fullname}}" require>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="disabledTextInput">Email</label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Disabled input" disabled name="email" value="{{$dt->email}}" require>
                            </div>
                            <!-- End of Form -->
                            <div class="mb-3">
                                <label for="firstName">Phone</label>
                                <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                                    name="phone" value="{{$dt->phone}}" require>
                            </div>
                            <div class="mb-3">
                                <label for="firstName">Address</label>
                                <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                                    name="address" value="{{$dt->address}}" require>
                            </div>
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="my-1 mr-2" for="country">Status</label>
                                <select class="form-select" id="country" aria-label="Default select example"
                                    name="status">
                                    <option value="1">Active</option>
                                    <option value="2">Deactive</option>
                                </select>
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