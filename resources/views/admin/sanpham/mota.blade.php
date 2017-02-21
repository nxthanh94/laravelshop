@extends('templates.admin.template')

@section('main')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách hãng sản xuất
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Mô tả</th>
                        <th>Kiểu dáng</th>
                        <th>Vỏ</th>
                        <th>Dây</th>
                        <th>Mặt kính</th>
                        <th>Đường kính</th>
                        <th>Độ chịu nước</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $mota     = $arItem['mota'];
                    $kieudang     = $arItem['kieudang'];
                    $vo     = $arItem['vo'];
                    $day     = $arItem['day'];
                    $matkinh     = $arItem['matkinh'];
                    $duongkinh     = $arItem['duongkinh'];
                    $dochiunuoc     = $arItem['dochiunuoc'];
                ?>
                    <tr class="odd gradeX" >
                        <td>{{ $mota }}</td>
                        <td>{{ $kieudang }}</td>
                        <td>{{ $vo }}</td>
                        <td>{{ $day }}</td>
                        <td>{{ $matkinh }}</td>
                        <td>{{ $duongkinh }}</td>
                        <td>{{ $dochiunuoc }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


@endsection