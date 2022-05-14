<template>
    <body class="overflow-y-hidden">
    <div class="mx-auto container px-6 xl:px-0 py-12">
        <div class="flex flex-col">
            <div class="mt-10 grid xl:grid-cols-3 md:grid-cols-2 gap-x-8 gap-y-8 place-items-center">
                <MenuCard v-for="menu in menus" :menu="menu"></MenuCard>
            </div>
        </div>
    </div>
    </body>
</template>

<script>
import MenuCard from "./MenuCard";

const menus = [
    {
        id: 1,
        title: "Red Rice Pecel with Egg and Grilled Tempeh",
        price: 79000,
        diseases: [
            'Diabetes', 'Darah tinggi'
        ],
        ingredients: [
            'Sayur musiman matang', 'Bumbu pecel mete', 'Nasi merah', 'Tempe bumbu rujak', 'Telur', 'Emping garut'
        ],
        calories: 628.7,
        carbs: 112.9,
        protein: 28.8
    },
    {
        id: 1,
        title: "Red Rice Pecel with Egg and Grilled Tempeh",
        price: 79000,
        diseases: [
            'Diabetes', 'Darah tinggi'
        ],
        ingredients: [
            'Sayur musiman matang', 'Bumbu pecel mete', 'Nasi merah', 'Tempe bumbu rujak', 'Telur', 'Emping garut'
        ],
        calories: 628.7,
        carbs: 112.9,
        protein: 28.8
    },
    {
        id: 1,
        title: "Red Rice Pecel with Egg and Grilled Tempeh",
        price: 79000,
        diseases: [
            'Diabetes', 'Darah tinggi'
        ],
        ingredients: [
            'Sayur musiman matang', 'Bumbu pecel mete', 'Nasi merah', 'Tempe bumbu rujak', 'Telur', 'Emping garut'
        ],
        calories: 628.7,
        carbs: 112.9,
        protein: 28.8
    },
    {
        id: 1,
        title: "Red Rice Pecel with Egg and Grilled Tempeh",
        price: 79000,
        diseases: [
            'Diabetes', 'Darah tinggi'
        ],
        ingredients: [
            'Sayur musiman matang', 'Bumbu pecel mete', 'Nasi merah', 'Tempe bumbu rujak', 'Telur', 'Emping garut'
        ],
        calories: 628.7,
        carbs: 112.9,
        protein: 28.8
    },
    {
        id: 1,
        title: "Red Rice Pecel with Egg and Grilled Tempeh",
        price: 79000,
        diseases: [
            'Diabetes', 'Darah tinggi'
        ],
        ingredients: [
            'Sayur musiman matang', 'Bumbu pecel mete', 'Nasi merah', 'Tempe bumbu rujak', 'Telur', 'Emping garut'
        ],
        calories: 628.7,
        carbs: 112.9,
        protein: 28.8
    },
]

export default {
    name: "Menu",
    components: {MenuCard},
    data() {
        return {
            menus
        }
    }
};
</script>

<style>
</style>

