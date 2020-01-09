@extends('layout')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-11">
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
                            <div class="card recommend-switch mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <img alt="thumbnail" src="/assets/img/{{$mechanical->source}}" width="10%" class="col-md-5">
                                        <div class="col-md-7">
                                            <p class="result-name col-md-7 mt-3">{{$mechanical->brand}}{{$mechanical->name}}</p>
                                            <p class="result-description col-md-12">{{$mechanical->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p>条件に合うやつはないよ</p>
                    @endif
                    <a href="{{ route('switches.index') }}" class="btn btn-lg btn-outline-success col-md-12 d-block my-4" role="button">TOPページに戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
