
                    
<div class="table-responsive">
    <table class="table table-striped table-bordered datatable-extended">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Telp/HP</th>
                <th>Alamat</th>
                <th>Asal Perusahaan</th>
                <th>Jabatan</th>
                <th>#</th>
            </tr>
        </thead>                                    
        <tbody>
            @foreach ($peserta as $key=>$item)
            @php
                $nama=$item->nama_lengkap;
            @endphp
                <tr>
                    <td class="text-center">{{(++$key)}}</td>    
                    <td class="text-left">{{$nama}}</td>    
                    <td class="text-left">{{$item->email}}</td>    
                    <td class="text-center">{{$item->hp}}</td>    
                    <td class="text-center">{{$item->alamat}}</td>    
                    <td class="text-center">{{$item->perusahaan->nama_perusahaan}}</td>    
                    <td class="text-center">{{$item->jabatan}}</td>    
                    <td class="text-center">
                        <a href="{{url('peserta/'.$item->id)}}" class="btn btn-xs btn-info btn-rounded" data-toggle="tooltip" title="Edit Data"><i class="fa fa-edit" ></i></a> 
                           
                        <a href="javascript:hapus({{$item->id}})" class="btn btn-xs btn-danger btn-rounded" data-toggle="tooltip" title="Hapus Data"><i class="fa fa-trash" ></i></a>    
                    </td>    
                </tr>    
            @endforeach                                       
        </tbody>
    </table>
</div>
                                    
<style>
    .app .table tr td
    {
        padding:5px 10px;
    }
</style>