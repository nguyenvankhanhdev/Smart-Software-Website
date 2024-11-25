<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $mablogtour
 * @property string $tieude
 * @property string $slug
 * @property string $hinhanh
 * @property string $noidung
 * @property int $trangthaiblog
 * @property int $maloaiblog
 * @property int $manhanvien
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\LoaiBlog $loaiblog
 * @property-read \App\Models\NhanVien $nhanvien
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereHinhanh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereMablogtour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereMaloaiblog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereManhanvien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereTieude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereTrangthaiblog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTour whereUpdatedAt($value)
 */
	class BlogTour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $makhachhang
 * @property int $maphieudattour
 * @property float $chitietsotiendat
 * @property-read \App\Models\KhachHang $khachhang
 * @property-read \App\Models\PhieuDatTour $phieudattour
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietPhieuDatTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietPhieuDatTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietPhieuDatTour query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietPhieuDatTour whereChitietsotiendat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietPhieuDatTour whereMakhachhang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietPhieuDatTour whereMaphieudattour($value)
 */
	class ChiTietPhieuDatTour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $ngaybatdau
 * @property string $ngayketthuc
 * @property int $giachitiettour
 * @property int $matour
 * @property int $madiemdulich
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DiemDuLich $diemdulich
 * @property-read \App\Models\Tour $tour
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour whereGiachitiettour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour whereMadiemdulich($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour whereMatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour whereNgaybatdau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour whereNgayketthuc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietTour whereUpdatedAt($value)
 */
	class ChiTietTour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $machucvu
 * @property string $tenchucvu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PhanCongChucVu> $phancongchucvu
 * @property-read int|null $phancongchucvu_count
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereMachucvu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereTenchucvu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereUpdatedAt($value)
 */
	class ChucVu extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $machuongtrinhtour
 * @property string $tieude
 * @property string $ngay
 * @property string $mota
 * @property int $matour
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Tour $tour
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour whereMachuongtrinhtour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour whereMatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour whereNgay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour whereTieude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChuongTrinhTour whereUpdatedAt($value)
 */
	class ChuongTrinhTour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $madanhgia
 * @property string $noidung
 * @property int $diemdanhgia
 * @property int $makhachhang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KhachHang $khachhang
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia query()
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia whereDiemdanhgia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia whereMadanhgia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia whereMakhachhang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhGia whereUpdatedAt($value)
 */
	class DanhGia extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $madiemdulich
 * @property string $tendiemdulich
 * @property string $motadiemdulich
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ChiTietTour> $chitiettour
 * @property-read int|null $chitiettour_count
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDuLich newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDuLich newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDuLich query()
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDuLich whereMadiemdulich($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDuLich whereMotadiemdulich($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDuLich whereTendiemdulich($value)
 */
	class DiemDuLich extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $logo
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property string|null $copyright
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne whereCopyright($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridOne whereUpdatedAt($value)
 */
	class FooterGridOne extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridThree whereUrl($value)
 */
	class FooterGridThree extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterGridTwo whereUrl($value)
 */
	class FooterGridTwo extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $icon
 * @property string $name
 * @property string $url
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterSocial whereUrl($value)
 */
	class FooterSocial extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $footer_grid_two_title
 * @property string|null $footer_grid_three_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereFooterGridThreeTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereFooterGridTwoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterTitle whereUpdatedAt($value)
 */
	class FooterTitle extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $mahinhanh
 * @property string $tenhinh
 * @property string $duongdan
 * @property int $matour
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Tour $tour
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour query()
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour whereDuongdan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour whereMahinhanh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour whereMatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour whereTenhinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhTour whereUpdatedAt($value)
 */
	class HinhAnhTour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $mahoadon
 * @property float $tongsotien
 * @property string $trangthaithanhtoan
 * @property string $phuongthucthanhtoan
 * @property string|null $masothue
 * @property string|null $tendonvi
 * @property string|null $diachidonvi
 * @property string|null $nguoidaidien
 * @property int|null $maphieuhuytour
 * @property int $maphieudattour
 * @property int|null $makhachhang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PhieuDatTour $phieudattour
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon query()
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereDiachidonvi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereMahoadon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereMakhachhang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereMaphieudattour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereMaphieuhuytour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereMasothue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereNguoidaidien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon wherePhuongthucthanhtoan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereTendonvi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereTongsotien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereTrangthaithanhtoan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HoaDon whereUpdatedAt($value)
 */
	class HoaDon extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $makhachhang
 * @property string $hoten
 * @property string $gioitinh
 * @property string $ngaysinh
 * @property string $diachi
 * @property string $sodienthoai
 * @property string $hinhdaidien
 * @property int|null $maloaikhachhang
 * @property int|null $mataikhoan
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ChiTietPhieuDatTour> $chitietphieudattour
 * @property-read int|null $chitietphieudattour_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DanhGia> $danhgia
 * @property-read int|null $danhgia_count
 * @property-read \App\Models\LoaiKhachHang|null $loaikhachhang
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang query()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereDiachi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereGioitinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereHinhdaidien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereHoten($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereMakhachhang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereMaloaikhachhang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereMataikhoan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereNgaysinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachHang whereSodienthoai($value)
 */
	class KhachHang extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $makhachsan
 * @property string $tenkhachsan
 * @property string $diachi
 * @property string $sodienthoai
 * @property string $chatluong
 * @property float $giakhachsan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KhachSan_Tour> $khachsan_chuongtrinh
 * @property-read int|null $khachsan_chuongtrinh_count
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan query()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan whereChatluong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan whereDiachi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan whereGiakhachsan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan whereMakhachsan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan whereSodienthoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan whereTenkhachsan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan whereUpdatedAt($value)
 */
	class KhachSan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $makhachsan
 * @property int $matour
 * @property string $vitriphong
 * @property int $succhua
 * @property-read \App\Models\KhachSan $khachsan
 * @property-read \App\Models\Tour $tour
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan_Tour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan_Tour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan_Tour query()
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan_Tour whereMakhachsan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan_Tour whereMatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan_Tour whereSucchua($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhachSan_Tour whereVitriphong($value)
 */
	class KhachSan_Tour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $makhuyenmai
 * @property string $thoigianbatdau
 * @property string $thoigianketthuc
 * @property float $phantramgiam
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tour> $tour
 * @property-read int|null $tour_count
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai query()
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai whereMakhuyenmai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai wherePhantramgiam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai whereThoigianbatdau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai whereThoigianketthuc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhuyenMai whereUpdatedAt($value)
 */
	class KhuyenMai extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maloaiblog
 * @property string $tenloaiblog
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogTour> $blogtour
 * @property-read int|null $blogtour_count
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiBlog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiBlog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiBlog query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiBlog whereMaloaiblog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiBlog whereTenloaiblog($value)
 */
	class LoaiBlog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maloaikhachhang
 * @property string $tenloaikhachhang
 * @property int $mucapdunggia
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KhachHang> $khachhang
 * @property-read int|null $khachhang_count
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhachHang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhachHang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhachHang query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhachHang whereMaloaikhachhang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhachHang whereMucapdunggia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhachHang whereTenloaikhachhang($value)
 */
	class LoaiKhachHang extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maloaitour
 * @property string $tenloai
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tour> $tour
 * @property-read int|null $tour_count
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiTour query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiTour whereMaloaitour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiTour whereTenloai($value)
 */
	class LoaiTour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $manhanvien
 * @property string|null $hoten
 * @property string|null $gioitinh
 * @property string|null $ngaysinh
 * @property string|null $sodienthoai
 * @property string|null $bangcap
 * @property string|null $hinhdaidien
 * @property string|null $ngayvaolam
 * @property int|null $tinhtrang
 * @property int|null $maphongban
 * @property int $mataikhoan
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogTour> $blogtour
 * @property-read int|null $blogtour_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PhanCongChucVu> $phancongchucvu
 * @property-read int|null $phancongchucvu_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PhanCongNhanVien> $phancongnhanvien
 * @property-read int|null $phancongnhanvien_count
 * @property-read \App\Models\PhongBan|null $phongban
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien query()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereBangcap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereGioitinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereHinhdaidien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereHoten($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereManhanvien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereMaphongban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereMataikhoan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereNgaysinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereNgayvaolam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereSodienthoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereTinhtrang($value)
 */
	class NhanVien extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $manhomquyen
 * @property string $tennhomquyen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Quyen_Nhomquyen> $quyen_nhomquyen
 * @property-read int|null $quyen_nhomquyen_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|NhomQuyen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhomQuyen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhomQuyen query()
 * @method static \Illuminate\Database\Eloquent\Builder|NhomQuyen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhomQuyen whereManhomquyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhomQuyen whereTennhomquyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhomQuyen whereUpdatedAt($value)
 */
	class NhomQuyen extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $manhanvien
 * @property int $machucvu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ChucVu $chucvu
 * @property-read \App\Models\NhanVien $nhanvien
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongChucVu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongChucVu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongChucVu query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongChucVu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongChucVu whereMachucvu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongChucVu whereManhanvien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongChucVu whereUpdatedAt($value)
 */
	class PhanCongChucVu extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $manhanvien
 * @property int $matour
 * @property string $nhiemvu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\NhanVien $nhanvien
 * @property-read \App\Models\Tour $tour
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongNhanVien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongNhanVien newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongNhanVien query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongNhanVien whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongNhanVien whereManhanvien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongNhanVien whereMatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongNhanVien whereNhiemvu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanCongNhanVien whereUpdatedAt($value)
 */
	class PhanCongNhanVien extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maphieudattour
 * @property int $matour
 * @property string $ngaydattour
 * @property float $tongtienphieudattour
 * @property string $trangthaidattour
 * @property int $tongsoluong
 * @property string $nguoidaidien
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ChiTietPhieuDatTour> $chitietphieudattour
 * @property-read int|null $chitietphieudattour_count
 * @property-read \App\Models\Tour $tour
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour whereMaphieudattour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour whereMatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour whereNgaydattour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour whereNguoidaidien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour whereTongsoluong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour whereTongtienphieudattour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuDatTour whereTrangthaidattour($value)
 */
	class PhieuDatTour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maphieuhuytour
 * @property int $sotienhoan
 * @property string $lydohuy
 * @property string|null $ngayhuy
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuHuyTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuHuyTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuHuyTour query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuHuyTour whereLydohuy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuHuyTour whereMaphieuhuytour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuHuyTour whereNgayhuy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuHuyTour whereSotienhoan($value)
 */
	class PhieuHuyTour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maphongban
 * @property string $tenphongban
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\NhanVien> $nhanvien
 * @property-read int|null $nhanvien_count
 * @method static \Illuminate\Database\Eloquent\Builder|PhongBan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhongBan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhongBan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhongBan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongBan whereMaphongban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongBan whereTenphongban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongBan whereUpdatedAt($value)
 */
	class PhongBan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maphuongtien
 * @property string $tenphuongtien
 * @property int $sochongoi
 * @property string $sodienthoai
 * @property int $giaphuongtien
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PhuongTien_Tour> $phuongtientheochuongtrinh
 * @property-read int|null $phuongtientheochuongtrinh_count
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien whereGiaphuongtien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien whereMaphuongtien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien whereSochongoi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien whereSodienthoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien whereTenphuongtien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien whereUpdatedAt($value)
 */
	class PhuongTien extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $matour
 * @property int $maphuongtien
 * @property int $soluonghanhkhach
 * @property string $ghichu
 * @property-read \App\Models\PhuongTien $phuongtien
 * @property-read \App\Models\Tour $tour
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien_Tour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien_Tour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien_Tour query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien_Tour whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien_Tour whereMaphuongtien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien_Tour whereMatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuongTien_Tour whereSoluonghanhkhach($value)
 */
	class PhuongTien_Tour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maquyen
 * @property string $tenquyen
 * @property string $mota
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Quyen_Nhomquyen> $quyen_nhomquyen
 * @property-read int|null $quyen_nhomquyen_count
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen whereMaquyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen whereTenquyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen whereUpdatedAt($value)
 */
	class Quyen extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $maquyen
 * @property int $manhomquyen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\NhomQuyen $nhomquyen
 * @property-read \App\Models\Quyen $quyen
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen_Nhomquyen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen_Nhomquyen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen_Nhomquyen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen_Nhomquyen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen_Nhomquyen whereManhomquyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen_Nhomquyen whereMaquyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quyen_Nhomquyen whereUpdatedAt($value)
 */
	class Quyen_Nhomquyen extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $matour
 * @property string $tentour
 * @property string $slug
 * @property string $motatour
 * @property int $tinhtrang
 * @property string $hinhdaidien
 * @property string $noikhoihanh
 * @property string|null $thoigiandi
 * @property int $giatour
 * @property int $maloaitour
 * @property int|null $makhuyenmai
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ChiTietTour> $chitiettour
 * @property-read int|null $chitiettour_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ChuongTrinhTour> $chuongtrinhtour
 * @property-read int|null $chuongtrinhtour_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PhieuDatTour> $dattour
 * @property-read int|null $dattour_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\HinhAnhTour> $hinhanhtour
 * @property-read int|null $hinhanhtour_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KhachSan_Tour> $khachsan_tour
 * @property-read int|null $khachsan_tour_count
 * @property-read \App\Models\KhuyenMai|null $khuyenmai
 * @property-read \App\Models\LoaiTour $loaitour
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PhuongTien_Tour> $phuongtien_tour
 * @property-read int|null $phuongtien_tour_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tour query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereGiatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereHinhdaidien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereMakhuyenmai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereMaloaitour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereMatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereMotatour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereNoikhoihanh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereTentour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereThoigiandi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereTinhtrang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tour whereUpdatedAt($value)
 */
	class Tour extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $mataikhoan
 * @property string $tentaikhoan
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $trangthai
 * @property string|null $remember_token
 * @property int $manhomquyen
 * @property string|null $google_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KhachHang|null $khachhang
 * @property-read \App\Models\NhanVien|null $nhanVien
 * @property-read \App\Models\NhomQuyen $nhomquyen
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereManhomquyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMataikhoan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTentaikhoan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

