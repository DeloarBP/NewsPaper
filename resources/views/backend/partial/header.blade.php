
<div class="w-64 flex-shrink-0 px-4 py-4 bg-gray-800">
    <img v-show="false" src="" alt="">
    <h2 class="text-2xl tracking-widest text-white text-center font-extrabold">{{ config('app.name') }}</h2>
</div>
<div class="flex-1 flex justify-end bg-white shadow">
    <nav class="flex mr-8 py-3">
        <button id="toggle" class="flex focus:outline-none items-center">
                <img class="w-10 h-10 rounded-full border-2 border-gray-600 hover:border-blue-500 cursor-pointer" src="https://buyabrideonline.com/wp-content/uploads/2019/10/Serbian-Brides1-1.jpg" alt="">
                <span class="mx-2 font-semibold text-gray-600">{{ Auth::user()->name }}</span>
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
        <div id="isClose"></div>
        <div id="menu" class="mt-2 absolute right-0 origin-top-right text-left hidden">
            <div class="w-64 bg-white rounded-lg shadow-lg mr-4">
                <div class="flex items-center px-6 py-4 mt-16">
                    <img class="h-10 w-10 rounded-full flex-no-shrink" src="https://images.unsplash.com/photo-1541271696563-3be2f555fc4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=1.75&w=200&h=200&q=80" alt="" />
                        <div class="ml-4">
                        <p class="font-semibold text-gray-900 leading-none">{{ Auth::user()->name }}</p>
                        <p>
                            <a href="#" class="text-sm text-gray-600 leading-none hover:underline">View Profile</a>
                        </p>
                    </div>
                </div>
                <!--logout--area-->
                <div class="border-t-2 border-gray-200 py-1">
                    <a href="{{ route('logout') }}" class="block w-full px-6 py-3 text-left leading-tight hover:bg-gray-200"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
                <!--end-logout-area-->
            </div>
        </div>
    </nav>
</div>

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $("#toggle").click(function(){
        $("#isClose").addClass('fixed inset-0')
        $("#menu").toggle();
    });
    $("#isClose").click(function(){
        $("#isClose").removeClass('fixed inset-0')
        $("#menu").toggle();
        });
    });
</script>
@endpush
