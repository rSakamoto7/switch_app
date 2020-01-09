<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mechanicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mechanicals')->insert([
        [
            'brand' => 'Cherry',
            'name' => '黒軸',
            'weight' => '3',
            'click' => '1',
            'noise' => '2',
            'response' => '2',
            'description' => 'Cherry製の黒軸は、押下圧が重めに製造されたクリック感の無いスイッチです。',
            'source' => 'black.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => '茶軸',
            'weight' => '2',
            'click' => '2',
            'noise' => '2',
            'response' => '2',
            'description' => 'Cherry製の茶軸は、メンブレン式のスイッチと似たタッチ感のスタンダードなスイッチです。',
            'source' => 'brown.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => '青軸',
            'weight' => '3',
            'click' => '3',
            'noise' => '3',
            'response' => '3',
            'description' => 'Cherry製の青軸は、メカニカルスイッチの代名詞でもあり、カチカチという音が特徴的なスイッチです。',
            'source' => 'blue.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => '赤軸',
            'weight' => '1',
            'click' => '1',
            'noise' => '2',
            'response' => '1',
            'description' => 'Cherry製の赤軸は、押下圧が軽めに製造されたクリック感の無いスイッチです。',
            'source' => 'red.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => '静音赤軸',
            'weight' => '2',
            'click' => '1',
            'noise' => '1',
            'response' => '2',
            'description' => 'Cherry製の静音赤軸は、赤軸の打鍵音をさらに小さくしたクリック感の無いスイッチです。',
            'source' => 'pink.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => 'クリア軸',
            'weight' => '3',
            'click' => '2',
            'noise' => '2',
            'response' => '3',
            'description' => 'Cherry製のクリア軸は、茶軸の押下圧をかなり重くしたスイッチです。',
            'source' => 'clear.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => 'シルバー軸',
            'weight' => '1',
            'click' => '1',
            'noise' => '2',
            'response' => '1',
            'description' => 'Cherry製のシルバー軸は、キーの戻る速度が最速に設定されたゲーム向きのスイッチです。',
            'source' => 'silver.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        ]);
    }
}
