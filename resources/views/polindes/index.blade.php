@extends('layouts.master')
@section('content')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <h3 class="page-title">Daftar Polindes</h3>
        <div class="row">
          @foreach ($polindes as $pds)              
          <div class="col-md-4">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">{{$pds->name}}</h3>
              </div>
              <div class="panel-body">
                <p>
                  Tampilkan Data
                </p>
                <button type="button" class="btn btn-warning">Go..</button>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
</div>
</div>
</div>
</div>


@endsection