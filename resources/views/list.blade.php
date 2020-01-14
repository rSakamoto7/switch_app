@extends('layout')

@section('content')
<div class="container-fluid py-3">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <p class="list-title mb-3"><span style="color: #40e0d0;">▶︎</span>メカニカルスイッチ一覧</p>
                    <p class="d-md-none text-center swipe mb-1">←<i class="far fa-hand-pointer"></i>→スワイプでさらに表示されます</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap mt-0">
                            <thead class="thead-light">
                            <tr>
                                <th class="list-name" width="14%" style="text-align: center;">イメージ</th>
                                <th class="list-name" width="12%" style="text-align: center;">ブランド</th>
                                <th class="list-name" width="14%" style="text-align: center;">スイッチの名称</th>
                                <th class="list-name" width="14%" style="text-align: center;">スイッチの重さ</th>
                                <th class="list-name" width="17%" style="text-align: center;">クリック感</th>
                                <th class="list-name" width="16%" style="text-align: center;">音の大きさ</th>
                                <th class="list-name" width="13%" style="text-align: center;">反応速度</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($mechanicals as $mechanical)
                                <tr>
                                    <td style="text-align: center;"><img alt="thumbnail" src="/assets/img/{{$mechanical->source}}" width="100%"></td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $mechanical->brand }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $mechanical->name }}</td>
                                    <td style="text-align: center; vertical-align: middle;" class="{{ $mechanical->weight_class }}">{{ $mechanical->weight_label }}</td>
                                    <td style="text-align: center; vertical-align: middle;" class="{{ $mechanical->click_class }}">{{ $mechanical->click_label }}</td>
                                    <td style="text-align: center; vertical-align: middle;" class="{{ $mechanical->noise_class }}">{{ $mechanical->noise_label }}</td>
                                    <td style="text-align: center; vertical-align: middle;" class="{{ $mechanical->response_class }}">{{ $mechanical->response_label }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        <a href="{{ route('switches.index') }}" class="btn btn-lg btn-outline-success col-md-12 d-block mt-2" role="button">TOPページに戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
