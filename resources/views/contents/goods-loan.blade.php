@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Peminjaman Barang</h2>
          <ol>
            <li><a href="index.html">Layanan</a></li>
            <li>Peminjaman Barang</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Form Section ======= -->
    <section id="pbarang" class="portfolio" data-aos="fade-up">

        <div class="container">
            <div class="section-header">
                <h2>Peminjaman Barang</h2>
            </div>
            <form id="form-isi" action="{{ route('goods-loan.post')}}" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputnik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputnik" required name="nik">
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputnama" required name="name">
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
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone_number">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputpilih" class="col-sm-2 col-form-label">Pilih barang</label>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-11">
                            <select class="form-control" id="barang" required>
                                <option selected disabled value="">Barang yang mau dipinjam</option>
                                @foreach ($list_barang as $barang)
                                    <option value="{{ $barang->id }}"> {{ $barang->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary" onclick="addBarang()">+</button>
                        </div>
                    </div>
  
                    <div class="selected-barang">
                        <label for="formjudul" class="mt-2 form-label">Barang yang dipilih :</label>
                    </div>
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="row mb-3">
                    <label for="inputjml" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="start" required name="start_date" onchange="setEndDate(this)">
                    </div>
                    <label for="inputjml" class="col-sm-2 col-form-label">Sampai tanggal ke </label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="end" required name="end_date" onchange="setStartDate(this)">
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
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="header-title mb-0"></h4>
                  <input type="submit" class="btn btn-primary" value="Create">
              </div>
              </form>
    
        </div>

  </main><!-- End #main -->

  <script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
  <script>
    var selectedBarangId = [];
    function addBarang() {
        var barang = document.getElementById("barang");
        var barangId = barang.value;
        var barangName = barang.options[barang.selectedIndex].text;

        if (barangId == '') {
            alert("Pilih barang terlebih dulu!");
            return false;
        }

        if (selectedBarangId.includes(barangId)){
            alert('Barang sudah dipilih!');
            return false;
        }
        
        var input       = "<div class='row' id='barang-" + barangId + "'>";
        input           += "<div class='col-md-11 mt-2'><input type='text' id='barang-" + barangId + "' class='form-control' value='" + barangName + "' disabled></div>";
        input           += "<div class='col-md-1 mt-2'><a href='#!' class='btn btn-danger' onclick='deleteBarang(" + barangId + ")'>X</a></div>";
        input           += "<input type='hidden' name='barang[]' value='" + barangId + "'>";
        input           += "</div>";
        
        $('.selected-barang').append(input);

        selectedBarangId.push(parseInt(barangId));
    }

    function deleteBarang(barangId) {
        var element = document.getElementById("barang-"+barangId);
        element.remove();

        var index = selectedBarangId.indexOf(barangId);
        if (index > -1) { // only splice array when item is found
          selectedBarangId.splice(index, 1); // 2nd parameter means remove one item only
        }
    }

    function setEndDate(input) {
      document.getElementById("end").min = input.value;
    }

    function setStartDate(input) {
      document.getElementById("start").max = input.value;
    }
</script>
@stop