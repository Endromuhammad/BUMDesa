@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Peminjaman Keuangan</h2>
          <ol>
            <li><a href="{{url('/')}}">Layanan</a></li>
            <li>Peminjaman Keuangan</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Form Section ======= -->
    <section id="pbarang" class="portfolio" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>List Transaksi Permohonan Peminjaman Keuangan</h5>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('money-loan') }}" class="btn btn-primary" style="float: right">Buat Permohonan</a>
                </div>
            </div>
            <div class="mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nominal Peminjaman</th>
                            <th scope="col">Jumlah Bulan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($transactions) > 0)
                            @foreach ($transactions as $key => $transaction)
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $transaction->nik ?> </td>
                                    <td><?= $transaction->name ?></td>
                                    <td>Rp <?= number_format($transaction->nominal) ?></td>
                                    <td><?= $transaction->tenor ?></td>
                                    <td><?= $transaction->description ?></td>
                                </tr>
                            @endforeach
                        @else 
                            <tr>
                                <td colspan="6" class="text-center">Belum ada transaksi</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
        

</main><!-- End #main -->
@stop