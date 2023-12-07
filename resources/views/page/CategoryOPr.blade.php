@extends('masterOPr')
@section('contentOPr')
  <div class="content">
  @foreach($categoryOPr as $cateopr)
    <div class="category my-5">
        <b class="category_name">{{$cateopr->nameCategoryOPr}}</b>
        <div class="category_infor">
            <p>
                {{$cateopr->descriptionCategoryOPr}}
            </p>
         </div>
        
        <div class="category-opr row">

            @include('page.categoryOPrDetail')

        </div>
    </div>
    @endforeach
  </div>

<script>
  var Listbar = document.getElementById("listbar");
  function openListbar(){
      Listbar.style = "display: block";
  }
  function closeListbar(){
      Listbar.style = "display: none";
  }
</script>
@endsection
