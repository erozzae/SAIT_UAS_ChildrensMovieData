@extends('layoutsMaster.master')
@section('content')

<div class="container" style="margin-top: 10px; margin-bottom:20px">
    <form method="POST" action="{{ route('update.api',$children['id_anak']) }}">
      @csrf
        <fieldset enable>
          <legend style="font-weight: bolder;"><h2>Edit Data Anak Api</h2></legend>

          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Nama Anak</label>
            <input style="width: 30%" type="text" class="form-control" name="nama" placeholder="Masukan nama anak" value="{{ $children['nama'] }}">
          </div>
    
        <div class="mb-3">
          <label class="form-label" style="font-weight: bolder">Jenis Kelamin</label>
          <div class="form-check">
            <input  class="form-check-input" type="radio" name="jenis_kelamin" value='L' @if ( $children['jenis_kelamin']=='L') checked
            @endif>
             <label class="form-check-label">
                Laki-laki
            </label>
            </div>
            
            <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value='P' @if ( $children['jenis_kelamin']=='P') checked
            @endif>
            <label class="form-check-label" >
                Perempuan
            </label>
            </div>
        </div>
          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Alamat</label>
            <input style="width: 30%" type="text" class="form-control" name="alamat" placeholder="Masukan alamat lengkap" value="{{ $children['alamat'] }}">
          </div>

          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Tempat Tanggal Lahir</label>
            <input style="width: 30%" type="text"class="form-control" name="ttl" placeholder="Masukan tempat tanggal lahir" value="{{ $children['ttl'] }}">
          </div>


          <div class="mb-3">
            <label class="form-label"  style="font-weight: bolder">Golongan Darah</label>
            <select name="golongan_darah" style="width: 30%" class="form-select">
             
      
              <option value='A' @if ( $children['golongan_darah']=='A') selected
              @endif>A</option>

              <option value='B' @if ($children['golongan_darah']=='B') selected
                  
              @endif>B</option>
              <option value='AB' @if ($children['golongan_darah']=='AB') selected
                  
              @endif>AB</option>

              <option value='O' @if ($children['golongan_darah']=='O') selected
                  
              @endif>O</option>
            </select>
          </div>
  
          <button type="submit" class="btn btn-success">Submit</button>
        </fieldset>
      </form>
</div>

@endsection