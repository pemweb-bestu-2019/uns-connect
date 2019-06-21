@extends('layouts.app')

@section('page-inner')
<div class="page-inner container">
    <div class="page-section">
        <!-- grid row -->
        <div class="row">
          <!-- grid column -->
          @include('vendor.include.navigation_manage')
          <!-- grid column -->
          <div class="col-lg-8">
            <!-- .card -->
            <div class="card card-fluid">
              <h6 class="card-header"> New Organization </h6><!-- .card-body -->
              <div class="card-body">
                <form action="#" method="post">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="tf1">Organization Name</label>
                                    <input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="Himpunan Mahasiswa Komputer UNS">
                                    <small id="tf1Help" class="form-text text-muted">Nama lengkap dan panjang dari organisasi anda.</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tf1">Short Name</label>
                                    <input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="HIMASTER">
                                    <small id="tf1Help" class="form-text text-muted">Nama pendek organisasi anda.</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tf1">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tf1">Address</label>
                            <input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="">
                        </div>
                        <hr>
                        <p>Informasi tambahan. Kamu dapat mengosongkannya dan menambahkannya dikemudian waktu.</p>
                        <div class="form-group">
                            <label for="tf1">Phone Number <span class="badge badge-secondary"><em>Optional</em></span></label>
                            <input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="tf1">Website <span class="badge badge-secondary"><em>Optional</em></span></label>
                            <input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="">
                        </div>
                        <hr>
                        <div class="form-group">
                                <label for="tf1">Registration Fee <span class="badge badge-secondary"><em>Optional</em></span></label>
                                <input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="">
                            </div>
                            <div class="form-group">
                                    <label>Settings</label>
                                    <div class="custom-control custom-checkbox mb-1">
                                      <input type="checkbox" class="custom-control-input" id="ckb8"> <label class="custom-control-label" for="ckb8">Open organization registration</label>
                                      <div class="text-muted"> Membuka halaman registrasi untuk organisasi anda. Anda dapat mengubahnya dikemudian hari di laman pengaturan. </div>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="form-actions">
                                        <button type="submit" class="btn btn-primary ml-auto">Create Organization</button>
                                      </div>
                    </fieldset>
                </form>
              </div>
            </div><!-- /.card -->
            <!-- .card -->
          </div><!-- /grid column -->
        </div><!-- /grid row -->
      </div>
</div><!-- /.page-inner -->
@endsection

