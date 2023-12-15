@extends('masterAdmin')
@section('contentAdmin')
      <!--  Header Start -->
      <header class="app-header">
        <b>List shop</b>
        <div class="search">
          <i class="icon_search fa-solid fa-magnifying-glass"></i>
          <input class="input_search" type="text" placeholder="What do you need? ">
        </div>
        <button class="addproducts" data-toggle="modal" data-target="#btn1">Create <i class="fa-solid fa-plus"></i></button>
      </header>
      <div class="margin"></div>

      <!-- <div class="modal fade" id="btn1" tabindex="-1" role="dialog" aria-labelledby="btn1Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add shop</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
        <form method="POST" action="{{ route('addshop') }}" enctype="multipart/form-data">
          @csrf
            <label for="nameShop" style="margin-bottom: 1px;">Name:</label>
            <input type="text" name="nameShop" id="nameShop" class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
            <br>
            <label for="coverImageShop" style="margin-bottom: 1px;">ImageShop:</label>
            <input type="file" id="coverImageShop" name="coverImageShop" accept="coverImageShop/*"class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required></input> 
            <br>
            <label for="avataShop" style="margin-bottom: 1px;">avataShop:</label>
            <input type="file" id="avataShop" name="avataShop" accept="avataShop/*"class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required></input> 
            <br>
            <label for="locationShop" style="margin-bottom: 1px;">LocationShop:</label>
            <input type="text" locationShop="locationShop"name="locationShop" id="locationShop" class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
            <br>
            <label for="descriptionShop" style="margin-bottom: 1px;">descriptionShop:</label>
            <input type="text" descriptionShop="descriptionShop"name="descriptionShop" id="descriptionShop" class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
            <br>
            <label for="descriptionShop" style="margin-bottom: 1px;">Select the name of this shop management account:</label>
            <select name="idShop" id="idShop">
                @foreach($users as $users)
                <option value="{{ $users->idUser}}">
                    {{ $users->Name}}
                </option>
                @endforeach

            </select>
            <br>
           <div style=" display: flex;flex-shrink: 0;flex-wrap: wrap;align-items: center;justify-content: flex-end;margin-top:20px">
        <button type="submit" style="border: 0.667em;padding: 12 6 12 6rem;color: #fff;background-color: #6c757d;border-color: #6c757d;padding:10px 25px 10px 25px;margin-right:10px;border-radius:10px">close</button>
        <button type="submit" style="border: 0.667em;padding: 12 6 12 6rem;color: #fff; background-color: #dc3545;border-color: #dc3545;padding:10px 25px 10px 25px;border-radius:10px">Save</button>
         </div>
            </form> 

            </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger" data-dismiss="modal">Save</button>
            </div> -->
          <!-- </div>
        </div>
      </div>  -->


      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <section id="content">
            <table style="width: 100%;" class="table table-white table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>ImageShop</th>
                  <th>avatarShop</th>
                  <th>LocationShop</th>
                  <th>DescriptionShop</th>
                  <th>Upadate</th>
                  <th>Delete</th>
                </tr>
              </thead>

      
              <div id="notification-container" style="position: fixed; bottom: 10px; left: 10px;"></div>

<tbody>
    @foreach($shops as $shop) 
    <tr>
        <!-- Các cột dữ liệu của bảng -->
        <td>{{$shop->idShop}}</td>                 
        <td>{{$shop->nameShop}}</td>
        <td>{{$shop->coverImageShop}}</td>
        <td>{{$shop->avataShop}}</td>
        <td>{{$shop->locationShop}}</td>
        <td>{{$shop->descriptionShop}}</td>
       
        <td>
           
            
         <button class="update" name="update" data-toggle="modal" data-target="#btn{{$shop->idShop}}">Update</button>

           
        </td>
        <td>
            <form role="form" action="{{ route('delete-shop', $shop->idShop) }}" method="post">
                @csrf
                <button class="delete" name="delete">Delete</button>
            </form>
        </td>
    </tr>


    <div class="modal fade" id="btn{{$shop->idShop}}" tabindex="-1" role="dialog" aria-labelledby="btn1Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add shop</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
        <form method="POST" action="{{ route('updateAdminshop') }}" enctype="multipart/form-data">
          @csrf

          <label for="idShop" style="margin-bottom: 1px;">id:</label>
            <input value="{{$shop->idShop}}" type="text" name="idShop" id="idShop" class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
           
            <label for="nameShop" style="margin-bottom: 1px;">Name:</label>
            
            <input value="{{$shop->nameShop}}" type="text" name="nameShop" id="nameShop" class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
           
            <br>
            <label for="coverImageShop" style="margin-bottom: 1px;">ImageShop:</label>
            <input  value="{{$shop->coverImageShop}}" type="file" id="coverImageShop" name="coverImageShop" accept="coverImageShop/*"class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required></input> 
            <br>
            <label for="avataShop" style="margin-bottom: 1px;">avataShop:</label>
            <input type="file" id="avataShop" name="avataShop" accept="avataShop/*"class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required></input> 
            <br>
            <label for="locationShop" style="margin-bottom: 1px;">LocationShop:</label>
            <input type="text"  value="{{$shop->locationShop}}" locationShop="locationShop"name="locationShop" id="locationShop" class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
            <br>
            <label for="descriptionShop" style="margin-bottom: 1px;">descriptionShop:</label>
            <input type="text"  value="{{$shop->descriptionShop}}" descriptionShop="descriptionShop"name="descriptionShop" id="descriptionShop" class="inputAddshop" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
            <br>
            
           
           <div style=" display: flex;flex-shrink: 0;flex-wrap: wrap;align-items: center;justify-content: flex-end;margin-top:20px">
        <button type="submit" style="border: 0.667em;padding: 12 6 12 6rem;color: #fff;background-color: #6c757d;border-color: #6c757d;padding:10px 25px 10px 25px;margin-right:10px;border-radius:10px">close</button>
        <button type="submit" style="border: 0.667em;padding: 12 6 12 6rem;color: #fff; background-color: #dc3545;border-color: #dc3545;padding:10px 25px 10px 25px;border-radius:10px">Save</button>
         </div>
            </form> 

            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger" data-dismiss="modal">Save</button>
            </div> -->
          </div>
        </div>
      </div>


    @endforeach
</tbody>
</table>

          </table>

        </section>


        
        </div>
      </div>
 @endsection  