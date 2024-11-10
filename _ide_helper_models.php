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
 * @property-read \App\Models\BlogTypes|null $blogtypes
 * @property-read \App\Models\Employees|null $employees
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTours query()
 */
	class BlogTours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogTours> $blogtours
 * @property-read int|null $blogtours_count
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTypes query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTypes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTypes whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTypes whereUpdatedAt($value)
 */
	class BlogTypes extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $tour_id
 * @property string $book_date
 * @property float $price
 * @property string $status
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DetailBookTours> $detailbooktours
 * @property-read int|null $detailbooktours_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Orders> $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\Tours $tours
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereBookDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereUpdatedAt($value)
 */
	class BookTours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $refund_price
 * @property string $reason_cancel
 * @property string|null $date_cancel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Orders> $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\Tours|null $tours
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours query()
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours whereDateCancel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours whereReasonCancel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours whereRefundPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancelTours whereUpdatedAt($value)
 */
	class CancelTours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $level_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Customers> $customers
 * @property-read int|null $customers_count
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTypes query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTypes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTypes whereLevelPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTypes whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomTypes whereUpdatedAt($value)
 */
	class CustomTypes extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $fullname
 * @property string $sex
 * @property string $dob
 * @property string $address
 * @property string $phonenumber
 * @property string $image
 * @property int $custom_type_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CustomTypes $customtypes
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Orders> $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ratings> $ratings
 * @property-read int|null $ratings_count
 * @property-read \App\Models\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|Customers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereCustomTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers wherePhonenumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereUserId($value)
 */
	class Customers extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Departments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departments query()
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereUpdatedAt($value)
 */
	class Departments extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $customer_id
 * @property int $book_tour_id
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BookTours $booktours
 * @property-read \App\Models\Customers $customers
 * @method static \Illuminate\Database\Eloquent\Builder|DetailBookTours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailBookTours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailBookTours query()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailBookTours whereBookTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailBookTours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailBookTours whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailBookTours wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailBookTours whereUpdatedAt($value)
 */
	class DetailBookTours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $hotel_id
 * @property int $tour_id
 * @property string $position_room
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotels $hotels
 * @property-read \App\Models\Tours $tours
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours query()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours wherePositionRoom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailHotelTours whereUpdatedAt($value)
 */
	class DetailHotelTours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $tour_id
 * @property int $transport_id
 * @property int $quantity_custom
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Tours $tours
 * @property-read \App\Models\Transportations $transportations
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours query()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours whereQuantityCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours whereTransportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailsTransportTours whereUpdatedAt($value)
 */
	class DetailsTransportTours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $start_date
 * @property string $end_date
 * @property float $percent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts query()
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discounts whereUpdatedAt($value)
 */
	class Discounts extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $sex
 * @property string $dob
 * @property string $phonenumber
 * @property string $certificate
 * @property string $image
 * @property float $salary
 * @property string $date_entry
 * @property int $department_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogTours> $blogtours
 * @property-read int|null $blogtours_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Task> $task
 * @property-read int|null $task_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TaskEmployees> $taskemployee
 * @property-read int|null $taskemployee_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employees newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employees newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employees query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereDateEntry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees wherePhonenumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employees whereUserId($value)
 */
	class Employees extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phonenumber
 * @property string $quanlity
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DetailHotelTours> $detailHotelTours
 * @property-read int|null $detail_hotel_tours_count
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels wherePhonenumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels whereQuanlity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotels whereUpdatedAt($value)
 */
	class Hotels extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property float $total_amount
 * @property string $status
 * @property string $payment_method
 * @property string $tax_code
 * @property string $unit_name
 * @property string $address_unit
 * @property string $representative
 * @property int|null $cancel_tours_id
 * @property int $book_tour_id
 * @property int $customer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BookTours $booktour
 * @property-read \App\Models\CancelTours|null $canceltours
 * @property-read \App\Models\Customers $customers
 * @method static \Illuminate\Database\Eloquent\Builder|Orders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders query()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereAddressUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereBookTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCancelToursId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereRepresentative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTaxCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereUnitName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereUpdatedAt($value)
 */
	class Orders extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property float|null $salary_coefficient
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Task> $task
 * @property-read int|null $task_count
 * @method static \Illuminate\Database\Eloquent\Builder|Positions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Positions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Positions query()
 * @method static \Illuminate\Database\Eloquent\Builder|Positions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Positions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Positions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Positions whereSalaryCoefficient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Positions whereUpdatedAt($value)
 */
	class Positions extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property string $description
 * @property int $tour_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Tours $tours
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramTours whereUpdatedAt($value)
 */
	class ProgramTours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $content
 * @property int $point
 * @property int $customer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customers $customers
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings wherePoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ratings whereUpdatedAt($value)
 */
	class Ratings extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|Roles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles query()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereUpdatedAt($value)
 */
	class Roles extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \App\Models\Employees|null $employees
 * @property-read \App\Models\Positions|null $positions
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 */
	class Task extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $employee_id
 * @property int $tour_id
 * @property string $task_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employees $employees
 * @property-read \App\Models\Tours $tours
 * @method static \Illuminate\Database\Eloquent\Builder|TaskEmployees newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskEmployees newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskEmployees query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaskEmployees whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskEmployees whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskEmployees whereTaskName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskEmployees whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaskEmployees whereUpdatedAt($value)
 */
	class TaskEmployees extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourDetails> $tourdetails
 * @property-read int|null $tourdetails_count
 * @method static \Illuminate\Database\Eloquent\Builder|TourAttractions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourAttractions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourAttractions query()
 * @method static \Illuminate\Database\Eloquent\Builder|TourAttractions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourAttractions whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourAttractions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourAttractions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourAttractions whereUpdatedAt($value)
 */
	class TourAttractions extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $start_date
 * @property string $end_date
 * @property int $price
 * @property int $tour_id
 * @property int $tour_attraction_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourAttractions> $tourattractions
 * @property-read int|null $tourattractions_count
 * @property-read \App\Models\Tours $tours
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails whereTourAttractionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetails whereUpdatedAt($value)
 */
	class TourDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $tour_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Tours $tours
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourImages whereUpdatedAt($value)
 */
	class TourImages extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourDetails> $tourdetails
 * @property-read int|null $tourdetails_count
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces query()
 */
	class TourPlaces extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tours> $tours
 * @property-read int|null $tours_count
 * @method static \Illuminate\Database\Eloquent\Builder|TourTypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourTypes query()
 * @method static \Illuminate\Database\Eloquent\Builder|TourTypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourTypes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourTypes whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourTypes whereUpdatedAt($value)
 */
	class TourTypes extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property int $status
 * @property string $image
 * @property string $place_tour
 * @property string $tour_time
 * @property int $price
 * @property int $tour_type_id
 * @property int|null $discount_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BookTours> $booktours
 * @property-read int|null $booktours_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DetailHotelTours> $detailhoteltours
 * @property-read int|null $detailhoteltours_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProgramTours> $programtours
 * @property-read int|null $programtours_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TaskEmployees> $taskemployees
 * @property-read int|null $taskemployees_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourDetails> $tourdetails
 * @property-read int|null $tourdetails_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourImages> $tourimages
 * @property-read int|null $tourimages_count
 * @property-read \App\Models\TourTypes|null $tourtypes
 * @method static \Illuminate\Database\Eloquent\Builder|Tours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tours query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereDiscountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours wherePlaceTour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereTourTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereTourTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereUpdatedAt($value)
 */
	class Tours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $phonenumber
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DetailsTransportTours> $detailstransporttours
 * @property-read int|null $detailstransporttours_count
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations wherePhonenumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transportations whereUpdatedAt($value)
 */
	class Transportations extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $username
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $status
 * @property string|null $remember_token
 * @property int $role_id
 * @property string|null $google_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Customers> $customers
 * @property-read int|null $customers_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Roles $role
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

