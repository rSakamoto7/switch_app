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
            'description' => '押下圧が重めに調整された、クリック感の無いリニアスイッチ。キーを底打ちした際の音が若干気になることがある。重めに調整されているため、連続で入力すると指に疲労を感じる。',
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
            'description' => 'メンブレン式のスイッチと類似した、軽いクリック感のあるタクタイルスイッチ。押下時の音や反応の速度は平均的であり、スタンダードで無難なメカニカルスイッチであると言える。',
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
            'description' => 'メカニカルスイッチの代名詞とも言える、カチカチという音が特徴的なクリッキースイッチ。クリック感が生じる際に、かなり大きな音を発する。クリックの際に引っ掛かりを感じるため、連続入力をするのは少し難しい。',
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
            'description' => '押下圧が軽めに製造された、クリック感の無いリニアスイッチです。キーを底打ちした際の音が気になることはあるが、その軽さと反応速度の速さから、高速タイピングにも向いており、ゲームのみでなくオフィスでの使用も推奨できる。',
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
            'description' => '音の静かさが印象的なリニアスイッチ。赤軸のタイプ音を極限まで静音化した影響で、少し押下圧が重くなり、反応速度が遅くなったように感じる。静音化されたことにより、オフィスでの使用に最適となった。',
            'source' => 'pink.png',
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
            'description' => 'キーの戻る速度が最速に設定されたゲーム向きのスイッチ。押下圧はかなり軽く、クリック感は無いリニア仕上げ。キーを底打ちした際の音が若干気になることがある。',
            'source' => 'silver.png',
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
            'description' => '軽めのクリック感があるタクタイルスイッチ。茶軸のクリック感や音の大きさをそのまま引き継ぎながら、押下圧を少し重くした茶軸の重量版モデル。スタンダードなタッチ感で、なおかつ重めのスイッチが好みの人向け。',
            'source' => 'clear.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => 'グレー軸',
            'weight' => '3',
            'click' => '2',
            'noise' => '2',
            'response' => '3',
            'description' => '軽めのクリック感があるタクタイルスイッチ。茶軸のクリック感や音の大きさをそのまま引き継ぎながら、押下圧をクリア軸よりもさらに重くした茶軸の最重量版モデル。スタンダードなタッチ感で、なおかつ重めのスイッチが好みの人向け。',
            'source' => 'silver.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => 'グリーン軸',
            'weight' => '3',
            'click' => '3',
            'noise' => '3',
            'response' => '3',
            'description' => 'カチカチと大きな音がなるのが特徴的な、クリック感の強いスイッチ。青軸の押下圧をかなり重くしたモデルで、高速でキーを入力するのは少し難しい。',
            'source' => 'green.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'brand' => 'Cherry',
            'name' => '静音黒軸',
            'weight' => '3',
            'click' => '1',
            'noise' => '1',
            'response' => '2',
            'description' => '音の静かさが印象的なリニアスイッチ。黒軸の特徴である重めの押下圧や平均的な反応速度をそのまま引き継ぎながら、タイプ音を極限まで小さくした黒軸の静音モデル。静音化されたことにより、オフィスでの使用に最適となった。',
            'source' => 'gray.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        ]);
    }
}
