<script setup>
import {Link,router} from '@inertiajs/vue3'
import UserLayouts from './Layouts/UserLayouts.vue'
import Here from './Layouts/Here.vue';
import Products from '../User/Components/Products.vue';
defineProps({
    products:Array
})

const show=()=>{
  console.log('hi');
}
</script>
<template>  
<!--header-->


<!--hereSection-->
<UserLayouts></UserLayouts>
<Here></Here>
<!--end-->
<div class="bg-white">
     
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Our latest products</h2>

     <!--products <view-->
        <Products :products="products"></Products>
     <!--end prodcuts view-->
        <div class="flex mt-5 justify-center">
            <Link :href="route('products.index')" type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">View All Products</Link>

        </div>
    </div>
   
</div>


</template>