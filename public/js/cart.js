

function getProduct(){
    axios.get('/oneProduct').then(function (response){
        console.log(response);
    }).catch(function(error){
        console.log(error);
    }).then(function(){
        console.log('i always work');
    });


}

var cart_products =[];

function addProduct(product_id){

    const params={product_id:product_id}

    axios.post('/oneProduct',params)
  .then(function (response) {
        console.log(response);
        var k = document.getElementById('cartSize').innerHTML;
        k =parseInt(k) + 1;
        document.getElementById('cartSize').innerHTML = k;

        cart_products.push(response.data)
  })
  .catch(function (error) {
    console.log(error);
  });
}


function getCartProducts(){
    JSON.stringify(cart_products);
    return cart_products;
}
