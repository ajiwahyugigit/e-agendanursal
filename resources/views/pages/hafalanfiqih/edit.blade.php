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
                              <li class="breadcrumb-item active" aria-current="page"><a href="/hafalanfiqih">Data Hafalan FiQih Santri</a></li>
                              <li class="breadcrumb-item active font-weight-bold" aria-current="page">Edit Data Hafalan FiQih Santri</li>
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
                                            <form action="{{route('fiqih.update', $hafalanfiqih->id)}}" method="post">
                                              @method('PUT')
                                              @csrf
                                                <div class="form-group">
                                                  <label for="nis">NIS</label>
                                                  <select type="text" class="form-control" id="nis" name="santri_id" disabled>
                                                      @foreach ($santri as $item)
                                                        <option value="{{$item->id}}" {{$item->id == $hafalanfiqih->santri_id ? 'selected' : ''}}>{{$item->nis}}</option> 
                                                      @endforeach
                                                  </select>
                                                </div>
                                
                                                <div class="form-group">
                                                  <label for="nama">Nama</label>
                                                  <select type="text" class="form-control" id="nama" name="nama" disabled>
                                                    @foreach ($santri as $item)
                                                        <option value="{{$item->id}}" {{$item->id == $hafalanfiqih->santri_id ? 'selected' : ''}}>{{$item->nama}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                              
                                                <div class="form-group">
                                                  <label for="hari">Hari</label>
                                                  <input type="text" class="form-control" id="hari" name="hari" value="{{$hafalanfiqih->hari}}">
                                                </div>

                                                <div class="form-group">
                                                  <label for="tanggal">Tanggal</label>
                                                  <input type="dateime" class="form-control" id="tanggal" name="tanggal" value="{{$hafalanfiqih->tanggal}}">
                                                </div>

                                                <div class="form-group">
                                                  <label for="bab_fiqih">Bab Fiqih</label>
                                                  <input type="text" class="form-control" id="bab_fiqih" name="bab_fiqih" value="{{$hafalanfiqih->bab_fiqih}}">
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