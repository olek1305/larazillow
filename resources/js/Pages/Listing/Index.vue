<template>
    <div v-for="listing in listings" :key="listing.id">
        <div>
            <Link :href="route('listing.show', {listing: listing.id})">
                <ListingAddress :listing="listing"/>
            </Link>
        </div>
        <div>
<!--            <Link :href="`/listing/${listing.id}/edit`">Edit</Link>-->
            <Link :href="route('listing.edit', {listing: listing.id})">Edit</Link>
        </div>
        <div>
<!--            <Link :href="`/listing/${listing.id}`" method="DELETE" as="button">Delete</Link>-->
            <Link :href="route('listing.update', {listing: listing.id})" method="DELETE" as="button">Delete</Link>
        </div>

    </div>
</template>

<script setup>
import { Link } from  '@inertiajs/vue3'
import ListingAddress from "@/Pages/Components/ListingAddress.vue";

defineProps({
    listings: Array,
})

</script>


