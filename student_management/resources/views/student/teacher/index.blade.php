@extends('layouts.student')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 style="padding-left: 250px;font-weight: bold">BẢNG DANH SÁCH CÁC GIẢNG VIÊN</h2>
                <a href=""><button class="btn btn-success" style="margin-bottom: 15px;">Add Teacher</button></a>
                <table class="table table-bordered">
                    <tr>
                        <th>STT</th>
                        <th>Ma Giảng Viên</th>
                        <th>Ho Giảng Vien</th> 
                        <th>Ten Giảng Vien</th>
                        <th>Giới Tính</th>
                        <th>Ngày Sinh</th>
                        <th>Học Hàm</th>
                        <th>Học Vị</th>
                        <th width="80px">Ngay Tao</th>
                        <th width="80px">Ngay Cap Nhat</th>
                    </tr>
                    @foreach ($teacherList as $item)
                        <tr id="r_{{ $item->id }}">
                            <td>{{ $index++ }}</td>
                            <td>{{ $item-> magv}}</td>
                            <td>{{ $item-> hogv}}</td>
                            <td>{{ $item-> tengv}}</td>
                            <td>{{ $item-> gioitinh}}</td>
                            <td>{{ $item-> ngaysinh}}</td>
                            <td>{{ $item-> hocham}}</td>
                            <td>{{ $item-> hocvi}}</td>
                            <td>{{\Carbon\Carbon::parse($item->created_at)->format("d/m/Y")}}</td>
                            <td>{{\Carbon\Carbon::parse($item->updated_at)->format("d/m/Y")}}</td>

                            <td><a href=""><button class="btn btn-warning">Edit</button></a></td>
                            <td><button onclick="" class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                </table>
                {{ $teacherList->links() }}
            </div>
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript">
        function deleteUser(id) {
            $.post('{{ route('deleteUser') }}', {
                _token: '{{ csrf_token() }}',
                id:id
            }, function(data, status) {
                // location.reload();
                $('#r_'+id).remove();
            })
        }
    </script>
@stop
