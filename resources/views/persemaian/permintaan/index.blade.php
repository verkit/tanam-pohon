@extends('mylayouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid" id="app">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data pengajuan bibit</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID pengajuan</th>
                            <th>Nama</th>
                            <th>Mengajukan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($permintaan->count() == null)
                            <td colspan="4" class="text-center">data kosong</td>
                        @else
                        @foreach ($permintaan as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->penanggungjawab}}</td>
                            <td>Bibit {{$p->bibit->bibit}} sebanyak {{$p->jumlah_bibit}}</td>
                            <td>
                                <a href="/pengajuan/{{$p->id}}/status" class="btn 
                                    @if ($p->status === 1)
                                    btn-secondary
                                    
                                    @elseif($p->status === 2)
                                    btn-danger
                                    
                                    @elseif($p->status === 3)
                                    btn-primary
                                    
                                    @elseif($p->status === 4)
                                    btn-success
                                    @endif
                                    ">{{$p->statuspengajuan->status}}</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection