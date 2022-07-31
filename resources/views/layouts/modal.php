
         
            <button  class="btn-primary btn my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Tambah Data
            </button>
          <!-- - Modal --> 
          <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Penerimaan Obat</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nama Obat</label>
                      <input type="text" class="form-control" id="name" name="name" required >
                    </div>
                    <div class="mb-3">
                      <label for="jenis-obat" class="form-label">Jenis Obat</label>
                      <select class="form-select" aria-label="Default select example" name="jenis_obat_id" id="jenis-obat">
                        @foreach ($jenis_obats as $jenis_obat)
                        @if ($jenis_obat->id==old('jenis_obat_id'))
                        <option value="{{$jenis_obat->id}}" selected>{{$jenis_obat->type}}</option>
                        @else
                        <option value="{{$jenis_obat->id}}">{{$jenis_obat->type}}</option>
                        @endif

                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="jumlah" class="form-label">Jumlah</label>
                      <input type="text" class="form-control" id="jumlah" name="jumlah" required >
                    </div>
                    <div class="mb-3">
                      <label for="tanggal_kadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                      <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required >
                    </div>

                    <div class="mb-3">
                      <label for="satuan" class="form-label">Satuan</label>
                      <select class="form-select" aria-label="Default select example" id="satuan" name="satuan">
                        <option value="pcs">pcs</option>
                        <option value="tablet">tablet</option>
                        <option value="vial">vial</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="tanggal" class="form-label">Tanggal Penerimaan</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" required >
                    </div>
                    <div class="mb-3">
                      <label for="sumber_dana" class="form-label">Sumber Dana</label>
                      <input type="text" class="form-control" id="sumber_dana" name="sumber_dana" required >
                    </div>
                    <div class="mb-3">
                      <label for="keterangan" class="form-label">Keterangan</label>
                      <input type="text" class="form-control" id="keterangan" name="keterangan" required >
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          </html>


<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>
<option value="pcs">pcs</option>