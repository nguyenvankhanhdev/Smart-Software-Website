<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ChiTietTourController;
use App\Http\Controllers\Backend\ChucVuController;
use App\Http\Controllers\Backend\ChuongTrinhTourController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DiemDuLichController;
use App\Http\Controllers\Backend\FooterGridOneController;
use App\Http\Controllers\Backend\FooterGridThreeController;
use App\Http\Controllers\Backend\FooterGridTwoController;
use App\Http\Controllers\Backend\FooterSocialController;
use App\Http\Controllers\Backend\KhachSan_TourController;
use App\Http\Controllers\Backend\KhachSanController;
use App\Http\Controllers\Backend\KhuyenMaiController;
use App\Http\Controllers\Backend\LoaiBlogController;
use App\Http\Controllers\Backend\LoaiTourController;
use App\Http\Controllers\Backend\NhanVienController;
use App\Http\Controllers\Backend\NhomQuyenController;
use App\Http\Controllers\Backend\PhanCongChucVuController;
use App\Http\Controllers\Backend\PhanCongNhanVienController;
use App\Http\Controllers\Backend\PhongBanController;
use App\Http\Controllers\Backend\PhuongTien_TourController;
use App\Http\Controllers\Backend\PhuongTienController;
use App\Http\Controllers\Backend\Quyen_NhomQuyenController;
use App\Http\Controllers\Backend\QuyenController;
use App\Http\Controllers\Backend\TourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HoaDonController;
use App\Http\Controllers\Backend\LoaiBlogController;
use App\Http\Controllers\Backend\LoaiTourController;
use App\Http\Controllers\Backend\LoaiKhacHangController;
use App\Http\Controllers\Backend\TourController;


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('tour', TourController::class);
Route::post('tour/change-status', [TourController::class, 'changeStatus'])->name('tour.change-status');


Route::resource('diemdulich', DiemDuLichController::class);
Route::resource('khachsan', KhachSanController::class);
Route::resource('phuongtien', PhuongTienController::class);


Route::resource('chuongtrinhtour', ChuongTrinhTourController::class);
Route::post(' chuongtrinhtour/{id}', [ChuongTrinhTourController::class, 'getChuongTrinhByTour'])->name('chuongtrinhtour.byTour');
Route::resource('loaitour', LoaiTourController::class);
Route::resource('khuyenmai', KhuyenMaiController::class);
Route::resource('blog', BlogController::class);
Route::post('blog/change-status', [BlogController::class, 'changeStatus'])->name('blog.change-status');
Route::resource('loaiblog', LoaiBlogController::class);

Route::resource('phuongtien_tour', PhuongTien_TourController::class);
Route::get('phuongtien_tour/edit/{id}/{maphuongtien}', [PhuongTien_TourController::class, 'edit'])->name('phuongtien_tour.edit');
Route::delete('admin/phuongtien_tour/delete/{id}/{maphuongtien}', [PhuongTien_TourController::class, 'destroy'])->name('phuongtien_tour.delete');

Route::resource('khachsan_tour', KhachSan_TourController::class);
Route::get('khachsan_tour/edit/{id}/{makhachsan}', [KhachSan_TourController::class, 'edit'])->name('khachsan_tour.edit');
Route::delete('admin/khachsan_tour/delete/{id}/{makhachsan}', [KhachSan_TourController::class, 'destroy'])->name('khachsan_tour.delete');

Route::resource('chitiettour', ChiTietTourController::class);
Route::get('chitiettour/edit/{id}/{madiemdulich}', [ChiTietTourController::class, 'edit'])->name('chitiettour.edit');
Route::delete('admin/chitiettour/delete/{id}/{madiemdulich}', [ChiTietTourController::class, 'destroy'])->name('chitiettour.delete');

Route::get('/danhsachtour', [PhanCongNhanVienController::class, 'danhsachtour'])->name('danhsachtour');
Route::resource('phancongnhanvien', PhanCongNhanVienController::class);
Route::resource('chucvu', ChucVuController::class);
Route::resource('nhanvien', NhanVienController::class);
Route::resource('phongban', PhongBanController::class);
Route::resource('phancongchucvu', PhanCongChucVuController::class);
Route::delete('phancongchucvu/delete/{id}/{machucvu}', [PhanCongChucVuController::class, 'destroy'])->name('phancongchucvu.delete');
Route::resource('quyen', QuyenController::class);
Route::resource('nhomquyen', NhomQuyenController::class);
Route::get('quyen_nhomquyen/{manhomquyen}', [Quyen_NhomQuyenController::class, 'index'])->name('quyen_nhomquyen.index');
Route::get('quyen_nhomquyen/create/{manhomquyen}', [Quyen_NhomQuyenController::class, 'create'])->name('quyen_nhomquyen.create');
Route::post('quyen_nhomquyen', [Quyen_NhomQuyenController::class, 'store'])->name('quyen_nhomquyen.store');

Route::delete('quyen_nhomquyen/delete/{id}/{maquyen}', [Quyen_NhomQuyenController::class, 'destroy'])->name('quyen_nhomquyen.delete');
Route::get('/chon-nhan-vien/{tenchucvu}', [PhanCongNhanVienController::class, 'chonNhanVienTheoChucVu'])->name('chon-nhan-vien');
Route::post('/phan-cong-nhan-vien', [PhanCongNhanVienController::class, 'store']);
Route::delete('phancongnhanvien/delete/{id}/{manhanvien}', [PhanCongNhanVienController::class, 'destroy'])->name('phancongnhanvien.delete');
Route::get('phancongnhanvien/dsNhanVien/{matour}', [PhanCongNhanVienController::class, 'layDSNhanVienTheoTour'])->name('phancongnhanvien.dsNhanVien');



// Route::prefix('nhanvien')->group(function () {
//     Route::get('/dashboard', [BackendHomeController::class, 'nhanvien_home'])->name('dashboard');
// });
Route::delete('loaiblog/mass-destroy', [LoaiBlogController::class, 'massDestroy'])->name('loaiblog.massDestroy');

Route::resource('footer-grid-one', FooterGridOneController::class);
Route::resource('footer-grid-two', FooterGridTwoController::class);
Route::post('footer-grid-two/change-status', [FooterGridTwoController::class, 'changeStatus'])->name('footer-grid-two.change-status');
Route::post('footer-grid-two/change-title', [FooterGridTwoController::class, 'changeTitle'])->name('footer-grid-two.change-title');

Route::resource('footer-grid-three', FooterGridThreeController::class);
Route::post('footer-grid-three/change-status', [FooterGridThreeController::class, 'changeStatus'])->name('footer-grid-three.change-status');
Route::post('footer-grid-three/change-title', [FooterGridThreeController::class, 'changeTitle'])->name('footer-grid-three.change-title');

Route::resource('footer-socials', FooterSocialController::class);
Route::put('footer-socials/change-status', [FooterSocialController::class, 'changeStatus'])->name('footer-socials.change-status');

// Route::get('subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');
// Route::delete('subscribers/{id}', [SubscriberController::class, 'destory'])->name('subscribers.destory');
// Route::post('subscribers-send-mail', [SubscriberController::class, 'sendMail'])->name('subscribers-send-mail');
