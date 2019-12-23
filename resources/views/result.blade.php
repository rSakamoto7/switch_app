@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="result-title"><span style="color: #40e0d0;">▶︎</span>選択した条件は</p>
                    <div class="card-deck">
                        <div class="card result-card">
                            <div class="card-body result-card-body text-center">
                                <h5 class="result-topic">キーの重さ</h5>
                                <p class="result-label">{{$result->weight_label}}</p>
                            </div>
                        </div>
                        <div class="card result-card">
                            <div class="card-body result-card-body text-center">
                                <h5 class="result-topic">クリック感</h5>
                                <p class="result-label">{{$result->click_label}}</p>
                            </div>
                        </div>
                        <div class="card result-card">
                            <div class="card-body result-card-body text-center">
                                <h5 class="result-topic">音の大きさ</h5>
                                <p class="result-label">{{$result->noise_label}}</p>
                            </div>
                        </div>
                        <div class="card result-card">
                            <div class="card-body result-card-body text-center">
                                <h5 class="result-topic">反応速度</h5>
                                <p class="result-label">{{$result->response_label}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            <a href="{{ route('switches.index') }}" class="btn btn-lg btn-outline-success col-md-12 d-block my-4" role="button">TOPページに戻る</a>
            </div>
        </div>
    </div>
</div>
@endsection
