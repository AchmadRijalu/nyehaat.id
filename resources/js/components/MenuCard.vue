<template>
    <a :href="'https://wa.me/6281231149830?text=Halo,%20saya%20ingin%20memesan%20menu%20' + menu.title">
        <div class="max-w-xs bg-white rounded-lg shadow-md hover:shadow-xl duration-500 ease-in-out dark:bg-gray-800 dark:border-gray-700 h-full">
            <img class="pb-8 rounded-t-lg h-64 object-cover w-full" :src="'/img/menu/' + menu.id + '.png'" alt="product image" />
            <div class="px-4 pb-4">
                <h3 class="text-xl font-semibold font-opensans tracking-tight text-gray-900">{{ menu.title }}</h3>
                <div class="pt-3">
                    <p class="text-md font-opensans text-gray-900 pr-1 inline">
                        Aman untuk
                    </p>
                    <span v-for="(disease, index) in menu.diseases" :key="disease" class="inline-block bg-gray-200 rounded-full px-3 py-1 mb-2 text-sm font-semibold text-gray-700 mr-2">
                        <template v-if="index === 0">
                            {{ disease }}
                        </template>
                        <template v-else-if="index !== menu.diseases.length - 1">
                            {{ disease }},
                        </template>
                        <template v-else>
                            {{ disease }}
                        </template>
                    </span>
                </div>
                <div class="pt-3 flex flex-row gap-x-2">
                    <div href="#" class="text-white bg-greenprimary font-medium font-opensans rounded-lg text-xs px-2 py-2.5 text-center basis-full">
                        <h5 class="font-bold">Calories</h5>
                        <h5>{{ menu.calories }} kcal</h5>
                    </div>
                    <div href="#" class="text-white bg-greenprimary font-medium font-opensans rounded-lg text-xs px-2 py-2.5 text-center basis-full">
                        <h5 class="font-bold">Carbs</h5>
                        <h5>{{ menu.carbs }} g</h5>
                    </div>
                    <div href="#" class="text-white bg-greenprimary font-medium font-opensans rounded-lg text-xs px-2 py-2.5 text-center basis-full">
                        <h5 class="font-bold">Protein</h5>
                        <h5>{{ menu.protein }} g</h5>
                    </div>
                </div>
                <div class="py-3">
                    <p v-for="(ingredient, index) in menu.ingredients" :key="ingredient" class="text-md font-opensans text-gray-900 inline">
                        <template v-if="index !== menu.ingredients.length - 1">
                            {{ ingredient }},
                        </template>
                        <template v-else>
                            {{ ingredient }}
                        </template>
                    </p>
                </div>
                <!--            <div class="flex items-center mt-2.5 mb-5">-->
                <!--                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
                <!--                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
                <!--                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
                <!--                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
                <!--                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>-->
                <!--                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>-->
                <!--            </div>-->
<!--                <div class="flex justify-between items-center font-opensans">-->
<!--                    <span class="text-2xl font-bold text-gray-900 mr-4 mt-auto">{{ menu.price | toCurrency }}</span>-->
<!--                    <a :href="'https://wa.me/6281231149830?text=Halo,%20saya%20ingin%20memesan%20menu%20' + menu.title" class="border-2 border-green-600 px-4 font-bold py-2.5 rounded-md hover:bg-greenprimary hover:text-white transition duration-150 ease-in-out">-->
<!--                        Pesan-->
<!--                    </a>-->
<!--                </div>-->
            </div>
        </div>
    </a>
</template>

<script>
export default {
    name: "MenuCard",
    props: ['menu']
}
</script>

<style scoped>

</style>
