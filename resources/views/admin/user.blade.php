@extends('masterAdmin')
@section('contentAdmin')
      <!--  Header Start -->
      <header class="app-header">
        <b>List User</b>
        <div class="search">
          <i class="icon_search fa-solid fa-magnifying-glass"></i>
          <input class="input_search" type="text" placeholder="What do you need? ">
        </div>
        <button class="addproducts" data-toggle="modal" data-target="#btn1">Create <i class="fa-solid fa-plus"></i></button>
      </header>
      <div class="margin"></div>

      <div class="modal fade" id="btn1" tabindex="-1" role="dialog" aria-labelledby="btn1Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
        <form method="POST" action="{{ route('adduser') }}" enctype="multipart/form-data">
          @csrf
            <!-- @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif -->
              <label for="name" style="margin-bottom: 1px;">Name:</label>
              <br>
            <input type="text" name="name" id="name" class="inputAddUser" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
            <label for="email">Email:</label>
            <br>
              <input type="Email" name="email" id="email" class="inputAddUser" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required>
              <label for="password"style="margin-bottom:10px;">Password:</label>
            <br>
            <input type="password" name="password" id="password" class="inputAddUser" onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';"required> 
              <label for="role"onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">Role:</label>
            <select name="role" id="role" style="border: 1px solid #b2d8f9;border-radius: 1px"onfocus="this.style.outline='2px solid tomato';" onblur="this.style.outline='none';">
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
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


      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <section id="content">
            <table style="width: 100%;" class="table table-white table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Authorization</th>
                  <th>Upadate</th>
                  <th>Delete</th>
                </tr>
              </thead>

      
              <div id="notification-container" style="position: fixed; bottom: 10px; left: 10px;"></div>

<tbody>
    @foreach($users as $user) 
    <tr>
        <!-- Các cột dữ liệu của bảng -->
        <td>{{$user->idUser}}</td>                 
        <td>{{$user->Name}}</td>
        <td>{{$user->Email}}</td>                
        @if($user->role==1 || $user->role==3)
            <td>User</td>
        @elseif($user->role==2)
            <td>Admin</td> 
        @else
            <td>Null</td>                     
        @endif
        <td>
            <!-- <form role="form" action="{{ route('lockup', $user->idUser) }}" method="post"> -->
            <form role="form" action="{{ route('lockup', $user->idUser) }}" method="post">
                @csrf
                @if($user->lock == 1)
                    <button class="update lock-btn" name="update" onclick="showlockupStatus({{ $user->idUser }})">Lockup</button>
                @elseif($user->lock == 2)
                    <button class="update unlock-btn" name="update" onclick="showUnlockStatus({{ $user->idUser }})">Unlock</button>
                @else
                    <button class="update" name="update">Error</button>
                @endif
            </form>
        </td>
        <td>
            <form role="form" action="{{ route('delete-user', $user->idUser) }}" method="post">
                @csrf
                <button class="delete" name="delete">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

<!-- Đoạn mã JavaScript -->
<script>
    function showUnlockStatus(idUser) {
        // Hiển thị thông báo ở góc dưới bên trái màn hình
        var notificationContainer = document.getElementById("notification-container");

        var unlockStatusDiv = document.createElement("div");
        unlockStatusDiv.className = "alert alert-success";
        unlockStatusDiv.innerHTML = "<strong>Success!</strong> The account has been unlocked.";
        // Chèn thông báo vào container
        notificationContainer.appendChild(unlockStatusDiv);

        // Tự động ẩn thông báo sau 5 giây
        setTimeout(function() {
            unlockStatusDiv.style.display = 'none';
        }, 2000000);
    }
    function showlockupStatus(idUser) {
        // Hiển thị thông báo ở góc dưới bên trái màn hình
        var notificationContainer = document.getElementById("notification-container");

        var lockupStatusDiv = document.createElement("div");
        lockupStatusDiv.className = "alert alert-success";
        lockupStatusDiv.innerHTML = "<strong>Success!</strong> The account has been lockuped.";
        // Chèn thông báo vào container
        notificationContainer.appendChild(lockupStatusDiv);

        // // Tự động ẩn thông báo sau 5 giây
        setTimeout(function() {
            lockupStatusDiv.style.display = 'none';
        }, 2000000);
    }
</script>

</table>

          </table>

        </section>
        </div>
      </div>
 @endsection  