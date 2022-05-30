<template>
    <section class="overflow-y-hidden py-20 items-center justify-center">
        <template v-if="customer">
            <h1 class="text-5xl font-semibold leading-10 text-greenprimary text-center mb-16">Menu Anda</h1>
            <h2 class="text-xl font-medium leading-10 text-gray-800 text-center mb-16 ">Seluruh resep dari menu kami telah disetujui oleh ahli gizi</h2>
            <div class="mx-auto container px-6 xl:px-0 items-center ">
                <div class="flex flex-col items-center ">
                    <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-x-8 gap-y-8 place-items-center items-stretch  ">
                        <template v-for="menu in menus">
                            <MenuCard v-if="menu.diseases[0] === customer.conditions[0].condition" :key="menu.id" :menu="menu"></MenuCard>
                        </template>
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-content-center mt-16 align-items-center">
                <h1 class="text-6xl font-semibold leading-10 text-center w-max h-max">{{ 180000 | toCurrency }}</h1>
                <p class="text-center w-max h-max ml-1 text-xl"> + Free ongkir</p>
            </div>
            <h2 class="text-xl font-medium leading-10 text-gray-800 text-center mt-10 ">Untuk hari Sabtu dan Minggu (2 hidangan/hari, total 4 hidangan)</h2>
            <h2 class="text-xl font-medium leading-10 text-gray-800 text-center mt-2 ">Kami hanya melayani daerah Kota Surabaya</h2>
            <h2 class="text-xl font-medium leading-10 text-gray-800 text-center mt-8 mb-12 ">Klik tombol di bawah untuk melakukan PO melalui WhatsApp kami</h2>
            <a :href="walink" class="block mx-auto mt-2 bg-greenprimary text-center transition duration-150 ease-in-out focus:outline-none hover:bg-green-400 rounded text-white px-8 py-3 text-sm w-2/3">Pesan di sini</a>
        </template>
        <template v-else>
            <h1 class="text-5xl font-semibold leading-10 text-greenprimary text-center mb-16">Menu Kami</h1>
            <h2 class="text-xl font-medium leading-10 text-gray-800 text-center mb-16 ">Seluruh resep dari menu kami telah disetujui oleh ahli gizi</h2>
            <div class="mx-auto container px-6 xl:px-0 items-center ">
                <div class="flex flex-col items-center ">
                    <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-x-8 gap-y-8 place-items-center items-stretch  ">
                        <template v-for="menu in menus">
                            <MenuCard :key="menu.id" :menu="menu"></MenuCard>
                        </template>
                    </div>
                </div>
            </div>
        </template>
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
            'Darah Tinggi'
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
            'Darah Tinggi'
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
            'Darah Tinggi'
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
        title: "Nasi Goreng Kembang Kol",
        price: 23000,
        diseases: [
            'Penyakit Jantung'
        ],
        ingredients: [
            'Nasi Goreng', 'Kembang Kol', 'Madu', 'Minyak Sayur' , 'Telur', 'Kacang Polong', 'Edamame', 'Irisan Jeruk'
        ],
        calories: 251,
        carbs: 20,
        protein: 15
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
    {
        id: 8,
        title: "Spicy Pasta",
        price: 32000,
        diseases: [
            'Penyakit Jantung'
        ],
        ingredients: [
            'Pasta', 'minyak zaitun', 'cabai hijau cincang halus', 'jamur kancing', 'Tomat Kaleng', 'ketumbar cincang', 'Minyak Zaitun'
        ],
        calories: 339,
        carbs: 79,
        protein: 12
    },
    {
        id: 9,
        title: "Beef Sukiyaki",
        price: 38000,
        diseases: [
            'Diabetes'
        ],
        ingredients: [
            'Daging Sapi', 'Bawang Bombai', 'Bawang Putih', 'Kucai', 'Kecap Manis', 'Wijen', 'Merica', 'Minyak Jagung', 'Kaldu Sapi'
        ],
        calories: 439,
        carbs: 81,
        protein: 17
    },
    {
        id: 10,
        title: "Tumis Daging Sapi Bumbu Jahe dengan Baby Bok Choy",
        price: 38000,
        diseases: [
            'Diabetes'
        ],
        ingredients: [
            'Daging Sapi', 'Jahe', 'Kecap', 'Tepung Maizena', 'Minyak Wijen', 'Saus Tiram', 'Baby Bok Choy', 'Minyak Sayur', 'Kaldu Ayam'
        ],
        calories: 439,
        carbs: 81,
        protein: 17
    },
    {
        id: 11,
        title: "Ayam Jahe",
        price: 42000,
        diseases: [
            'Darah Tinggi'
        ],
        ingredients: [
            'Ayam', 'Garam', 'Merica', 'Olive Oil', 'Wortel', 'Jahe', 'Beras Coklat'
        ],
        calories: 290,
        carbs: 23.9,
        protein: 36.7
    },
    {
        id: 12,
        title: "Pea & Spinach Carbonara",
        price: 45000,
        diseases: [
            'Diabetes'
        ],
        ingredients: [
            'Olive Oil', 'Panko Breadcrumbs', 'Bawang Putih', 'Keju Parmesan', 'Kuning Telor', 'Merica', 'Garam', 'Pasta', 'Bayam', 'Kaca Polong'
        ],
        calories: 430,
        carbs: 54.1,
        protein: 20.2
    }

]

export default {
    name: "Menu",
    components: {MenuCard},
    props: ['customer'],
    data() {
        let walink;
        return {
            menus,
            walink
        }
    },
    mounted(){
        this.walink = "https://wa.me/6281231149830?text=Halo,%20saya%20ingin%20memesan%20menu%20untuk%20" + this.customer.conditions[0].condition +
            ".%0aNama:%20" + this.customer.name +
            "%0aKontak:%20" + this.customer.phone +
            "%0aAlamat:%20" + this.customer.address
    }
};
</script>

<style>
</style>

