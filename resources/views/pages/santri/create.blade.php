@extends('layouts.default')

@section('content')
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!--  /Traffic -->
            <div class="clearfix"></div>
            <!-- Orders -->
            <div class="orders">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/">Dahsboard</a></li>
                              <li class="breadcrumb-item active" aria-current="page"><a href="/santri">Data Santri</a></li>
                              <li class="breadcrumb-item active font-weight-bold" aria-current="page">Tambah Data Santri</li>
                            </ol>
                          </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body--">
                                <div class="container">
                                    <div class="row mt-3">
                                        <div class="col">
                                            <form action="{{url('/santri/store')}}" method="post">
                                              @csrf
                                                <div class="form-group">
                                                  <label for="nis">NIS</label>
                                                  <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukan Nomor Induk Santri" required>
                                                </div>
                                                <div class="form-group">
                                                  <label for="email">Email</label>
                                                  <select class="form-control" id="email" name="users_id">
                                                    <option>-- Pilih users --</option>
                                                    @foreach ($users as $user)
                                                      <option value="{{$user->id}}">{{$user->email}}</option>  
                                                    @endforeach
                                                  </select> 
                                                </div>
                                                <div class="form-group">
                                                  <label for="nama">Nama</label>
                                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                                                </div>
                                                <div class="form-group">
                                                  <label for="jenis_kelamin">Jenis kelamin</label>
                                                  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                    <option>--- Pilih Jenis Kelamin ---</option>
                                                    <option>Pria</option>
                                                    <option>Wanita</option>
                                                  </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="telepon">Telepon</label>
                                                    <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Masukan Telepon">
                                                  </div>
                                                <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" name="tanggal_lahir" id="email" placeholder="Masukan Email">
                                                  </div>  
                                                  <div class="form-group">
                                                      <label for="alamat">Alamat</label>
                                                      <textarea class="ckeditor form-control" name="alamat" id="alamat" rows="5"></textarea>
                                                    </div>
                                                    
                                                  <div class="form-group mt-4">
                                                    <button class="btn btn-primary btn-block">Tambah</button>
                                                  </div>
                                            </form>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.card -->
                    </div>  <!-- /.col-lg-8 -->

                </div>
            </div>
            <!-- /.orders -->
        <!-- /#add-category -->
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
@endsection