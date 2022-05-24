<template>
    <section class="modal">
        <div class="w-2/3 m-auto h-screen">
            <div class="modal-content h-screen my-2">
                <div class="modal-header">
                    <h4 class="modal-title">Formulir Data Penyakit</h4>
                    <button type="button" class="btn btn-sm" v-on:click="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-y-auto">
                    <div class="w-full px-8 mx-auto">
                        <form method="POST" action="/customers" class="xl:px-24">
                            <input type="hidden" name="_token" :value="csrf">
                            <div
                                class="px-5 py-4 bg-gray-100 rounded-lg flex items-center justify-between mt-7"
                            >
                                <div class="flex items-center">
                                    <p class="text-sm text-gray-800">
                                        Masukkan data anda untuk melihat menu yang tersedia untuk anda.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16"
                            >
                                <div class="w-80">
                                    <div class="flex items-center">
                                        <h1 class="text-xl font-medium pr-2 leading-5 text-gray-800">
                                            Informasi Anda
                                        </h1>
                                    </div>
                                    <p class="mt-4 text-sm leading-5 text-gray-600">
                                        Kami memperlukan informasi pribadi anda untuk mengantarkan pesanan bila anda melakukan PO.
                                    </p>
                                </div>
                                <div>
                                    <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                                        <div class="md:w-64">
                                            <label class="text-sm leading-none text-gray-800" id="firstName"
                                            >Nama</label
                                            >
                                            <input
                                                required
                                                type="name"
                                                name="name"
                                                tabindex="0"
                                                class="w-full p-3 mt-3 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                                aria-labelledby="firstName"
                                                placeholder="Hadi Soetomo"
                                            />
                                        </div>
                                        <div class="md:w-64 md:ml-12 ">
                                            <label class="text-sm leading-none text-gray-800" id="lastName"
                                            >Alamat</label
                                            >
                                            <input
                                                required
                                                type="name"
                                                name="address"
                                                tabindex="0"
                                                class="w-full p-3 mt-3 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                                aria-labelledby="address"
                                                placeholder="Jl. Sudirman M/20, 60211"
                                            />
                                        </div>
                                    </div>
                                    <div class="md:flex items-center lg:ml-24 mt-8">
                                        <div class="md:w-64">
                                            <label class="text-sm leading-none text-gray-800" id="phone"
                                            >Nomor HP</label
                                            >
                                            <input
                                                required
                                                type="name"
                                                name="phone"
                                                tabindex="0"
                                                class="w-full p-3 mt-3 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                                aria-labelledby="phone"
                                                placeholder="082139842937"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mt-16 lg:flex border-b border-gray-200 pb-16 mb-4"
                            >
                                <div class="w-80">
                                    <div class="flex items-center">
                                        <h1 class="text-xl font-medium pr-2 leading-5 text-gray-800">
                                            Penyakit
                                        </h1>
                                    </div>
                                    <p class="mt-4 text-sm leading-5 text-gray-600">
                                        Pilih kondisi/penyakit yang anda miliki. Untuk sekarang ini, kami hanya melayani 1 jenis penyakit.
                                    </p>
                                </div>
                                <div>
                                    <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">

                                        <fieldset>
                                            <legend class="sr-only">Checkbox variants</legend>
                                            <div class="flex items-center mb-4">
                                                <input required name="conditions[]" id="checkbox-1" type="radio" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                                <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900">Diabetes</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input name="conditions[]" id="checkbox-2" type="radio" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                                <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900">Darah Tinggi</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input name="conditions[]" id="checkbox-3" type="radio" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                                <label for="checkbox-3" class="ml-2 text-sm font-medium text-gray-900">Penyakit Jantung</label>
                                            </div>
<!--                                            <div class="flex mb-4">-->
<!--                                                <div class="flex items-center h-5">-->
<!--                                                    <input name="condition[]" id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">-->
<!--                                                </div>-->
<!--                                                <div class="ml-2 text-sm">-->
<!--                                                    <label for="helper-checkbox" class="font-medium text-gray-900">Free shipping via Flowbite</label>-->
<!--                                                    <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500">For orders shipped from $25 in books or $29 in other categories</p>-->
<!--                                                </div>-->
<!--                                            </div>-->
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" class="mx-2 mt-2 mb-9 bg-greenprimary transition duration-150 ease-in-out focus:outline-none hover:bg-green-400 rounded text-white px-8 py-3 text-sm w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'CustomerFOrm',
    props: ['name', 'type', 'qrCode'],
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        };
    },
    methods: {
        closeModal() {
            this.$emit('close-modal');
        },
    },
}
</script>

<style scoped>
.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: block;
    overflow: hidden;
    outline: 0;
    background-color: rgba(0, 0, 0, 0.6);
}
</style>
