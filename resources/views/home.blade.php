@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('switches.index') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="weight">好みのキーの重さは？</label>
                            <select name="weight" id="weight" class="form-control custom-select">
                                <option value="0" selected>選択しない</option>
                                <option value="1">軽め</option>
                                <option value="2">普通</option>
                                <option value="3">重め</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="click">好みのクリック感は？</label>
                            <select name="click" id="click" class="form-control custom-select">
                                <option value="0" selected>選択しない</option>
                                <option value="1">無し</option>
                                <option value="2">ソフト(弱め)</option>
                                <option value="3">ハード(強め)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="noise">好みの音の大きさは？</label>
                            <select name="noise" id="noise" class="form-control custom-select">
                                <option value="0" selected>選択しない</option>
                                <option value="1">小さめ(スコスコ)</option>
                                <option value="2">普通(カタカタ)</option>
                                <option value="3">大きめ(カチカチ)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="response">好みの反応速度は？</label>
                            <select name="response" id="response" class="form-control custom-select">
                                <option value="0" selected>選択しない</option>
                                <option value="1">速め</option>
                                <option value="2">普通</option>
                                <option value="3">遅め</option>
                            </select>
                        </div>
                        <div>
                            <input class="btn btn-lg btn-outline-success col-md-12 home-btn" type="submit" value="この条件でスイッチを探す">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
