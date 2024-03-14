@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
<div class="container flex-row-fluid mb-2 mt-7">
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                   
                    <h4 class="font-weight-normal mb-3">Jumlah User <i
                            class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h4 class="mb-5">{{ $total_user }}
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary card-img-holder text-white">
                <div class="card-body">
                    
                    <h4 class="font-weight-normal mb-3">Jumlah User Aktif <i
                            class="mdi mdi-vector-combine mdi-24px float-right"></i>
                    </h4>
                    <h4 class="mb-5">{{ $total_user_aktif }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary card-img-holder text-white">
                <div class="card-body">
                   
                    <h4 class="font-weight-normal mb-3">Jumlah Produk <i
                            class="mdi mdi-human-greeting mdi-24px float-right"></i>
                    </h4>
                    <h4 class="mb-5">{{ $total_produk }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-primary card-img-holder text-white">
                <div class="card-body">
                   
                    <h4 class="font-weight-normal mb-3">Jumlah Produk Aktif
                    </h4>
                    <h4 class="mb-5">{{ $total_produk_aktif }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 grid-margin">
            <div class="card printableArea" id="printableArea">
                <div class="card-body">
                    <h4 class="card-title">Product Terbaru</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Product </th>
                                    <th> Tanggal Di buat </th>
                                    <th> Harga (Rp) </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($results as $item)
                              <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['created_at'] }}</td>
                                <td>{{ $item['price'] }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection