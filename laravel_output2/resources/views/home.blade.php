@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1>お店を探す</h1>
                <form action="{{url('/search')}}" method="post">
                @csrf
                {{method_field('get')}}
                <div class="form-group">
                    <label>店名で検索</label>
                    <input type="text" class="form-control col-md-5" placeholder="検索したい店名を入力してください" name="shop_name">
                </div>
                <div class="form-group">
                     <label>最寄駅で検索</label>
                     <input type="text" class="form-control col-md-5" placeholder="検索したい駅名を入力してください" name="nearest_station">
                </div>
                <div class="form-group">
                    <label>予算で検索</label>
                    <input type="text" class="form-control col-md-5" placeholder="検索したい金額を入力してください" name="budget">
                    <select class="form-control col-md5" name="budget">
                        <option selected value="0">選択...</option>
                        <option value="1">以上</option>
                        <option value="2">以下</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>目的で検索</label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="use[]" value="1">宴会
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"　name="use[]" value="2">歓送迎会
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"　name="use[]" value="3">少人数
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"　name="use[]" value="4">女子会
                    </div>
                </div>
                <div class="form-group">
                    <label>食べたいもので検索</label>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="food[]" value="1">海鮮
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"　name="food[]" value="2">銘柄牛
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"　name="food[]" value="3">地酒
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"　name="food[]" value="4">クラフトビール
                    </div>
                </div>

                  <button type="submit" class="btn btn-primary col-md-5">検索</button>

                </form>
        </div>
    </div>
</div>
@endsection
