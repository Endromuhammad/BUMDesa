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
            <div class="section-header">
                <h2>Peminjaman Keuangan</h2>
                <p>Layanan Peminjaman Keuangan adalah layanan yang diberikan oleh BUMDesa Klapagading kepada masyarakat desa Klapagading agar warga bisa meminjam uang sementara dari BUMDesa Klapagading</p>
            </div>
            <form action="{{ route('money-loan.post') }}" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputnik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputnik" name="nik" required>
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputnama" name="name" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputalamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputtelp" class="col-sm-2 col-form-label">No Telpon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputtelp" name="phone_number" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputpilih" class="col-sm-2 col-form-label">Nominal Peminjaman</label>
                    <div class="col-sm-10">
                      <select id="loanAmount" class="form-select" name="nominal">
                        <option selected>Pilih Jumlah Uang</option>
                        <option value="2000000">2,000,000</option>
                        <option value="2500000">2,500,000</option>
                        <option value="3000000">3,000,000</option>
                        <option value="4000000">4,000,000</option>
                        <option value="5000000">5,000,000</option>
                        <option value="10000000">10,000,000</option>
                    </select>
                    </div>
              </div> 
              <div class="row mb-3">
                <label for="totalbulan" class="col-sm-2 col-form-label">Pilih Bulan</label>
                <div class="col-sm-10">
                    <div class="form-group">
                      <select id="loanDuration" class="form-select" name="tenor">
                        <option selected>Pilih Berapa Bulan Uang Akan Dipinjam</option>
                        <option value="6">6</option>
                        <option value="12">12</option>
                        <option value="15">15</option>
                    </select>
                      </div>
                  </div>
                </div> 
                <div class="row mb-3">
                  <label for="inputpilih" class="col-sm-2 col-form-label">Biaya Perbulan</label>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class ="col-sm-10">
                        <input type="text" id="monthlyPayment" class="form-control" name="monthly_fee" readonly>
                      </div>
                      <div class ="col-sm-1">
                        <a href="#!" id="calculateBtn" class="btn btn-primary">Hitung</a>
                      </div>
                      <br>
                      <div id="dynamic-fields"></div>
                    </div>
                  </div>
              </div>
                <div class="row mb-3">
                    <label for="inputktp" class="col-sm-2 col-form-label">Foto KTP</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" id="formFile" name="ktp" required accept="image/*">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                          </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputktp" class="col-sm-2 col-form-label">Foto Memegang KTP</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" id="formFile" name="holding_ktp" required accept="image/*">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputktp" class="col-sm-2 col-form-label">Foto Scan KK</label>
                  <div class="col-sm-10">
                      <div class="input-group mb-3">
                        <input class="form-control" type="file" id="formFile" name="kk" required accept="image/*">
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                </div>
              </div>
              <div class ="container">
                <div class="row mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox">
                  <div class="col-sm-10">
                      <div class="input-group mb-3">
                      <a href="#myModal" data-bs-toggle="modal" id="linkCheckbox">Tampilkan Syarat Peminjaman</a>
                      </div>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="header-title mb-0"></h4>
                <input type="submit" class="btn btn-primary" id="myButton" value="Daftar" disabled>
            </div>
              </form>
        </div>

        

  </main><!-- End #main -->

  <div class="container mt-5">
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Syarat Peminjaman Uang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Syarat-syarat peminjaman:</p>
          <ul>
            <li>Syarat 1</li>
            <li>Syarat 2</li>
            <li>Syarat 3</li>
            <!-- Tambahkan syarat-syarat peminjaman lainnya di sini -->
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("calculateBtn").addEventListener("click", function () {
        var loanAmount = parseFloat(document.getElementById("loanAmount").value);
        var loanDuration = parseInt(document.getElementById("loanDuration").value);

        if (isNaN(loanAmount) || isNaN(loanDuration) || loanAmount <= 0 || loanDuration <= 0) {
            document.getElementById("monthlyPayment").value = "Masukkan angka yang valid.";
        } else {
            var interestRate = 0.015; // Bunga 1.5% per bulan
            var monthlyInterest = loanAmount * interestRate;
            var totalPayment = loanAmount + (monthlyInterest * loanDuration);
            var monthlyPayment = totalPayment / loanDuration;
            var roundedPayment = Math.round(monthlyPayment);

            document.getElementById("monthlyPayment").value = roundedPayment.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR"
            });
        }
    });

    const checkbox = document.getElementById('checkbox');
    const myButton = document.getElementById('myButton');

    checkbox.addEventListener('change', function() {
      myButton.disabled = !checkbox.checked;
    });
</script>
@stop