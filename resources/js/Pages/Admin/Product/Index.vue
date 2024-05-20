<template   >
   <AdminLayout>
    <ProductList :products="products"></ProductList>
   </AdminLayout>
   
</template>

<script setup>
defineProps({
   products:Array
})
import ProductList from '../Product/ProductList.vue'
import AdminLayout from '../Component/AdminLayout.vue'
</script>