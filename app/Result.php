<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    const WEIGHT = [
        0 => [ 'label' => '指定されていません'],
        1 => [ 'label' => '軽め' ],
        2 => [ 'label' => '普通' ],
        3 => [ 'label' => '重め' ],
    ];
    const CLICK = [
        0 => [ 'label' => '指定されていません'],
        1 => [ 'label' => '無し' ],
        2 => [ 'label' => 'ソフト' ],
        3 => [ 'label' => 'ハード' ],
    ];
    const NOISE = [
        0 => [ 'label' => '指定されていません'],
        1 => [ 'label' => '小さめ' ],
        2 => [ 'label' => '普通' ],
        3 => [ 'label' => '大きめ' ],
    ];
    const RESPONSE = [
        0 => [ 'label' => '指定されていません'],
        1 => [ 'label' => '速め' ],
        2 => [ 'label' => '普通' ],
        3 => [ 'label' => '遅め' ],
    ];

    public function getWeightLabelAttribute()
    {
        // 状態値
        $weight = $this->attributes['weight'];

        // 定義されていなければ空文字を返す
        if (!isset(self::WEIGHT[$weight])) {
            return '';
        }

        return self::WEIGHT[$weight]['label'];
    }
    public function getClickLabelAttribute()
    {
        // 状態値
        $click = $this->attributes['click'];

        // 定義されていなければ空文字を返す
        if (!isset(self::CLICK[$click])) {
            return '';
        }

        return self::CLICK[$click]['label'];
    }
    public function getNoiseLabelAttribute()
    {
        // 状態値
        $noise = $this->attributes['noise'];

        // 定義されていなければ空文字を返す
        if (!isset(self::NOISE[$noise])) {
            return '';
        }

        return self::NOISE[$noise]['label'];
    }
    public function getResponseLabelAttribute()
    {
        // 状態値
        $response = $this->attributes['response'];

        // 定義されていなければ空文字を返す
        if (!isset(self::RESPONSE[$response])) {
            return '';
        }

        return self::RESPONSE[$response]['label'];
    }
}
