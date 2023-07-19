@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Menambahkan Data Peminjaman Barang</h4>
                    </div>
                    <div>
                        <form action="{{ route('layanan_peminjaman-update', $loan->id)}}" method="post" enctype="multipart/form-data">
                            <br>
                            <div class="mb-3">
                                <label for="formnid" class="form-label">NIK</label>
                                <input class="form-control" type="text" placeholder="" name="nik" value="{{ $loan->nik }}">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" id="formFile" name="name" value="{{ $loan->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone_number" value="{{ $loan->phone_number }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{ $loan->address }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Pilih Barang</label>
                                <div class="row">
                                    <div class="col-md-11">
                                        <select class="form-control" id="barang">
                                            <option selected disabled value="">Barang yang mau dipinjam</option>
                                            @foreach ($list_barang as $barang)
                                                <option value="{{ $barang->id }}"> {{ $barang->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="addBarang()">+</button>
                                    </div>
                                </div>

                                <div class="selected-barang">
                                    <label for="formjudul" class="mt-2 form-label">Barang yang dipilih :</label>
                                    @foreach ($selectedBarang as $barang)
                                        <?php $selectedBarangId[] = $barang->id ?>
                                        <div class='row' id='barang-{{$barang->id}}'>
                                            <div class='col-md-9 mt-2'>
                                                <input type='text' id='barang-{{$barang->id}}' class='form-control' value='{{ $barang->name }}' disabled>
                                            </div>
                                            <div class='col-md-2 mt-2'>
                                                <input type='number' name="qty[]" id='qty-{{$barang->id}}' class='form-control' value='{{ $barang->qty_input }}'>
                                            </div>
                                            <div class='col-md-1 mt-2'>
                                                <a href='#1' class='btn btn-sm btn-danger' onclick='deleteBarang({{ $barang->id }})'>X</a>
                                            </div>
                                            <input type='hidden' name='barang[]' value='{{ $barang->id }}'>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputjml" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                <div class="col-sm-4">
                                  <input type="date" name="start_date" class="form-control" id="start" onchange="setEndDate(this)" required value="{{ $loan->start_date }}">
                                </div>
                                <label for="inputjml" class="col-sm-2 col-form-label">Sampai tanggal ke </label>
                                <div class="col-sm-4">
                                  <input type="date" name="end_date" class="form-control" id="end" onchange="setStartDate(this)" required value="{{ $loan->end_date }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto KTP</label> <br />
                                <img src="{{ $loan->ktp_path }}" width="500px">
                                <input class="form-control" type="file" id="formFile" name="ktp" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Update Status</label> <br />
                                <select class="form-control" id="barang" name="status" required>
                                    <option selected disabled value="">Pilih Status</option>
                                    @if (in_array($loan->status, array(1)))
                                        <option value="2">Approve</option>
                                        <option value="3">Reject</option>
                                    @elseif (in_array($loan->status, array(2)))
                                        <option value="5">Done</option>
                                        <option value="0">Cancel</option>
                                    @elseif (in_array($loan->status, array(3)))
                                        <option value="0">Cancel</option>
                                    @endif
                                </select>
                            </div>

                            <input type="submit" class="btn btn-warning" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- overview area end -->
    <!-- row area start -->
</div>

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
        input           += "<div class='col-md-1 mt-2'><a href='#!' class='btn btn-sm btn-danger' onclick='deleteBarang(" + barangId + ")'>X</a></div>";
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