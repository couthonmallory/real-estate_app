<template>
    
    <span><button id="btn-close" class="float-right hover:bg-gray-500" @click="close" >&times;</button></span>
    <div>Bonjour je m'appelle Mallory</div>
    
</template>

<script setup>

const close = () => {
    window.location.href="/admtransac"
}

</script>
