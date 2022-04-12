@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1>お店を探す</h1>
                <form method="post" action="{{url('/search')}}">
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
                    <select class="form-control col-md5" name="equality">
                        <option selected value="0">選択...</option>
                        <option value="1">以上</option>
                        <option value="2">以下</option>
                    </select>
                </div>
                <!--<div class="form-group">
                    <label>目的で検索</label>
                    <div class="custom-control custom-checkbox">
                        <label>
                        <input type="checkbox" class="custom-control-input" name="use[]" value="party">宴会
                        </label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>
                        <input type="checkbox" class="custom-control-input"　name="use[]" value="small">少人数
                        </label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>
                        <input type="checkbox" class="custom-control-input"　name="use[]" value="girls">女子会
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>食べたいもので検索</label>
                    <div class="custom-control custom-checkbox">
                        <label>
                        <input type="checkbox" class="custom-control-input" name="food[]" value="seafood">海鮮
                        </label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>
                        <input type="checkbox" class="custom-control-input"　name="food[]" value="brandcow">銘柄牛
                        </label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>
                        <input type="checkbox" class="custom-control-input"　name="food[]" value="localsake">地酒
                        </label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>
                        <input type="checkbox" class="custom-control-input"　name="food[]" value="craftbeer">クラフトビール
                        </label>
                    </div>
                </div>-->

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary col-md-5">検索</button>
                  </div>

                </form>

                @if(!empty($message))
                <div class="alert alert-primary" role="alert">{{$message}}</div>
                @endif
        </div>
    </div>
</div>
@endsection
