<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Header from '../Layouts/Header.vue'
import Here from '../Layouts/Here.vue'
import Footer from '../Layouts/Footer.vue'
// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})


</script>
<template>  
<!--header-->
<Header></Header>
<!--end-->


<!--mainContent-->
<slot/>

<!--end-->

<!--footer-->
<Footer></Footer>





<!--end-->
</template>