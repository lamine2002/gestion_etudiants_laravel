<script setup>
    const props = defineProps(['welcome']);
</script>

<template>
    <div>
        <h1>
            Welcome to your Inertia app!
        </h1>
        <p>
            {{ props.welcome }}
        </p>
    </div>
</template>
