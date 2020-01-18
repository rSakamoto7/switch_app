@extends('layout')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-none d-md-block">
                        <p class="result-title"><span style="color: #40e0d0;">▶︎</span>選択した条件は</p>
                        <div class="card-deck">
                            <div class="card result-card">
                                <div class="card-body result-card-body text-center">
                                    <h5 class="result-topic result-name">キーの重さ</h5>
                                    <p class="result-label">{{$result->weight_label}}</p>
                                </div>
                            </div>
                            <div class="card result-card">
                                <div class="card-body result-card-body text-center">
                                    <h5 class="result-topic result-name">クリック感</h5>
                                    <p class="result-label">{{$result->click_label}}</p>
                                </div>
                            </div>
                            <div class="card result-card">
                                <div class="card-body result-card-body text-center">
                                    <h5 class="result-topic  result-name">音の大きさ</h5>
                                    <p class="result-label">{{$result->noise_label}}</p>
                                </div>
                            </div>
                            <div class="card result-card">
                                <div class="card-body result-card-body text-center">
                                    <h5 class="result-topic result-name">反応速度</h5>
                                    <p class="result-label">{{$result->response_label}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(count($mechanicals) !== 0)
                    <p class="result-title"><span style="color: #40e0d0;">▶︎</span>あなたにおすすめのスイッチは</p>
                    <div class="card-deck">
                        @foreach($mechanicals as $mechanical)
                        <div class="col-md-12">
                            <div class="card recommend-switch mb-3"  id="rec-switch">
                                <div class="card-body">
                                    <div class="row">
                                        <img alt="thumbnail" src="/assets/img/{{$mechanical->source}}"  class="switch-img col-md-5">
                                        <div class="col-md-7">
                                            <p class="result-name mt-3">{{$mechanical->brand}}{{$mechanical->name}}</p>
                                            <p class="result-description">{{$mechanical->description}}</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around">
                                        <div class="col-md-3 detail text-center">
                                            <h5 class="result-topic result-name">キーの重さ</h5>
                                            <p class="result-label {{ $mechanical->weight_class }}">{{$mechanical->weight_label}}</p>
                                        </div>
                                        <div class="col-md-3 detail text-center">
                                            <h5 class="result-topic result-name">クリック感</h5>
                                            <p class="result-label {{ $mechanical->click_class }}">{{$mechanical->click_label}}</p>
                                        </div>
                                        <div class="col-md-3 detail text-center">
                                            <h5 class="result-topic result-name">音の大きさ</h5>
                                            <p class="result-label {{ $mechanical->noise_class }}">{{$mechanical->noise_label}}</p>
                                        </div>
                                        <div class="col-md-3 detail text-center">
                                            <h5 class="result-topic result-name">反応速度</h5>
                                            <p class="result-label {{ $mechanical->response_class }}">{{$mechanical->response_label}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p class="result-title text-center"><i class="fas fa-exclamation-triangle mr-2" style="color: red;"></i><br class="d-md-none">条件に合うスイッチは<br class="d-md-none">見つかりませんでした</p>
                    <p class="text-center mt-4 font-weight-bold">条件を減らすか、条件を変更して、<br class="d-md-none">もう一度やり直して下さい</p>
                    @endif
                    <a href="{{ route('switches.index') }}" class="btn btn-lg btn-outline-success col-md-12 d-block my-4" role="button">TOPページに戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
