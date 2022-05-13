<template>
    <body class="overflow-y-hidden">
    <div class="mx-auto container px-6 xl:px-0 py-12">
        <div class="flex flex-col">
            <div class="mt-10 grid lg:grid-cols-3 gap-x-8 gap-y-8 items-center">
                <MenuCard></MenuCard>
                <MenuCard></MenuCard>
                <MenuCard></MenuCard>
                <MenuCard></MenuCard>
                <MenuCard></MenuCard>
                <MenuCard></MenuCard>
            </div>
        </div>
    </div>
    </body>
</template>

<script>
import MenuCard from "./MenuCard";
export default {
    name: "Menu",
    components: {MenuCard},
};
</script>

<style>
</style>

