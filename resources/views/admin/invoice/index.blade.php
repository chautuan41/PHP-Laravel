@extends('admin.partials.app')
@section('title') Account @endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accounts</li>
            </ol>
        </nav>
        <h2 class="h4">All Accounts</h2>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-primary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-primary">Export</button>
        </div>
    </div>
</div>
<div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
        <div class="col col-md-6 col-lg-3 col-xl-4">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search"
                    aria-label="Search" aria-describedby="basic-addon2">
            </div>
        </div>
        <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
            <div class="btn-group">
                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon icon-sm icon-gray">
                        <span class="fas fa-cog"></span>
                    </span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                    <span class="dropdown-item font-weight-bold text-dark">Show</span>
                    <a class="dropdown-item d-flex font-weight-bold" href="#">10 <span
                            class="icon icon-small ml-auto"><span class="fas fa-check"></span></span></a>
                    <a class="dropdown-item font-weight-bold" href="#">20</a>
                    <a class="dropdown-item font-weight-bold" href="#">30</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-3">
    <a href="{{route('invoices.create')}}" class="btn btn-pill btn-outline-success"><i
            class="far fa-plus-square  mr-2"></i>Add Invoice</a>
</div>
<div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Account</th>
                <th>Issued date</th>
                <th>Shipping Address</th>
                <th>Shipping Phone</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtInv as $Inv)
            <!-- Item -->
            <tr>
                <td>
                    <span class="font-weight-normal">{{ $Inv->fullname }}</span>
                </td>
                <td>
                    <span class="font-weight-normal">{{ $Inv->issueddate }}</span>
                </td>
                <td><span class="font-weight-normal">{{ $Inv->shippingaddress }}</span></td>
                <td><span class="font-weight-normal">{{ $Inv->shippingphone }}</span></td>
                <td><span class="font-weight-normal">{{ $Inv->total }}</span></td>
                <td>
                    @if ($Inv->status == 1)
                    <span class="font-weight-bold text-success">Active</span>
                    @elseif ($Inv->status == 2)
                    <span class="font-weight-bold text-info">Await</span>
                    @else
                    <span class="font-weight-bold text-danger">Deactive</span>
                    @endif
                </td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('invoicedetails',['ID'=>$Inv->id])}}"><span
                                    class="fas fa-eye mr-2"></span>View
                                Details</a>
                            @if($Inv->status == 2)
                            <a class="dropdown-item" href="{{route('invoices.edit',['ID'=>$Inv->id])}}"><span
                                    class="fas fa-check-circle mr-2"></span>Active</a>
                            @endif
                            <a class="dropdown-item text-danger"
                                href="{{route('invoices.delete',['ID'=>$Inv->id])}}"><span
                                    class="fas fa-trash-alt mr-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
        <nav aria-label="Page navigation example">
            <ul class="pagination mb-0">
                <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <div class="font-weight-bold small">Showing <b>5</b> out of <b>25</b> entries</div>
    </div>
</div>
@endsection