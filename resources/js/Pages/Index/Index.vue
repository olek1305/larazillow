<template>
  <div>Index</div>
  <Link href="/hello">Show Page</Link>
  <div>
    The Message is: {{ message }}
  </div>
</template>

<script setup>
import { Link } from  '@inertiajs/vue3'
defineProps({
  message: String,
})

</script>


