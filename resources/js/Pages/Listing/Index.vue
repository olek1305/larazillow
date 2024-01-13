<template>
    <div class="grid grid-cols-3 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Box v-for="listing in listings" :key="listing.id">

            <div>
                <Link :href="route('listing.show', {listing: listing.id})">
                    <Price :price="listing.price" class="text-2xl font-bold"></Price>
                    <ListingSpace :listing="listing" class="text-lg"/>
                    <ListingAddress :listing="listing" class="text-gray-500"/>
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
import ListingSpace from "@/Pages/Components/UI/ListingSpace.vue";
import Price from "@/Pages/Components/UI/Price.vue";

defineProps({
    listings: Array,
})

</script>


