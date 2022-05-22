<template>
    <nav class="bg-white shadow sticky top-0 z-20">
        <div class="mx-auto container px-6 py-2 xl:py-0">
            <div class="flex items-center justify-between h-16">
                <div class="inset-y-0 left-0 flex items-center xl:hidden">
                    <div class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-100 focus:outline-none transition duration-150 ease-in-out">
                        <div class="visible xl:hidden transition ease-out origin-top-left ">
                            <ul class="p-2 font-opensans space-y-3 border-r p-3 bg-white absolute rounded left-0 right-0 shadow mt-8 md:mt-8 hidden">
                                <li class="flex xl:hidden cursor-pointer text-gray-600 text-xl leading-3 tracking-normal  py-2 hover:text-greenprimary focus:text-indigo-700 focus:outline-none">
                                    <div class="flex items-center">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                        </svg> -->
                                        <span class="ml-2 font-bold font-opensans " >
                                            <a href="#home" class="hover:text-greenprimary">Home</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="xl:hidden flex-col cursor-pointer text-lg text-gray-600  leading-3 tracking-normal py-2 hover:text-greenprimary focus:text-indigo-700 focus:outline-none flex justify-center" @click="dropdownHandler($event)">
                                    <div class="flex items-center">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                                        </svg> -->
                                        <span class="ml-2 font-bold">
                                            <a href="#feature" class="hover:text-greenprimary">Feature</a>
                                        </span>
                                    </div>
                                </li>
                                <li class="xl:hidden cursor-pointer text-gray-600 text-lg leading-3 tracking-normal py-2 hover:text-greenprimary flex items-center focus:text-indigo-700 focus:outline-none">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                        <circle cx="12" cy="12" r="9"></circle>
                                    </svg> -->
                                    <span class="ml-2 font-bold">
                                         <a href="#menu" class="hover:text-greenprimary">Menu</a>
                                    </span>
                                </li>
                                <li class="border-b border-gray-300 xl:hidden cursor-pointer text-gray-600 text-lg leading-3 tracking-normal py-2  hover:greenprimary flex items-center focus:text-indigo-700 focus:outline-none">

                                    <span class="ml-2 font-bold xl:hidden cursor-pointer text-gray-600 text-lg leading-3 tracking-normal py-2 hover:text-greenprimary flex items-center focus:text-indigo-700 focus:outline-none">
                                         <a href="#tentang-kami" class="hover:text-greenprimary">Tim Kami</a>
                                    </span>
                                </li>

                            </ul>
                            <svg @click="MenuHandler($event, true)" aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="show-m-menu icon icon-tabler icon-tabler-menu cursor-pointer " width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <line x1="4" y1="8" x2="20" y2="8"></line>
                                <line x1="4" y1="16" x2="20" y2="16"></line>
                            </svg>
                            <div class="hidden close-m-menu text-gray-700 cursor-pointer transition ease-in-out delay-100" @click="MenuHandler($event, false)">
                                <svg aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <line x1="18" y1="6" x2="6" y2="18" />
                                    <line x1="6" y1="6" x2="18" y2="18" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full  sm:w-auto items-center sm:items-stretch justify-end sm:justify-start ">
                    <div class="flex items-center font-opensans font-bold">
                        <!-- <svg aria-label="Home" id="logo" enable-background="new 0 0 300 300" height="44" viewBox="0 0 300 300" width="43" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g>
                                <path
                                    fill="#4c51bf"
                                    d="m234.735 35.532c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16zm0 24c-4.412 0-8-3.588-8-8s3.588-8 8-8 8 3.588 8 8-3.588 8-8 8zm-62.529-14c0-2.502 2.028-4.53 4.53-4.53s4.53 2.028 4.53 4.53c0 2.501-2.028 4.529-4.53 4.529s-4.53-2.027-4.53-4.529zm89.059 60c0 2.501-2.028 4.529-4.53 4.529s-4.53-2.028-4.53-4.529c0-2.502 2.028-4.53 4.53-4.53s4.53 2.029 4.53 4.53zm-40.522-5.459-88-51.064c-1.242-.723-2.773-.723-4.016 0l-88 51.064c-1.232.715-1.992 2.033-1.992 3.459v104c0 1.404.736 2.705 1.938 3.428l88 52.936c.635.381 1.35.572 2.062.572s1.428-.191 2.062-.572l88-52.936c1.201-.723 1.938-2.023 1.938-3.428v-104c0-1.426-.76-2.744-1.992-3.459zm-90.008-42.98 80.085 46.47-52.95 31.289-23.135-13.607v-21.713c0-2.209-1.791-4-4-4s-4 1.791-4 4v21.713l-26.027 15.309c-1.223.719-1.973 2.029-1.973 3.447v29.795l-52 30.727v-94.688zm0 198.707-80.189-48.237 51.467-30.412 24.723 14.539v19.842c0 2.209 1.791 4 4 4s4-1.791 4-4v-19.842l26.027-15.307c1.223-.719 1.973-2.029 1.973-3.447v-31.667l52-30.728v94.729z"
                                />
                            </g>
                        </svg> -->
                        <!-- <img src="/img/menu/nyehaat.id-logo-pngyow-1.png" class="h-20" alt=""> -->
                        <img src="/img/logo_black.png" class="w-40" alt="">
                    </div>
                </div>
                <div class="flex ">
                    <div class="hidden xl:flex md:mr-6 xl:mr-16 font-opensans xl:text-lg font-bold space-x-24 ">
                        <a href="#home" class="flex  items-center   leading-5 text-gray-700 hover:text-greenprimary  focus:bg-gray-100 focus:outline-none">
                            <span class=" border-transparent hover:space-y-2 hover:border-b-4 hover:border-greenprimary hover:transition transition ease-in hover:ease-in-out ">
                                Home
                            </span>
                        </a>
                        <a href="#feature" class="flex  items-center   leading-5 text-gray-700 hover:text-greenprimary  focus:bg-gray-100 focus:outline-none">
                            <span class=" border-transparent hover:space-y-2 hover:border-b-4 hover:border-greenprimary hover:transition transition ease-in hover:ease-in-out ">
                                Feature
                            </span>
                        </a>
                        <a href="#menu" class="flex  items-center   leading-5 text-gray-700 hover:text-greenprimary  focus:bg-gray-100 focus:outline-none ">
                            <span class=" border-transparent  hover:border-b-4 hover:border-greenprimary hover:transition transition ease-in hover:ease-in-out ">
                                Menu
                            </span>
                        </a>
                        <a href="#tentang-kami" class="flex  items-center  leading-5 text-gray-700 hover:text-greenprimary  focus:bg-gray-100 focus:outline-none  ">
                            <span class="  border-transparent   hover:border-b-4 hover:border-greenprimary hover:transition transition ease-in hover:ease-in-out  ">
                            Tim Kami
                            </span>
                        </a>
                        <!-- <a href="javascript: void(0)" class="flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="7 8 3 12 7 16"></polyline>
                                    <polyline points="17 8 21 12 17 16"></polyline>
                                    <line x1="14" y1="4" x2="10" y2="20"></line>
                                </svg>
                            </span>
                            Deliverables
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
window.addEventListener('DOMContentLoaded', () => {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            if (entry.intersectionRatio > 0) {
                document.querySelector(`nav div a[href="#${id}"] span`).classList.add('border-b-4', 'border-greenprimary', 'text-greenprimary');
            } else {
                document.querySelector(`nav div a[href="#${id}"] span`).classList.remove('border-b-4', 'border-greenprimary', 'text-greenprimary');
            }
        });
    });

    // Track all sections that have an `id` applied
    document.querySelectorAll('section[id]').forEach((section) => {
        observer.observe(section);
    });
});

export default {
    name: "Navbar",
    methods: {
        dropdownHandler(event) {
            let single = event.currentTarget.getElementsByTagName("ul")[0];
            single.classList.toggle("hidden");
        },
        MenuHandler(el, val) {
            let MainList = el.currentTarget.parentElement.getElementsByTagName("ul")[0];
            let closeIcon = el.currentTarget.parentElement.getElementsByClassName("close-m-menu")[0];
            let showIcon = el.currentTarget.parentElement.getElementsByClassName("show-m-menu")[0];
            if (val) {
                MainList.classList.remove("hidden");
                el.currentTarget.classList.add("hidden");
                closeIcon.classList.remove("hidden");
            } else {
                showIcon.classList.remove("hidden");
                MainList.classList.add("hidden");
                el.currentTarget.classList.add("hidden");
            }
        },
    },
};
</script>
