@foreach($categoryOPrDetail as $oprdetail)
        @if($oprdetail->idCategoryOPr==$cateopr->idCategoryOPr)
            <button class="category-item d-flex justify-content-evenly align-item align-items-center" data-toggle="modal" data-target="#btn{{$oprdetail->idCategoryOPrDetail}}">
                <b>{{$oprdetail->nameCategoryOPrDetail}}</b>
                <img class="img-category-item" src="source/img-project/{{$oprdetail->image}}" alt="category-item">
            </button>
       @endif
       @include('page.OriginalPr')
@endforeach
