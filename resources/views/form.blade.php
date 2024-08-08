<form action="{{route('show')}}" method="POST" class="weather-search">
    @csrf
    <div class="input-group">
        <input type="search" name="city" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
    </div>
</form>