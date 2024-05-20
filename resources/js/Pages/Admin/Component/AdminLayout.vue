<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!--navbar-->

        <Navbar></Navbar>
        <!--end_navbar-->

         <!--sidebar-->
        <Sidebar></Sidebar>

        <!--end_sidebar-->
        <main class="p-4 md:ml-64 h-auto pt-20">
        <slot/>
            </main>
</div>
</template>
<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Navbar from '../Component/Navbar.vue'
import Sidebar from '../Component/Sidebar.vue'

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>
