@extends('layoutsMaster.master')
@section('content')

<div class="container" style="margin-top: 10px; margin-bottom:20px">
    <form method="POST" action="{{ route('storeData.api') }}">
      @csrf
        <fieldset enable>
          <legend style="font-weight: bolder;"><h2>Tambah Data Anak</h2></legend>

          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Nama Anak</label>
            <input style="width: 30%" type="text" class="form-control" name="nama" placeholder="Masukan nama anak">
          </div>
         
          {{-- <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukan jenis kelamin">
          </div> --}}
        <div class="mb-3">
          <label class="form-label" style="font-weight: bolder">Jenis Kelamin</label>
          <div class="form-check">
            <input  class="form-check-input" type="radio" name="jenis_kelamin" value='L'  enable>
             <label class="form-check-label">
                Laki-laki
            </label>
            </div>
            
            <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value='P' enable>
            <label class="form-check-label" >
                Perempuan
            </label>
            </div>
        </div>
          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Alamat</label>
            <input style="width: 30%" type="text" class="form-control" name="alamat" placeholder="Masukan alamat lengkap">
          </div>

          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Tempat Tanggal Lahir</label>
            <input style="width: 30%" type="text"class="form-control" name="ttl" placeholder="Masukan tempat tanggal lahir">
          </div>


          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Golongan Darah</label>
            <select name="golongan_darah" style="width: 30%" class="form-select">
              <option>Pilih Golongan Darah</option>
              <option value='A'>A</option>
              <option value='B'>B</option>
              <option value='AB'>AB</option>
              <option value='O'>O</option>
            </select>
          </div>
  
          <button type="submit" class="btn btn-success">Submit</button>
        </fieldset>
      </form>
</div>

@endsection