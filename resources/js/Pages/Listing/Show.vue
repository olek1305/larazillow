<template>
    <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <Box class="md:col-span-7 flex items-center w-full">
            <div class="w-full text-center font-medium text-gray-500">No Images</div>
        </Box>
        <div class="md:col-span-5 flex flex-col gap-4">
            <Box>
                <template #header>
                    Basic Info
                </template>
                <Price :price="listing.price" class="text-2xl font-bold"></Price>
                <ListingSpace :listing="listing" class="text-lg"/>
                <ListingAddress :listing="listing" class="text-gray-500"/>
                <ListingAddress :listing="listing"/>
            </Box>

            <Box>
                <template #header>
                   Offer
                </template>
                Make an offer
            </Box>
        </div>
    </div>
</template>

<script setup>
import ListingAddress from "@/Pages/Components/ListingAddress.vue";
import Price from "@/Pages/Components/UI/Price.vue";
import ListingSpace from "@/Pages/Components/UI/ListingSpace.vue";
import Box from "@/Pages/Components/UI/Box.vue";

defineProps({
    listing: Object,
})

</script>


