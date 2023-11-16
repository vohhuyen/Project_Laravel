function listProducts(){
    document.getElementById("products").innerHTML = '';
    for(let i = 0; i < products.length; i++){
        
        var demo = '<div class="cart-product">';
        demo += '<div class="product_img">';
        demo += '<i class="product_icon fa-regular fa-heart"></i>';
        demo += '<img class="first-img" src="'+products[i].first_image+'" alt="phone">';
        demo += '<img class="last-img" src="'+products[i].last_image+'" alt="phone">';
        demo += '</div>';           
        demo += '<div class="product_name">';
        demo += '<span><b>' +products[i].name+'</b></span>';
        demo += '</div>';
        demo += '<p>' +products[i].by+ '</p>';
        demo += '<div class="product_price">';
        demo += '<b class="price">'+products[i].price+'</b>';
        demo += '<i class="fa-solid fa-cart-plus"></i>';
        demo += '</div>';
        demo += '<div class="product_evalute">';
        demo += '<span>';
        demo += '<i class="fa-solid fa-star star_yellow"></i>';
        demo += '<i class="fa-solid fa-star star_yellow"></i>';
        demo += '<i class="fa-solid fa-star star_yellow"></i>';
        demo += '<i class="fa-solid fa-star star_yellow"></i>';
        demo += '<i class="fa-solid fa-star star_yellow"></i>';
        demo += '</span>';
        demo += '<span>'+products[i].sold+'</span>';
        demo += '</div>';
        demo += '</div>';

        console.log(demo);
        document.getElementById("products").innerHTML += demo;
    }
}
function loadspbody(){
    listProducts();
}