<template>
    <section class="overflow-y-hidden py-20 items-center justify-center">
        <h1 class="text-5xl font-semibold leading-10 text-greenprimary text-center mb-16">Menu Kami</h1>
        <h2 class="text-xl font-medium leading-10 text-gray-800 text-center mb-16 ">Seluruh resep dari menu kami telah disetujui oleh ahli gizi.</h2>
        <div class="mx-auto container px-6 xl:px-0 items-center ">
            <div class="flex flex-col items-center ">
                <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-x-8 gap-y-8 place-items-center items-stretch  ">
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
        title: "Tumis Jamur & Tahu Saus Tiram",
        price: 30000,
        diseases: [
            'Diabetes'
        ],
        ingredients: [
            'Minyak kanola', 'Jamur', 'Paprika merah', 'Daun bawang', 'Jahe', 'Bawang putih', 'Tahu', 'Saus tiram'
        ],
        calories: 171,
        carbs: 8.6,
        protein: 7.7
    },
    {
        id: 3,
        title: "Baked Cod with Spring Vegetables",
        price: 42000,
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
        price: 36000,
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
        price: 43000,
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
    {
        id: 2,
        title: "Smoothie Cherry-Bayam Anti Peradangan",
        price: 35000,
        diseases: [
            'Penyakit Jantung'
        ],
        ingredients: [
            'Yogurt rendah lemak', 'Jahe', 'Cherry', 'Daun bayam', 'Alpukat', 'Mentega'
        ],
        calories: 410,
        carbs: 46.6,
        protein: 17.4
    },
    {
        id: 6,
        title: "Ayam-Jagung Lapis Aprikot",
        price: 28000,
        diseases: [
            'Penyakit Jantung'
        ],
        ingredients: [
            'Selai Aprikot', 'Paprika Merah', 'Ayam Paha Stik Drum', 'Potongan Jagung', 'Air Jeruk Nipis',
        ],
        calories: 500,
        carbs: 33,
        protein: 51
    },
    {
        id: 7,
        title: "Spaghetti Jamur Panggang",
        price: 38000,
        diseases: [
            'Penyakit Jantung'
        ],
        ingredients: [
            'Spaghetti', 'Jamur', 'Kacang Hijau', 'Irisan Daun Bawang', 'Perasan Air Lemon',
        ],
        calories: 439,
        carbs: 81,
        protein: 17
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

