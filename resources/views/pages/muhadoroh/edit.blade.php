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
                              <li class="breadcrumb-item active" aria-current="page"><a href="/muhadoroh">Data Santri Muhadoroh</a></li>
                              <li class="breadcrumb-item active font-weight-bold" aria-current="page">Edit Data Santri Muhadoroh</li>
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
                                            <form action="{{route('muhadoroh.update', $muhadoroh->id)}}" method="post">
                                              @method('PUT')
                                              @csrf

                                                <div class="form-group">
                                                  <label for="nis">NIS</label>
                                                  <select type="text" class="form-control" id="nis" name="santri_id" disabled>
                                                    @foreach ($santri as $item)
                                                        <option value="{{$item->id}}" {{$item->id == $muhadoroh->santri_id ? 'selected' : ''}}>{{$item->nis}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                    
                                                <div class="form-group">
                                                  <label for="nama">Nama</label>
                                                  <select type="text" class="form-control" id="nama" name="nama" disabled>
                                                    @foreach ($santri as $item)
                                                        <option value="{{$item->id}}" {{$item->id == $muhadoroh->santri_id ? 'selected' : ''}}>{{$item->nama}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                    
                                                <div class="form-group">
                                                  <label for="tanggal">Tanggal</label>
                                                  <input type="datetime" class="form-control" value="{{$muhadoroh->tanggal}}" id="tanggal" name="tanggal">
                                                </div>

                                                <div class="form-group">
                                                  <label for="keterangan">Keterangan</label>
                                                  <textarea class="form-control" id="keterangan" name="keterangan" rows="5">{{$muhadoroh->keterangan}}</textarea>
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
    @include('sweetalert::alert')
@endsection