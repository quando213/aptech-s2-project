<form class="header-search" action="{{ route('listProduct') }}" method="get">
    <div class="header-search__content pos-relative">
        <input type="search" name="search" placeholder="Tìm kiếm" required @isset($search)value="{{ $search }}"@endisset>
        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
    </div>
</form>
