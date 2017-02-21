@extends('templates.admin.template')

@section('main')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Sửa sản phẩm
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <?php
            $id = $arItems['id'];
            $name = $arItems['name'];
            $gia = $arItems['gia'];
            $mota = $arItems['mota'];
            $soluong = $arItems['soluong'];
            $kieudang = $arItems['kieudang'];
            $vo = $arItems['vo'];
            $day = $arItems['day'];
            $matkinh = $arItems['matkinh'];
            $duongkinh = $arItems['duongkinh'];
            $dochiunuoc = $arItems['dochiunuoc'];
            $id_hangsx = $arItems['id_hangsx'];
            $id_loaisp = $arItems['id_loaisp'];
            $picture = $arItems['hinhanh'];
            $picUrl     = asset("storage/app/files/{$picture}");
        ?>
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="{{ route('admin.sanpham.edit', $id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" placeholder="Vui lòng nhập tên đồng hồ" required value="{{ $name }}" />
                     @if ($errors->Has ('name'))
                           <p style="color:red"> {!!  $errors->First ('name') !!} </p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Hãng sản xuất</label>
                    <select class="form-control" name="hsx">
                    @foreach($arHangsx as $key => $Hangsx)
                    @if($Hangsx['id'] == $id_hangsx)
                        <option selected="selected" value="{{ $Hangsx['id'] }} ">{{ $Hangsx['tenhsx'] }}</option>
                    @else
                        <option  value="{{ $Hangsx['id'] }}">{{ $Hangsx['tenhsx'] }}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <select class="form-control" name="loaisp">
                    @foreach($arLoaisp as $key => $Loaisp)
                    @if($Loaisp['id'] == $id_loaisp)
                        <option selected="selected" value="{{ $Loaisp['id'] }}">{{ $Loaisp['tenloai'] }}</option>
                    @else
                        <option value="{{ $Loaisp['id'] }}">{{ $Loaisp['tenloai'] }}</option>
                    @endif
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input class="form-control" name="gia" placeholder="Vui lòng nhập giá tiền" required value="{{ $gia }}" />
                     @if ($errors->Has ('gia'))
                           <p style="color:red"> {!!  $errors->First ('gia') !!} </p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="picture">
                </div>
                <div class="form-group">
                    <label>Ảnh cũ</label>
                    <img src="{{ $picUrl }}" width="100px" />
                </div>
                <div class="form-group">
                    <label>Số lượng</label>
                    <input class="form-control" name="soluong" placeholder="Vui lòng nhập số lượng" required value="{{ $soluong }}" />
                     @if ($errors->Has ('soluong'))
                           <p style="color:red"> {!!  $errors->First ('soluong') !!} </p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Kiểu dáng</label>
                    <input class="form-control" name="kieudang" placeholder="Vui lòng nhập kiểu dáng" required value="{{ $kieudang }}" />
                     @if ($errors->Has ('kieudang'))
                           <p style="color:red"> {!!  $errors->First ('kieudang') !!} </p>
                    @endif
                </div>
                 <div class="form-group">
                    <label>Vỏ</label>
                    <input class="form-control" name="vo" placeholder="Vui lòng nhập vỏ đồng hồ" required value="{{ $vo }}" />
                     @if ($errors->Has ('vo'))
                           <p style="color:red"> {!!  $errors->First ('vo') !!} </p>
                    @endif
                </div>
                 <div class="form-group">
                    <label>Dây</label>
                    <input class="form-control" name="day" placeholder="Vui lòng nhập dây đồng hồ" required value="{{ $day }}" />
                     @if ($errors->Has ('day'))
                           <p style="color:red"> {!!  $errors->First ('day') !!} </p>
                    @endif
                </div>
                 <div class="form-group">
                    <label>Mặt kính</label>
                    <input class="form-control" name="matkinh" placeholder="Vui lòng nhập mặt kính" required value="{{ $matkinh }}" />
                     @if ($errors->Has ('matkinh'))
                           <p style="color:red"> {!!  $errors->First ('matkinh') !!} </p>
                    @endif
                </div>
                 <div class="form-group">
                    <label>Đường kính</label>
                    <input class="form-control" name="duongkinh" placeholder="Vui lòng nhập đường kính" required value="{{ $duongkinh }}" />
                     @if ($errors->Has ('duongkinh'))
                           <p style="color:red"> {!!  $errors->First ('duongkinh') !!} </p>
                    @endif
                </div>
                 <div class="form-group">
                    <label>Độ chịu nước</label>
                    <input class="form-control" name="dochiunuoc" placeholder="Vui lòng nhập độ chịu nước" value="{{ $dochiunuoc }}" />
                     @if ($errors->Has ('dochiunuoc'))
                           <p style="color:red"> {!!  $errors->First ('dochiunuoc') !!} </p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="3" name="mota">{{ $mota }}</textarea>
                     @if ($errors->Has ('mota'))
                           <p style="color:red"> {!!  $errors->First ('mota') !!} </p>
                    @endif
                </div>


                <button type="submit" class="btn btn-default">Sửa</button>
                <button type="reset" class="btn btn-default">Reset</button>
            <form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


@endsection