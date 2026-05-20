<?php

use Illuminate\Support\Facades\Route;
use App\Models\AdminPermission;
use App\Lib\Permissions;
if(!function_exists('get_all_permissions'))
{
    function get_all_permissions()
    {
        $permissions = new Permissions;
        return $permissions->all();
    }
}
if (!function_exists('hasPermission')) {
    function hasPermission(int $adminId, string $permission): bool
    {
        return AdminPermission::where('user_id', $adminId)
                ->where('permission', $permission)
                ->exists();
    }
}

if (!function_exists('hasPermissionGroup')) {
    function hasPermissionGroup(int $adminId, string $group): bool
    {
        $permissions = (new Permissions)->getGroup($group);

        if (empty($permissions)) {
            return false;
        }

        return AdminPermission::where('user_id', $adminId)
            ->whereIn('permission', array_keys($permissions))
            ->exists();
    }
}
if (!function_exists('getCompanyId')) {
    function getCompanyId()
    {
        if (api()->user_type_id == 3) {
            return api()->company->id;
        }
    
        return api()->employee->company->id;
    } 
}if (!function_exists('setting')) {
    function setting()
    {
       $setting = App\Models\Setting::firstOrCreate([], ['price' => 1]);
        return $setting;
    } 
}


if (!function_exists('setting')) {
    function setting()
    {
       $setting = App\Models\Setting::firstOrCreate([], ['price' => 1]);
        return $setting;
    } 
}
if (!function_exists('checkRoute')) {
    function checkRoute($route)
    {
        return Route::currentRouteName() === $route;
    }
}

if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admin')->user();
    }
}

if (!function_exists('api')) {
    function api()
    {
        return auth()->guard('api')->user();
    }
}

if (!function_exists('remove_invalid_charcaters')) {
    function remove_invalid_charcaters($str)
    {
        return str_ireplace(['\'', '"', ',', ';', '<', '>', '?'], ' ', $str);
    }
}

if (!function_exists('url_beautify')) {
    function url_beautify($title)
    {
        $url = str_replace(
            [' ', '/', '?', '#', '.', '\\', ',', '--'],
            ['-', '-', '', '', '-', '', '', '-'],
            $title
        );

        return $url;
    }
}

if (!function_exists('formatCurrency')) {
    function formatCurrency($currencyValue)
    {
        $amountValue = $currencyValue;
        $precision = 2;

        if ($amountValue < 900) {
            $numberFormat = number_format($amountValue, $precision);
            $suffix = '';
        } elseif ($amountValue < 900000) {
            $numberFormat = number_format($amountValue / 1000, $precision);
            $suffix = 'K';
        } elseif ($amountValue < 900000000) {
            $numberFormat = number_format($amountValue / 1000000, $precision);
            $suffix = 'M';
        } elseif ($amountValue < 900000000000) {
            $numberFormat = number_format($amountValue / 1000000000, $precision);
            $suffix = 'B';
        } else {
            $numberFormat = number_format($amountValue / 1000000000000, $precision);
            $suffix = 'T';
        }

        if ($precision > 0) {
            $dotZero = '.' . str_repeat('0', $precision);
            $numberFormat = str_replace($dotZero, '', $numberFormat);
        }

        return $numberFormat . $suffix;
    }
}