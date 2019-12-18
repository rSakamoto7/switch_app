<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanical extends Model
{
    const WEIGHT = [
        1 => [ 'label' => '軽め', 'class' => 'text-success'],
        2 => [ 'label' => '普通', 'class' => 'text-secondary' ],
        3 => [ 'label' => '重め', 'class' => 'text-danger' ],
    ];

    const CLICK = [
        1 => [ 'label' => '無し', 'class' => 'text-success'],
        2 => [ 'label' => 'ソフト(弱め)', 'class' => 'text-secondary' ],
        3 => [ 'label' => 'ハード(強め)', 'class' => 'text-danger' ],
    ];
    
    const NOISE = [
        1 => [ 'label' => '小さめ(スコスコ)', 'class' => 'text-success'],
        2 => [ 'label' => '普通(カタカタ)', 'class' => 'text-secondary' ],
        3 => [ 'label' => '大きめ(カチカチ)', 'class' => 'text-danger' ],
    ];

    const RESPONSE = [
        1 => [ 'label' => '速め', 'class' => 'text-success'],
        2 => [ 'label' => '普通', 'class' => 'text-secondary' ],
        3 => [ 'label' => '遅め', 'class' => 'text-danger' ],
    ];

    // WEIGHT
    public function getWeightLabelAttribute()
    {
        $weight = $this->attributes['weight'];

        if (!isset(self::WEIGHT[$weight])) {
            return '条件が指定されていません';
        }

        return self::WEIGHT[$weight]['label'];
    }

    public function getWeightClassAttribute()
    {
    $weight = $this->attributes['weight'];

    if (!isset(self::WEIGHT[$weight])) {
        return '';
    }

    return self::WEIGHT[$weight]['class'];
    }

    // CLICK
    public function getClickLabelAttribute()
    {
        $click = $this->attributes['click'];

        if (!isset(self::CLICK[$click])) {
            return '条件が指定されていません';
        }

        return self::CLICK[$click]['label'];
    }

    public function getClickClassAttribute()
    {
    $click = $this->attributes['click'];

    if (!isset(self::CLICK[$click])) {
        return '';
    }

    return self::CLICK[$click]['class'];
    }

    // NOISE
    public function getNoiseLabelAttribute()
    {
        $noise = $this->attributes['noise'];

        if (!isset(self::NOISE[$noise])) {
            return '条件が指定されていません';
        }

        return self::NOISE[$noise]['label'];
    }

    public function getNoiseClassAttribute()
    {
    $noise = $this->attributes['noise'];

    if (!isset(self::NOISE[$noise])) {
        return '';
    }

    return self::NOISE[$noise]['class'];
    }

    // RESPONSE
    public function getResponseLabelAttribute()
    {
        $response = $this->attributes['response'];

        if (!isset(self::RESPONSE[$response])) {
            return '条件が指定されていません';
        }

        return self::RESPONSE[$response]['label'];
    }

    public function getResponseClassAttribute()
    {
    $response = $this->attributes['response'];

    if (!isset(self::RESPONSE[$response])) {
        return '';
    }

    return self::RESPONSE[$response]['class'];
    }
}