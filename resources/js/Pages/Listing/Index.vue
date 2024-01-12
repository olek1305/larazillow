<template>
    <div class="grid grid-cols-3 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Box v-for="listing in listings" :key="listing.id">

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
        </Box>
    </div>
</template>

<script setup>
import { Link } from  '@inertiajs/vue3'
import ListingAddress from "@/Pages/Components/ListingAddress.vue";
import Box from "@/Pages/Components/UI/Box.vue";

defineProps({
    listings: Array,
})

</script>


