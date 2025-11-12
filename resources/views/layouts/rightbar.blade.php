<aside class="col-lg-4 sidebar-home">
    <!-- Search -->
    <div class="widget">
        <h4 class="widget-title"><span>Search</span></h4>
        <form action="#!" class="widget-search">
            <input class="mb-3" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
            <i class="ti-search"></i>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
    </div>

    <!-- categories -->
    <div class="widget widget-categories">
        <h4 class="widget-title"><span>Categories</span></h4>
        <ul class="list-unstyled widget-list">
            @foreach ($categories as $category)
                {{-- get posts count --}}
                @php
                    $postCount = DB::table('posts')
                        ->where('category_id', $category->id)
                        ->count();
                @endphp

                <li><a href="{{ route('filter_by_category', $category->id) }}" class="d-flex">{{ $category->name }}
                        <small class="ml-auto">({{ $postCount }})</small></a>
                </li>
            @endforeach
        </ul>
    </div>


</aside>
