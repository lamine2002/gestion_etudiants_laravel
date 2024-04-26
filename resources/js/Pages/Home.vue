<script setup>
import { defineProps } from 'vue'
import Navbar from "@/Pages/Components/Navbar.vue";
    const props = defineProps(['welcome']);
</script>

<template>
    <Navbar />
    <div>
        <h1>
            Welcome to your Inertia app!
        </h1>
        <p>
            {{ props.welcome }}
        </p>
    </div>
</template>
