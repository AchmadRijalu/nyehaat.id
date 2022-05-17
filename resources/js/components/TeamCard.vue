<template>
<div class="lg:w-96 w-80">
            <img :src="'/img/team/' + team.id + '.jpg'" class="h-72 w-full object-cover object-center rounded-t-md" :alt="team.name" />
            <div class="bg-white shadow-md rounded-md py-4 text-center">
                <p class="text-base leading-6 text-gray-600 font-bold">{{team.name}}</p>
                <p class="text-base leading-6 mt-2 text-gray-800">{{team.jobs}}</p>
            </div>
        </div>

</template>

<script>
export default {
    name: "TeamCard",
    props: ['team']
}
</script>

<style scoped>

</style>
