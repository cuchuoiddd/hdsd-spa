<?php

namespace App\Helpers;

use App\Models\Cfrs;
use App\Models\HistoryCheckin;
use App\Models\Order;
use App\Models\Time;
use App\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Functions
{
    /**
     * Random voucher
     *
     * @param length
     *
     * @return random String
     */
    public static function generateRandomString($length = 6)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function yearMonthDayTime($date)
    {
        return Carbon::createFromFormat('d-m-Y H:i', $date)->format('Y-m-d H:i');
    }

    public static function yearMonthDay($date)
    {
        return Carbon::createFromFormat('d-m-Y', $date)->format('Y-m-d');
    }

    public static function dayMonthYearTime($date)
    {
        return Carbon::parse($date)->format('d-m-Y H:i');
    }


    public static function dayMonthYear($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }

    public static function returnDateChuKy($time_id)
    {
        $data = [];
        $time = Time::find($time_id);
        if (isset($times) && $times) {
            $data['start_date'] = self::yearMonthDay($time->start_date);
            $data['end_date'] = self::yearMonthDay($time->end_date);
        }
        return $data;
    }

    public static function uploadImage($file,$path)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName();
        $picture = Str::slug(substr($filename, 0, strrpos($filename, "."))) . '_' . time() . '.' . $extension;
        $image = $file->move(public_path($path), $picture);
        return $path.$image->getFileInfo()->getFilename();

    }

    public static function unlinkUpload($path)
    {
        if (!empty($path)) {
            @unlink(public_path($path));
        }
    }

    /**
     * @param $arrs
     * @param int $parent
     * @return array
     */
    public static function buildMenu($arrs, $parent = 0)
    {
        $rs = [];
        $rs_child = [];
        foreach ($arrs as $item) {
            if ($item->parent_id === $parent) {
                array_push($rs, $item);
            } else {
                array_push($rs_child, $item);
            }
        }
        if (count($rs_child)) {
            foreach ($rs as $item) {
                $child = self::buildMenu($rs_child, $item->id);
                if (count($child)) {
                    $item->children = $child;
                }
            }
        }
        return $rs;
    }

    public static function getMenu(){
        $settings = Setting::select('id','name','position','parent_id','slug')->orderBy('position')->get();
        $menu = self::buildMenu($settings);
        return $menu;
    }

}