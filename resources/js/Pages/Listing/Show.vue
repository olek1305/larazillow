<template>
    <div>
        <ListingAddress :listing="listing"/>
    </div>
</template>

<script setup>
import ListingAddress from "@/Pages/Components/ListingAddress.vue";

defineProps({
    listing: Object,
})

</script>


