/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('cart-dropdown-component',require('./components/cartDropdownComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



window.getProduct = function(){
    axios.get('/oneProduct').then(function (response){
        console.log(response);
    }).catch(function(error){
        console.log(error);
    }).then(function(){
        console.log('i always work');
    });


}

  var cart_products =[]

  window.addProduct = function(product_id){

    const params={product_id:product_id}

    axios.post('/oneProduct',params)
  .then(function (response) {
        var k = document.getElementById('cartSize').innerHTML;
        k =parseInt(k) + 1;
        document.getElementById('cartSize').innerHTML = k;

        cart_products.push(response.data)
        console.log(cart_products)
  })
  .catch(function (error) {
    console.log(error);
  });
};

window.getCartProducts=function(){
    return cart_products;
}


const app = new Vue({
    el: '#app',
    data : {
        cart_products :cart_products
    }
});
