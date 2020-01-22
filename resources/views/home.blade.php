@extends('layout')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card big-card">
                <div class="row justify-content-center">
                    <img src="/assets/img/switch-adviser.png" alt="logo" class="logo text-center">
                </div>
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
                            <input class="btn btn-lg btn-outline-success col-md-12 home-btn" id="find_switch" type="submit" value="スイッチを探す">
                        </div>
                    </form>
                    <div class="modal fade" id="checkmodal" tabindex="-1" role="dialog" aria-labelledby="checkmodalTitle" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row mt-3">
                                            <h5 class="col-md-12 modal-message">スイッチの条件が1つも選択されていません。</h5>
                                            <h5 class="col-md-12 modal-message">条件を最低1つ選択して検索してください。</h5>
                                        </div>
                                        <div class="row justify-content-center">
                                            <button type="button" class="btn btn-lg btn-outline-success col-md-11 my-3" data-dismiss="modal">フォーム画面に戻る</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
