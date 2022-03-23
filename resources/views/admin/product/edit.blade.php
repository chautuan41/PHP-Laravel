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
                        <form action="{{route('products.edit.post',['ID'=>$dt->id]) }}" method="POST" role="form">
                            <!-- Form -->
                            @csrf
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="firstName">Product Name</label>
                                <input type="text" class="form-control" id="text" aria-describedby="emailHelp"
                                    name="name" value="{{$dt->product_name}}" require>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="firstName">Product Type</label>
                                <select class="form-select" id="country" aria-label="Default select example"
                                    name="idProT" require>
                                    @foreach ($dtPro as $Pro)
                                    <option value="{{$Pro->product_types_id}}">{{$Pro->product_types_name}}</option>
                                    @endforeach
                                    @foreach ($dtProT as $ProT)
                                    @if($ProT->id != $dt->product_types_id)
                                    <option value="{{$ProT->id}}">{{$ProT->product_types_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <!-- End of Form -->
                            <div class="mb-3">
                                <label for="firstName">Price</label>
                                <input type="text" class="form-control" id="text" aria-describedby="emailHelp"
                                    name="price" value="{{$dt->price}}" require>
                            </div>
                            <div class="mb-3">
                                <label for="firstName">Quantity</label>
                                <input type="text" class="form-control" id="text" aria-describedby="emailHelp"
                                    name="quantity" value="{{$dt->quantity}}" require>
                            </div>
                            <div class="mb-3">
                                <label for="firstName">Size</label>
                                <select class="form-select" id="country" aria-label="Default select example" name="size"
                                    require>
                                    <option selected value="{{$dt->size}}">{{$dt->size}}</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="my-1 mr-2" for="country">Status</label>
                                <select class="form-select" id="country" aria-label="Default select example"
                                    name="status" require>
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
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