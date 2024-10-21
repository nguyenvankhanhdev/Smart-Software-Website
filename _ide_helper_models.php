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
 * @property int $id
 * @property int $tour_id
 * @property int $quantity
 * @property string $booking_date
 * @property string|null $total_amount
 * @property int $status
 * @property string|null $reason_cancel
 * @property string|null $refund_amount
 * @property int $customer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customers $customers
 * @property-read \App\Models\Tours $tours
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereBookingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereReasonCancel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereRefundAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookTours whereTotalAmount($value)
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
 * @property string $ranking
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|Customers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customers whereRanking($value)
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
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
 * @property int $id
 * @property int $tour_id
 * @property string $title
 * @property int $tour_place_id
 * @property string|null $description
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Tours $tour
 * @property-read \App\Models\TourPlaces $tourPlace
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail whereTourPlaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourDetail whereUpdatedAt($value)
 */
	class TourDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $address
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourDetail> $tours
 * @property-read int|null $tours_count
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces query()
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TourPlaces whereUpdatedAt($value)
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
 * @property string|null $description
 * @property string $start_date
 * @property int $status
 * @property string|null $image
 * @property string $time_go
 * @property string $start_place
 * @property int $type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TourDetail> $tourDetail
 * @property-read int|null $tour_detail_count
 * @property-read \App\Models\TourTypes $tourType
 * @method static \Illuminate\Database\Eloquent\Builder|Tours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tours query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereStartPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereTimeGo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tours whereUpdatedAt($value)
 */
	class Tours extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $full_name
 * @property string $username
 * @property string $password
 * @property string|null $start_date
 * @property int $role_id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $remember_token
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

