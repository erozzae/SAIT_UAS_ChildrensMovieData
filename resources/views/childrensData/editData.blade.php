@extends('layoutsMaster.master')
@section('content')

<div class="container" style="margin-top: 10px; margin-bottom:20px">
    <form method="PUT" action="{{ route('childrensData.update', $childrensData->id_anak) }}">
      @csrf
        <fieldset enable>
          <legend style="font-weight: bolder;"><h2>Edit Data Anak</h2></legend>

          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Nama Anak</label>
            <input style="width: 30%" type="text" class="form-control" name="nama" placeholder="Masukan nama anak" value="{{ $childrensData->nama }}">
          </div>
         
          {{-- <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukan jenis kelamin">
          </div> --}}
        <div class="mb-3">
          <label class="form-label" style="font-weight: bolder">Jenis Kelamin</label>
          <div class="form-check">
            <input  class="form-check-input" type="radio" name="jenis_kelamin" value='L' @if ($childrensData->jenis_kelamin == 'L') checked
            @endif>
             <label class="form-check-label">
                Laki-laki
            </label>
            </div>
            
            <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value='P' @if ($childrensData->jenis_kelamin == 'P') checked
                
            @endif>
            <label class="form-check-label" >
                Perempuan
            </label>
            </div>
        </div>
          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Alamat</label>
            <input style="width: 30%" type="text" class="form-control" name="alamat" placeholder="Masukan alamat lengkap" value="{{ $childrensData->alamat }}">
          </div>

          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Tempat Tanggal Lahir</label>
            <input style="width: 30%" type="text"class="form-control" name="ttl" placeholder="Masukan tempat tanggal lahir" value="{{ $childrensData->ttl }}">
          </div>


          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Golongan Darah</label>
            <select name="golongan_darah" style="width: 30%" class="form-select">

              <option value='A' @if ($childrensData->golongan_darah == 'A') selected
              @endif>A</option>

              <option value='B' @if ($childrensData->golongan_darah == 'B') selected                  
              @endif>B</option>

              <option value='AB' @if ($childrensData->golongan_darah == 'AB') selected    
              @endif>AB</option>

              <option value='O' @if ($childrensData->golongan_darah == 'O') selected                
              @endif>O</option>
            </select>
          </div>
  
          <button type="submit" class="btn btn-success">Submit</button>
        </fieldset>
      </form>
</div>

@endsection