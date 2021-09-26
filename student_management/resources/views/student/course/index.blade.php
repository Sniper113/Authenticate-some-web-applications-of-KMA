@extends('layouts.student')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 style="padding-left: 250px;font-weight: bold">BẢNG DANH SÁCH CÁC MÔN HỌC</h2>
                <a href=""><button class="btn btn-success" style="margin-bottom: 15px;">Add Course</button></a>
                <table class="table table-bordered">
                    <tr>
                        <th>STT</th>
                        <th>Ma Môn Học</th>
                        <th>Tên Môn Học</th> 
                        <th>Số Tín Chỉ</th>
                        <th>Số Tiết</th>
                        <th>Học Kỳ</th>
                        <th width="80px">Ngay Tao</th>
                        <th width="80px">Ngay Cap Nhat</th>
                    </tr>
                    @foreach ($courseList as $item)
                        <tr id="r_{{ $item->id }}">
                            <td>{{ $index++ }}</td>
                            <td>{{ $item-> mamon}}</td>
                            <td>{{ $item-> tenmon}}</td>
                            <td>{{ $item-> sotinchi}}</td>
                            <td>{{ $item-> sotiet}}</td>
                            <td>{{ $item-> hocky_id}}</td>
                            <td>{{\Carbon\Carbon::parse($item->created_at)->format("d/m/Y")}}</td>
                            <td>{{\Carbon\Carbon::parse($item->updated_at)->format("d/m/Y")}}</td>

                            <td><a href=""><button class="btn btn-warning">Edit</button></a></td>
                            <td><button onclick="" class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                </table>
                {{ $courseList->links() }}
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
