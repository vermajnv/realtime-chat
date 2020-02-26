@extends('front.layouts.app')

@section('content')
    <!-- Main Content Body Start -->
    <div class="main-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores
        necessitatibus soluta enim adipisci nobis voluptas animi et, saepe nulla
        rerum facere suscipit eos quae illum ex amet vero accusantium eum.
    </div>
    <!-- Main Content Body End -->
@endsection

@push('scripts')
    <script>
    // SearchBar Card Click Effect Start.
    const advocateSearchCard = document.getElementsByClassName(
        "searchbar-card-overlay"
    )[0];

    const casesSearchCard = document.getElementsByClassName(
        "searchbar-card-overlay"
    )[1];

    let searchCardVal = -1;

    advocateSearchCard.addEventListener("click", function() {
        advocateSearchCard.innerHTML = '<i class="fa fa-check-circle"></i>';
        advocateSearchCard.style.opacity = 1;
        casesSearchCard.innerHTML = "";
        casesSearchCard.style.opacity = 0;
        searchCardVal = 0;
        console.log(searchCardVal);
    });

    casesSearchCard.addEventListener("click", function() {
        advocateSearchCard.innerHTML = "";
        advocateSearchCard.style.opacity = 0;
        casesSearchCard.innerHTML = '<i class="fa fa-check-circle"></i>';
        casesSearchCard.style.opacity = 1;
        searchCardVal = 1;
        console.log(searchCardVal);
    });
    // SearchBar Card Click Effect End.
</script>
@endpush
