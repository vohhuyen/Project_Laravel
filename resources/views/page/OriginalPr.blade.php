<div class="modal fade" id="btn{{$oprdetail->idCategoryOPrDetail}}" tabindex="-1" role="dialog" aria-labelledby="btn1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">T-Shirts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
            @foreach($originalProduct as $opr)
                    @if($opr->idCategoryOPrDetail==$oprdetail->idCategoryOPrDetail)
                        <a href="opr-detail/{{$opr->idOPr}}" class="col-xl-3 col-lg-3 col-md-4 col-sm-2 col-xs-2">
                            <div class="OPr">
                                <img src="source/imageOPr/{{$opr->image}}" alt="#">
                                <p class="nameOPr">{{$opr->nameOPr}}</p>
                                <p class="nameProvider">{{$opr->aboutOPr}}</p>
                                <p class="priceOPr">{{$opr->descriptionOPr}}</p>
                                <!-- <p class="inforOPr">9 sizes . 108 colors . 21 print providers</p> -->
                            </div>
                        </a>
                        @endif
            @endforeach
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>