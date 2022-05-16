<template>
    <section class="overflow-y-hidden py-20">
        <h1 class="text-5xl font-semibold leading-10 text-gray-800 text-center mb-16">Our Menu</h1>
        <div class="mx-auto container px-6 xl:px-0">
            <div class="flex flex-col">
                <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-x-8 gap-y-8 place-items-center">
                    <MenuCard v-for="menu in menus" :key="menu.id" :menu="menu"></MenuCard>
                </div>
            </div>
        </div>
    </section>
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
        calories: 629,
        carbs: 112.9,
        protein: 28.8
    },
    {
        id: 2,
        title: "Smoothie Cherry-Bayam Anti Peradangan",
        price: 39000,
        diseases: [
            'Penyakit Jantung'
        ],
        ingredients: [
            'Yogurt rendah lemak', 'Ceri', 'Daun bayam', 'Alpukat', 'Mentega', 'Jahe'
        ],
        calories: 410,
        carbs: 46.6,
        protein: 17.4
    },
    {
        id: 3,
        title: "Baked Cod with Spring Vegetables",
        price: 22000,
        diseases: [
            'Darah tinggi'
        ],
        ingredients: [
            'Tomat ceri', 'Lemon', 'Asparagus', 'Merica', 'Bawang merah', 'Olive Oil', 'Garam', 'Peterseli', 'Ikan kod'
        ],
        calories: 221,
        carbs: 11.3,
        protein: 20.9
    },
    {
        id: 4,
        title: "Chickpea Quinoa Soup",
        price: 79000,
        diseases: [
            'Darah tinggi'
        ],
        ingredients: [
            'Minyak canola', 'Bawang', 'Saus Tomat', 'Wortel', 'Quinoa', 'Bubuk cabai', 'Saus Worcestershire', 'Garam', 'Merica', 'Zucchini', 'Sour cream'
        ],
        calories: 227,
        carbs: 112.9,
        protein: 8
    },
    {
        id: 5,
        title: "Vegan Roasted Red Pepper Pasta",
        price: 79000,
        diseases: [
            'Darah tinggi'
        ],
        ingredients: [
            'Olive Oil', 'Bawang Merah', 'Bawang Putih', 'Garam', 'Merica', 'Susu almond', 'Ragi', 'Bubuk garut', 'Spaghetti'
        ],
        calories: 487,
        carbs: 75,
        protein: 14
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

