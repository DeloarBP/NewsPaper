<template>
   <div class="h-screen bg-gray-200 flex flex-col">
       <header class="flex flex-shrink-0">
           <div class="w-64 flex-shrink-0 px-4 py-4 bg-gray-800">
               <img v-show="false" src="" alt="">
               <h2 class="text-2xl tracking-widest text-white text-center font-extrabold">Brand</h2>
           </div>
           <div class="flex-1 flex justify-end bg-white shadow">
               <nav class="flex mr-8 py-3">
                   <button class="flex focus:outline-none items-center">
                        <img class="w-10 h-10 rounded-full border-2 border-gray-600 hover:border-blue-500 cursor-pointer" src="https://buyabrideonline.com/wp-content/uploads/2019/10/Serbian-Brides1-1.jpg" alt="">
                        <span class="mx-2 font-semibold text-gray-600">User Name</span>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             width="24" 
                             height="24" 
                             fill="none" 
                             stroke="currentColor" 
                             stroke-width="2" 
                             stroke-linecap="round" 
                             stroke-linejoin="round" 
                             class="text-gray-600">
                             <path d="M6 9l6 6 6-6"/>
                        </svg>
                   </button>
               </nav>
           </div>
       </header>
       <div class="flex-1 flex">
            <aside class="w-64 p-6 bg-gray-100">
                <nav>
                    <a href="#" class="-mx-3 py-3 flex text-gray-600 font-semibold">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 width="24" 
                                 height="24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-home">
                                 <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                 <path d="M9 22V12h6v10"/>
                            </svg>
                        </span>
                        Dashboard
                    </a>
                    <a href="#" class="-mx-3 py-3 flex text-gray-600 font-semibold">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 width="24" 
                                 height="24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-home">
                                 <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                 <path d="M9 22V12h6v10"/>
                            </svg>
                        </span>
                        Dashboard
                    </a>
                </nav>
            </aside>
            <main class="p-4">
                <div></div>
            </main>
       </div>
   </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
