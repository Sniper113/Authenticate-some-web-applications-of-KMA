@extends('layouts.student')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 style="padding-left: 250px;font-weight: bold">BẢNG ĐIỂM CÁC SINH VIÊN</h2>
                <a href="{{ route('addUser') }}"><button class="btn btn-success" style="margin-bottom: 15px;">Add User</button></a>
                <table class="table table-bordered">
                    <tr>
                        <th>STT</th>
                        <th>Mã Sinh Viên</th>
                        <th>Họ Tên Sinh Viên</th>
                        <th>Lớp</th>
                        <th>Mã Môn Học</th>
                        <th>Điểm Chuyên Cần</th>
                        <th>Điểm Thường Xuyên</th>
                        <th>Điểm Giữa Kỳ</th>
                        <th>Điểm Cuối Kỳ</th>
                        <th>Điểm Thi Lại</th>
                    </tr>
                    @foreach ($student as $st)
                <tr>
                    <th>{{$st->rownum}}</th>
                    <th>{{$st->masv}}</th>
                    <th>{{$st->hosv.' '.$st->tensv}}</th>
                    <th>{{$st->malop}}</th>
                    <th>{{$st->mamon}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemcc','{{$st->diem_id}}','{{$st->sv_id}}','{{$st->monhoc_id}}')">{{$st->diemcc}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemtx','{{$st->diem_id}}','{{$st->sv_id}}','{{$st->monhoc_id}}')">{{$st->diemtx}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemgk','{{$st->diem_id}}','{{$st->sv_id}}','{{$st->monhoc_id}}')">{{$st->diemgk}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemck','{{$st->diem_id}}','{{$st->sv_id}}','{{$st->monhoc_id}}')">{{$st->diemck}}</th>
                    <th contenteditable="true" onBlur="saveToDatabase(this,'diemthilai','{{$st->diem_id}}','{{$st->sv_id}}','{{$st->monhoc_id}}')">{{$st->diemthilai}}</th>
                </tr>
            @endforeach
                </table>
                
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
