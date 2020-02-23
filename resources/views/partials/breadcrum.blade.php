<div class="row mb-2">
    <div class="col-sm-6">
        <h1>{{$title}}</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            @foreach ($breadcrums as $key => $breadcrum)
                @if (count($breadcrums) != $key + 1)
                    <li class="breadcrumb-item">
                        <a href="#">{{$breadcrum}}</a>
                    </li>
                @else
                    <li class="breadcrumb-item active">{{$breadcrum}}</li>
                @endif
            @endforeach
        </ol>
    </div>
</div>
