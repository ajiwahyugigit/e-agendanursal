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
                              <li class="breadcrumb-item active font-weight-bold" aria-current="page">Data Santri</li>
                            </ol>
                          </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-11">
                                        <h4 class="box-title">Data Santri </h4>
                                    </div>
                                    <div class="col">
                                        <a href="/santri/create" class="badge badge-primary p-2">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Telepon</th>
                                                <th>ROLE</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($santri as $item)
                                            <tr>
                                                <td> {{$item->nis}} </td>
                                                <td>  <span class="name">{{$item->users->name}}</span> </td>
                                                <td><span>{{$item->users->email}}</span></td>
                                                <td><span>{{$item->jenis_kelamin}}</span></td>
                                                <td> <span class="product">{{$item->telepon}}</span> </td>
                                                <td> <span class="product">{{$item->users->role}}</span> </td>
                                                <td>
                                                    <a href="" class="badge badge-info">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{url('santri/'.$item->id.'/edit')}}" class="badge badge-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <form action="{{route('santri.destroy', $item->id)}}" method="post"  onsubmit="return confirm('Yakin dihapus?')" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="badge badge-danger border-0">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>

                                                    {{-- <a href="" class="badge badge-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a> --}}
                                                </td>
                                            </tr>
                                            @empty
                                                
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
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