
<template>
    <section class="xl:mx-auto xl:container 2xl:px-20 px-6 py-20">
    <h1 class="text-5xl font-semibold leading-10 text-greenprimary text-center mb-8">Tim Kami</h1>
    <h2 class="text-xl font-medium leading-10 text-gray-800 text-center mb-16 ">Berikut ini merupakan tim dari Nyehaat.id, salam kenal :)</h2>
    <div class="flex flex-wrap items-stretch justify-center xl:gap-6 gap-4">


        <!-- <div class="bg-indigo-700 rounded-md lg:w-96 w-80 flex flex-col items-center justify-center md:py-0 py-12">
            <h3 class="text-2xl font-semibold leading-6 text-center text-white">About Team</h3>
            <p class="lg:w-80 lg:px-0 px-4 text-base leading-6 text-center text-white mt-6">Kami dari Tim Nyehaat.id</p>
        </div> -->
        <TeamCard v-for="team in teams" :key="team.id" :team="team"></TeamCard>

    </div>
    </section>
</template>

<script>

import TeamCard from './TeamCard.vue';

const teams = [
    {
        id: 1,
        name: "Achmad Rijalu Arianindita",
        jobs: "Co-Founder",

    },
    {
        id: 2,
        name: "Justin Jap",
        jobs: "Co-Founder",
    },
    {
         id: 3,
        name: "Kenny Jinhiro Wibowo",
        jobs: "Co-Founder",
    },
    {
         id: 4,
        name: "Maximus Aurellius Wiranata",
        jobs: "Co-Founder",
    },
    {
          id: 5,
        name: "Kevin Sander Utomo",
        jobs: "Co-Founder",
    },
]


export default {
    name: "Team",
     components: {TeamCard},
    data() {
        return {
            teams
        }
    }

};
</script>

<style scoped></style>



