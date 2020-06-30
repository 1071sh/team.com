{{--右カラム--}}
<div class="col-md-2">
    <div class="card">
        <h5 class="card-header">月別アーカイブ</h5>
        <div class="card-body">
            <ul class="monthly_archive">
                @forelse($month_list as $value)
                <li>
                    <a href="{{ route('front_index', ['year' => $value->year, 'month' => $value->month]) }}">
                        {{ $value->year_month }}
                    </a>
                </li>
                @empty
                <p>記事がありません</p>
                @endforelse
            </ul>
        </div>
    </div>
</div>