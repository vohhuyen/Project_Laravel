@foreach($color as $color)
@if($product->colorPr==$color->idColor)
<td style="width:9%;height:200px;vertical-align: middle;">{{$color->NameColor}}</td>
@endif
@endforeach	