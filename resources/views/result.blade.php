@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="result-title"><span style="color: #40e0d0;">▶︎</span>あなたが選択した条件は</p>
                    <div class="card-deck">
                        <div class="card result-card">
                            <div class="card-body result-card-body text-center">
                                <h5 class="result-topic">キーの重さ</h5>
                                <p>{{$result->weight}}</p>
                            </div>
                        </div>
                        <div class="card result-card">
                            <div class="card-body result-card-body text-center">
                                <h5>クリック感</h5>
                                <p>{{$result->click}}</p>
                            </div>
                        </div>
                        <div class="card result-card">
                            <div class="card-body result-card-body text-center">
                                <h5>音の大きさ</h5>
                                <p>{{$result->noise}}</p>
                            </div>
                        </div>
                        <div class="card result-card">
                            <div class="card-body result-card-body text-center">
                                <h5>反応速度</h5>
                                <p>{{$result->response}}</p>
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
