<script setup></script>

<template>
    <div class="mx-auto w-full h-screen max-w-7xl grow lg:flex xl:px-2">
        <div class="flex">
            <slot name="sidebar" />
        </div>
        <div class="flex min-h-full flex-col flex-grow overflow-auto">
            <slot />
        </div>
    </div>
</template>
<style scoped></style>
