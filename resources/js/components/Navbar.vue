<template>
    <nav class="bg-white shadow">
        <div class="mx-auto container px-6 py-2 xl:py-0">
            <div class="flex items-center justify-between h-16">
                <div class="inset-y-0 left-0 flex items-center xl:hidden">
                    <div class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-100 focus:outline-none transition duration-150 ease-in-out">
                        <div class="visible xl:hidden">
                            <ul class="p-2 font-opensans  border-r bg-white absolute rounded left-0 right-0 shadow mt-8 md:mt-8 hidden">
                                <li class="flex xl:hidden cursor-pointer text-gray-600 text-xl leading-3 tracking-normal mt-2 py-2 hover:text-greenprimary focus:text-indigo-700 focus:outline-none">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                        </svg>
<<<<<<< HEAD
                                        <span class="ml-2 font-bold font-opensans">Dashboard</span>
||||||| 388b1e3
                                        <span class="ml-2 font-bold">Dashboard</span>
=======
                                        <span class="ml-2 font-bold">Home</span>
>>>>>>> fdcc36dd9597ac71f058cd884a5e4f20fb93a1e6
                                    </div>
                                </li>
                                <li class="xl:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-greenprimary focus:text-indigo-700 focus:outline-none flex justify-center" @click="dropdownHandler($event)">
                                    <div class="flex items-center">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
<<<<<<< HEAD
                                        </svg> -->
                                        <span class="ml-2 font-bold">Menu</span>
||||||| 388b1e3
                                        </svg>
                                        <span class="ml-2 font-bold">Products</span>
=======
                                        </svg>
                                        <span class="ml-2 font-bold">Menu</span>
>>>>>>> fdcc36dd9597ac71f058cd884a5e4f20fb93a1e6
                                    </div>
                                </li>
                                <li class="xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-greenprimary flex items-center focus:text-indigo-700 focus:outline-none">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                        <circle cx="12" cy="12" r="9"></circle>
<<<<<<< HEAD
                                    </svg> -->
                                    <span class="ml-2 font-bold">Tentang Kami</span>
                                </li>
                                <li class="border-b border-gray-300 xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal pt-2 pb-4 hover:greenprimary flex items-center focus:text-indigo-700 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <polyline points="7 8 3 12 7 16"></polyline>
                                        <polyline points="17 8 21 12 17 16"></polyline>
                                        <line x1="14" y1="4" x2="10" y2="20"></line>
                                    </svg>
                                    <span class="ml-2 font-bold">Deliverables</span>
||||||| 388b1e3
                                    </svg>
                                    <span class="ml-2 font-bold">Performance</span>
                                </li>
                                <li class="border-b border-gray-300 xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal pt-2 pb-4 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <polyline points="7 8 3 12 7 16"></polyline>
                                        <polyline points="17 8 21 12 17 16"></polyline>
                                        <line x1="14" y1="4" x2="10" y2="20"></line>
                                    </svg>
                                    <span class="ml-2 font-bold">Deliverables</span>
=======
                                    </svg>
                                    <span class="ml-2 font-bold">Our Team</span>
>>>>>>> fdcc36dd9597ac71f058cd884a5e4f20fb93a1e6
                                </li>
                                <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-greenprimary focus:outline-none">
                                    <div class="flex items-center">
                                        <p class="text-sm ml-2 cursor-pointer">Jane Doe</p>
                                        <div class="sm:ml-2 text-white relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down cursor-pointer" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-greenprimary focus:outline-none">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="7" r="4" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        <span class="ml-2">Profile</span>
                                    </div>
                                </li>
                            </ul>
                            <svg @click="MenuHandler($event, true)" aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <line x1="4" y1="8" x2="20" y2="8"></line>
                                <line x1="4" y1="16" x2="20" y2="16"></line>
                            </svg>
                            <div class="hidden close-m-menu text-gray-700" @click="MenuHandler($event, false)">
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
<<<<<<< HEAD
                        </svg> -->
                        <!-- <img src="/img/menu/nyehaat.id-logo-pngyow-1.png" class="h-20" alt=""> -->
                        <h2 class="hidden sm:block  text-gray-700 drop-shadow-lg leading-normal pl-2 sm:text-lg font-bold ">Nyehaat.<span>id</span></h2>
||||||| 388b1e3
                        </svg>
                        <h2 class="hidden sm:block text-base text-gray-700 font-bold leading-normal pl-3">The North</h2>
=======
                        </svg>
                        <h2 class="hidden sm:block text-base text-gray-700 font-bold leading-normal pl-3">nyehaat.id</h2>
>>>>>>> fdcc36dd9597ac71f058cd884a5e4f20fb93a1e6
                    </div>
                </div>
                <div class="flex ">
                    <div class="hidden xl:flex md:mr-6 xl:mr-16 font-opensans xl:text-lg font-bold space-x-24 ">
                        <a href="javascript: void(0)" class="flex  items-center   leading-5 text-gray-700 hover:text-greenprimary  focus:bg-gray-100 focus:outline-none">
                            <span class=" border-transparent hover:space-y-2 hover:border-b-4 hover:border-greenprimary hover:transition transition ease-in hover:ease-in-out ">
                                Home
                            </span>
<<<<<<< HEAD
||||||| 388b1e3
                            Dashboard
=======
                            Home
>>>>>>> fdcc36dd9597ac71f058cd884a5e4f20fb93a1e6
                        </a>
                        <a href="javascript: void(0)" class="flex  items-center   leading-5 text-gray-700 hover:text-greenprimary  focus:bg-gray-100 focus:outline-none ">
                            <span class=" border-transparent  hover:border-b-4 hover:border-greenprimary hover:transition transition ease-in hover:ease-in-out ">
                                Menu
                            </span>
<<<<<<< HEAD

||||||| 388b1e3
                            Products
=======
                            Menu
>>>>>>> fdcc36dd9597ac71f058cd884a5e4f20fb93a1e6
                        </a>
                        <a href="javascript: void(0)" class="flex  items-center  leading-5 text-gray-700 hover:text-greenprimary  focus:bg-gray-100 focus:outline-none  ">
                            <span class="  border-transparent   hover:border-b-4 hover:border-greenprimary hover:transition transition ease-in hover:ease-in-out  ">
                            Tentang Kami
                            </span>
<<<<<<< HEAD

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
||||||| 388b1e3
                            Performance
                        </a>
                        <a href="javascript: void(0)" class="flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="7 8 3 12 7 16"></polyline>
                                    <polyline points="17 8 21 12 17 16"></polyline>
                                    <line x1="14" y1="4" x2="10" y2="20"></line>
                                </svg>
                            </span>
                            Deliverables
                        </a>
=======
                            Our Team
                        </a>
>>>>>>> fdcc36dd9597ac71f058cd884a5e4f20fb93a1e6
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
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
