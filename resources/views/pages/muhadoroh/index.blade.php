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
                            <li class="breadcrumb-item active font-weight-bold" aria-current="page">Data Santri Muhadoroh</li>
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
                                        <h4 class="box-title">Data Santri Muhadoroh </h4>
                                    </div>
                                    <div class="col">
                                        <a href="/muhadoroh/create" class="badge badge-primary p-2">
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
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @forelse ($muhadoroh as $item)
                                            <tr>
                                                <td> {{$item->santri->nis}} </td>
                                                <td>{{$item->santri->nama}}</td>
                                                <td>{{$item->tanggal}}</td>
                                                <td>{{$item->keterangan}}</td>
                                                <td>
                                                    <a href="{{url('muhadoroh/'.$item->id.'/edit')}}" class="badge badge-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{route('muhadoroh.destroy', $item->id)}}" method="post" class="d-inline" onsubmit="return confirm('yakin dihapus?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge badge-danger border-0">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    </form>
                                                </td>
                                            </tr>
                                           @empty
                                               <tr>
                                                   <td colspan="6" class="text-center">Data Kosong</td>
                                               </tr>
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

    @include('sweetalert::alert')
@endsection