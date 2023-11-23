<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ImPrint</title>
  <link rel="shortcut icon" type="image/png" href="source/admin/assets/images/logos/imprintrutgon.png" />
  <link rel="stylesheet" href="source/admin/assets/css/stylepr.css" />
  <link rel="stylesheet" href="source/fontawesome-free-6.4.0-web/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="source/admin/assets/images/logos/logo.png" width="200" style="margin-left: 10px; margin-top: 3px;" alt="" />
          </a>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-house"></i>
                </span>
                <span class="hide-menu">Home Page</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./user.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-user"></i>
                </span>
                <span class="hide-menu">User Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./product.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-layer-group"></i>
                </span>
                <span class="hide-menu"> Product Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./originalPr.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-database"></i>
                </span>
                <span class="hide-menu">Original Product Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./product-waiting.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <span class="hide-menu">Product Awaiting Approval</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./provider.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-user-tie"></i>
                </span>
                <span class="hide-menu">Supplier Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./banner.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-pager"></i>
                </span>
                <span class="hide-menu"> Banner Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./intro.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-photo-film"></i>
                </span>
                <span class="hide-menu"> Intro Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./categoryPr.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-folder-tree"></i>
                </span>
                <span class="hide-menu">Product Categories</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./web-analysic.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-chart-line"></i>
                </span>
                <span class="hide-menu">Website Analysis</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <div class="margin-sidebar"></div>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-content">
      <!--  Header Start -->
      <header class="app-header">
        <b>List of products</b>
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
              <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body row">
              <form class="form-container">
                    <label for="supplier">Categories:</label>
                    <br>
                    <select id="supplier" name="supplier" class="inputAddUser">
                        <option value="supplier1">Loại 1</option>
                        <option value="supplier2">Loại 2</option>
                        <option value="supplier3">Loại 3</option>
                    </select>
                    <pre></pre>
                    <label for="productName">Name Product:</label>
                    <br>
                    <select id="supplier" name="supplier" class="inputAddUser">
                        <option value="supplier1">Tên sản phẩm 1</option>
                        <option value="supplier2">Tên sản phẩm 2</option>
                        <option value="supplier3">Tên sản phẩm 3</option>
                    </select>
                    <pre></pre>
                    <label for="supplier">Provider:</label>
                    <br>
                    <select id="supplier" name="supplier" class="inputAddUser">
                        <option value="supplier1">Nhà cung cấp 1</option>
                        <option value="supplier2">Nhà cung cấp 2</option>
                        <option value="supplier3">Nhà cung cấp 3</option>
                    </select>
                    <pre></pre>
                    <label for="color">Color:</label>
                    <br>
                    <select id="supplier" name="supplier" class="inputAddUser">
                      <option value="supplier1">
                        <img src="#" class="img-fluid rounded-top rounded-circle" style="width: 10px; height: 10px;" alt="color1">
                        color1
                      </option>
                      <option value="supplier1">
                        <img src="#" class="img-fluid rounded-top rounded-circle" style="width: 10px; height: 10px;" alt="color1">
                        color1
                      </option>
                      <option value="supplier1">
                        <img src="#" class="img-fluid rounded-top rounded-circle" style="width: 10px; height: 10px;" alt="color1">
                        color1
                      </option>
                    </select>
                    <pre></pre>

                    <label for="productImage">Image product:</label>
                    <br>
                    <input type="file" class="inputAddUser" id="productImage" name="productImage">
                    <pre></pre>
      
                    <label for="designImage">Image design:</label>
                    <br>
                    <input type="file" class="inputAddUser" id="designImage" name="designImage">
                    <pre></pre>

                    <label for="productPrice">Price:</label>
                    <br>
                    <input type="number" class="inputAddUser" id="productPrice" name="productPrice" placeholder="> price original product">
                    <pre></pre>

                    <label for="description">Descriptiton design:</label>
                    <br>
                    <textarea id="description" class="inputAddUser" name="description" placeholder="Enter description..."></textarea>
                    <pre></pre>

                    <label for="description">Note:</label>
                    <br>
                    <textarea id="description" class="inputAddUser" name="description" placeholder="Enter your note...."></textarea>
                    <pre></pre>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Save</button>
            </div>
          </div>
        </div>
      </div>



      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
            <section id="content">
              <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Image Design</th>
                        <th>Name Design</th>
                        <th>Description</th>
                        <th>Note</th>
                        <th>Upadate</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="source/admin/assets/images/img/6400.png" alt="product1" style="width: 60px;height: 60px;"></td>
                        <td>hoodie</td>
                        <td>24.48 USD</td>
                        <td>White</td>
                        <td><img src="source/admin/assets/images/img/AV1.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Huyen</td>
                        <td>relaxtion itself</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>  
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><img src="source/admin/assets/images/img/6401.png" alt="product2" style="width: 60px;height: 60px;"></td>
                      <td>hoodie</td>
                      <td>21.08 USD</td>
                      <td>White</td>
                      <td><img src="source/admin/assets/images/img/product1.jpg" style="width: 60px;height: 60px;"></td>
                      <td>Huyen</td>
                      <td>relaxtion itself</td>
                      <td></td>
                      <td><button class="update">Update</button></td>
                      <td><button class="delete">Delete</button></td>  
              
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="source/admin/assets/images/img/6402.png" alt="product2" style="width: 60px;height: 60px;"></td>
                        <td>hoodie</td>
                        <td>16.02 USD</td>
                        <td>White</td>
                        <td><img src="source/admin/assets/images/img/product2.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Huyen</td>
                        <td>relaxtion itself</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>  
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="source/admin/assets/images/img/6403.png" alt="product2" style="width: 60px;height: 60px;"></td>
                        <td>T-shirts</td>
                        <td>19.91 USD</td>
                        <td>Black</td>
                        <td><img src="source/admin/assets/images/img/product3.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Hieu</td>
                        <td>High Quality</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>  
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img src="source/admin/assets/images/img/6404.png" alt="product2" style="width: 60px;height: 60px;"></td>
                        <td>T-shirts</td>
                        <td>17.35 USD</td>
                        <td>Black</td>
                        <td><img src="source/admin/assets/images/img/product4.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Hieu</td>
                        <td>High Quality</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>  
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img src="source/admin/assets/images/img/6405.png" alt="product2" style="width: 60px;height: 60px;"></td>
                        <td>Long Sleeve</td>
                        <td>12.33 USD</td>
                        <td>White</td>
                        <td><img src="source/admin/assets/images/img/product4.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Hieu</td>
                        <td>High Quality</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>  
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><img src="source/admin/assets/images/img/6405.png" alt="product2" style="width: 60px;height: 60px;"></td>
                        <td>Long Sleeve</td>
                        <td>25.83 USD</td>
                        <td>Black</td>
                        <td><img src="source/admin/assets/images/img/product4.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Hieu</td>
                        <td>High Quality</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>  
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><img src="source/admin/assets/images/img/6406.png" alt="product2" style="width: 60px;height: 60px;"></td>
                        <td>Sweatshirt</td>
                        <td>22.12 USD</td>
                        <td>White</td>
                        <td><img src="source/admin/assets/images/img/product3.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Linh</td>
                        <td>reasonable price</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>  
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><img src="source/admin/assets/images/img/6407.png" alt="product2" style="width: 60px;height: 60px;"></td>
                        <td>Sweatshirt</td>
                        <td>15.14 USD</td>
                        <td>Black</td>
                        <td><img src="source/admin/assets/images/img/product2.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Linh</td>
                        <td>reasonable price</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>    
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><img src="source/admin/assets/images/img/6408.png" alt="product2" style="width: 60px;height: 60px;"></td>
                        <td>Sweatshirt</td>
                        <td>11.18 USD</td>
                        <td>White</td>
                        <td><img src="source/admin/assets/images/img/product1.jpg" style="width: 60px;height: 60px;"></td>
                        <td>Linh</td>
                        <td>reasonable price</td>
                        <td></td>
                        <td><button class="update">Update</button></td>
                        <td><button class="delete">Delete</button></td>   
                    </tr>
                </tbody>
            </table>
          </section>
        </div>
      </div>
    </div>
  </div>
</body>

</html>