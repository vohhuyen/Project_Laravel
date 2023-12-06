@extends('masterPr')
@section('contentPr')
<section class="section grid">
        <div class="section_left">
          <div class="section_header">
            <ul class="nav_bar-item-left">
              <li>
                <b class="title">YOUR CART</b>
              </li>
              <li>
                <span class="title_item">4 products</span>
              </li>
              <li class="navbar-separate3"></li>
              <li>
                <span class="title_item">$107,91</span>
              </li>
            </ul>
            <div class="box_message">Free shipping when buying from 5 products - and many other offers</div>
            <div class="cart_separate1"></div>
          </div>

          <div class="section_article">
            <table>
              <tbody>
                <tr class="section_article-item">
                    <td class="img_item"><img src="/img/product2.jpg" alt="product" /></td>
                    <td class="infor_item">
                      <b class="namePr">High quality men's and women's t-shirts</b>
                      <p class="if_item">Size M, cotton</p>
                      <div class="sale">30% off</div>
                    </td>
                    <td><button class="button_item1">-</button></td>
                    <td><div class="quantity_item">1</div></td>
                    <td><button class="button_item2">+</button></td>
                    <td class="price1"><p>$ 26,70</p></td>
                    <td class="button"><button class="delete"><p class="fa-light fa-x"></p></button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="section_article-xs">
            <table>
              <tbody>
                <tr class="section_article-item-xs">
                    <td class="img_item-xs"><img src="/img/product2.jpg" alt="product" /></td>
                    <td class="infor_item-xs">
                      <b class="namePr-xs">High quality men's and women's t-shirts</b>
                      <p class="if_item-xs">Size M, cotton</p>
          
                      <div class="d-flex">
                        <button class="button_item1-xs">-</button>
                        <div class="quantity_item-xs">1</div>
                        <button class="button_item2-xs">+</button>
                      </div>
                    </td>
      
                    <td class="price1-xs">
                      <p>$ 26,70</p>
                      <div class="sale-xs">30% off</div>
                    </td>
                    <td class="button-xs"><button class="delete-xs"><p class="fa-light fa-x"></p></button></td>
                </tr>
                <tr class="section_article-item-xs">
                  <td class="img_item-xs"><img src="/img/product2.jpg" alt="product" /></td>
                  <td class="infor_item-xs">
                    <b class="namePr-xs">High quality men's and women's t-shirts</b>
                    <p class="if_item-xs">Size M, cotton</p>
        
                    <div class="d-flex">
                      <button class="button_item1-xs">-</button>
                      <div class="quantity_item-xs">1</div>
                      <button class="button_item2-xs">+</button>
                    </div>
                  </td>
    
                  <td class="price1-xs">
                    <p>$ 26,70</p>
                    <div class="sale-xs">30% off</div>
                  </td>
                  <td class="button-xs"><button class="delete-xs"><p class="fa-light fa-x"></p></button></td>
                </tr>
                <tr class="section_article-item-xs">
                <td class="img_item-xs"><img src="/img/product2.jpg" alt="product" /></td>
                <td class="infor_item-xs">
                  <b class="namePr-xs">High quality men's and women's t-shirts</b>
                  <p class="if_item-xs">Size M, cotton</p>
      
                  <div class="d-flex">
                    <button class="button_item1-xs">-</button>
                    <div class="quantity_item-xs">1</div>
                    <button class="button_item2-xs">+</button>
                  </div>
                </td>
  
                <td class="price1-xs">
                  <p>$ 26,70</p>
                  <div class="sale-xs">30% off</div>
                </td>
                <td class="button-xs"><button class="delete-xs"><p class="fa-light fa-x"></p></button></td>
                </tr>
                <tr class="section_article-item-xs">
              <td class="img_item-xs"><img src="/img/product2.jpg" alt="product" /></td>
              <td class="infor_item-xs">
                <b class="namePr-xs">High quality men's and women's t-shirts</b>
                <p class="if_item-xs">Size M, cotton</p>
    
                <div class="d-flex">
                  <button class="button_item1-xs">-</button>
                  <div class="quantity_item-xs">1</div>
                  <button class="button_item2-xs">+</button>
                </div>
              </td>

              <td class="price1-xs">
                <p>$ 26,70</p>
                <div class="sale-xs">30% off</div>
              </td>
              <td class="button-xs"><button class="delete-xs"><p class="fa-light fa-x"></p></button></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="cart_separate1"></div>
        </div>
        <div class="section_right">
          <div class="total_payment">
            <div class="total_payment-header">
              <div class="total_payment-header-left">
                <i class="fa-solid fa-tag"></i>
                <p>Shop discount code</p>
              </div>
              <div>
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <div class="cart_separate2"></div>
            <div class="total_payment-body">
              <b class="sumary">Summary in order</b>
              <div class="space">
                <p>Total product cost</p>
                <p class="price2">$ 107,91</p>
              </div>
              <div class="space">
                <p>Standard delivery</p>
                <p class="price2">$ 27,34</p>
              </div>
              <div class="space space2">
                <p>Total payment :</p>
                <p class="price2">$ 135,25</p>
              </div>
            </div>
            <div class="transport">
              <p>Delivery country: <b>Vietnamese</b></p>
              <a href="#">Edit</a>
            </div>
            <div class="delivery">
              <p>Standard delivery: July 22 - July 25</p>
              <div class="pay">
                <p>Billing: $ 135,25</p>
              </div>
            </div>
            <div class="or">
              <div class="cart_separate3"></div>
              <p>OR</p>
              <div class="cart_separate3"></div>
            </div>
            <div class="delivery">
              <p>Express delivery: July 15 - July 18</p>
              <div class="pay">
                <p>Billing: $ 151,20</p>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection