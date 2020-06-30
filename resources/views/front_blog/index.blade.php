@extends('front_blog.app')
@section('title', '私のブログ')

@section('main')
<div class="col-md-8 offset-md-1">
    {{--forelse ディレクティブを使うと、データがあるときはループし、無いときは @empty 以下を実行する--}}
    @forelse($list as $article)
    <div class="card mb-4">
        <h3 class="card-header">
            {{--post_date はモデルクラスで $dates プロパティに指定してあるので、自動的に Carbon インスタンスにキャストされる--}}
            {{ $article->post_date->format('Y/m/d(D)') }}　{{ $article->title }}
        </h3>
        <div class="card-body">
            {{--nl2br 関数で改行文字を <br> に変換する。これをエスケープせずに表示させるため {!! !!} で囲む--}}
            {{--ただし、このまま出力するととても危険なので e メソッドで htmlspecialchars 関数を通しておく--}}
            {!! nl2br(e($article->body)) !!}
        </div>
        <div class="card-footer text-right">
            {{--updated_at も同様に自動的に Carbon インスタンスにキャストされる--}}
            {{ $article->updated_at->format('Y/m/d H:i:s') }}
        </div>
    </div>
    @empty
    <p>記事がありません</p>
    @endforelse

    {{ $list->links() }}
</div>
@endsection