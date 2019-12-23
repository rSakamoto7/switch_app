@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <p class="list-title"><span style="color: #40e0d0;">▶︎</span>メカニカルスイッチ一覧</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="18%" style="text-align: center;">ブランド</th>
                                <th width="18%" style="text-align: center;">スイッチの名称</th>
                                <th width="16%" style="text-align: center;">スイッチの重さ</th>
                                <th width="16%" style="text-align: center;">クリック音</th>
                                <th width="16%" style="text-align: center;">音の大きさ</th>
                                <th width="16%" style="text-align: center;">反応速度</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($mechanicals as $mechanical)
                                <tr>
                                    <td style="text-align: center;">{{ $mechanical->brand }}</td>
                                    <td style="text-align: center;">{{ $mechanical->name }}</td>
                                    <td style="text-align: center;" class="{{ $mechanical->weight_class }}">{{ $mechanical->weight_label }}</td>
                                    <td style="text-align: center;" class="{{ $mechanical->click_class }}">{{ $mechanical->click_label }}</td>
                                    <td style="text-align: center;" class="{{ $mechanical->noise_class }}">{{ $mechanical->noise_label }}</td>
                                    <td style="text-align: center;" class="{{ $mechanical->response_class }}">{{ $mechanical->response_label }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        <a href="{{ route('switches.index') }}" class="btn btn-lg btn-outline-success col-md-12 d-block" role="button">TOPページに戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
