@extends('layouts.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
<form class="form" method="post" action="/transaksi-gudang">
    @csrf
    <div class="transaksi-gudang">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="lokasi" class="form-label">Lokasi</label>
            <select class="form-control" aria-label="Default select example" id="lokasi" name="lokasi">
              <option value="farmasi">Farmasi</option>
              <option value="polindes">Polindes</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            <input type="hidden" name="jml_obat" id="jml-obat" value="1">
          </div>
        </div>
      </div>


      <div class="form-group">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
      </div>
      <p class="" style="font-weight: bold">Obat</p>
            <div class="obat-detail">
              <div class="row" id="obat-1">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="obat-id" class="form-label">Nama Obat 1</label>
                    <select class="form-control" aria-label="Default select example" name="obat_id_1" id="obat-id">
                      @foreach ($obats as $obat)
                      @if ($obat->id==old('name'))
                      <option value="{{$obat->id}}" selected>{{$obat->name}}</option>
                      @else
                      <option value="{{$obat->id}}">{{$obat->name}}</option>
                      @endif
              
                      @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="jumlah" class="form-label">Jumlah Obat 1</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah_1" required>
                  </div>
                </div>
                
              </div>
      
              </div>
            </div>
        <div class="action">
          <button type="button" class="add-row btn btn-primary"  style="margin-top: 10px; margin-bottom: 10px">+</button> 
        
          <button type="button" class="remove-row btn btn-danger"  style="margin-top: 10px; margin-bottom: 10px">-</button> 
        </div>






    
   
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
    </div>
  </div>
</div>
  <script>
    let increment = 1;

      $(document).ready(function(){
        $( ".add-row" ).click(function(){
            increment++;
            var clone = templateForm(increment);
            $(".obat-detail").append(clone);
            $("#jml-obat").val(increment);
        });
        

      });

      $(".remove-row").click(function(){
          if (increment>1) { 
            $('#obat-'+increment).remove();
            increment--;
            $("#jml-obat").val(increment);
          }
        });
    function generateForm(status) {
    let html = '';
    if (status=='add') {
      increment++;
      for (let index = 1; index <= increment; index++) {
        html += templateForm(index);
        
      }
      
    }else{
        if (increment > 0) {
          increment--;
          for (let index = 1; index <= increment; index++) {
            html += templateForm(index);
            
          }
        }
      }
      $(".obat-detail").html(html);
   }


   function templateForm(i){
    return `
    <div class="row" id="obat-${i}">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="obat-id" class="form-label">Nama Obat ${i}</label>
                  <select class="form-control" aria-label="Default select example" name="obat_id_${i}" id="obat-id">
                    @foreach ($obats as $obat)
                    @if ($obat->id==old('name'))
                    <option value="{{$obat->id}}" selected>{{$obat->name}}</option>
                    @else
                    <option value="{{$obat->id}}">{{$obat->name}}</option>
                    @endif
            
                    @endforeach
                  </select>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="jumlah" class="form-label">Jumlah Obat ${i}</label>
                  <input type="text" class="form-control" id="jumlah" name="jumlah_${i}" required>
                </div>
              </div>
              
            </div>
    `;
   }
  
  </script>
@endsection