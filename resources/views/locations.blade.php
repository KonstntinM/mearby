@extends('layouts.app')

@section('content')
    <div class="container w-full md:max-w-3xl mx-auto pt-20">

		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

			<!--Title-->
			<div class="font-sans">
				<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">Locations</h1>
				<p class="text-sm md:text-base font-normal text-gray-600">All your stored locations.</p>
			</div>
        </div>

        <div class="flex row mt-12">
            <div class="flex row max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow dark:bg-gray-800 cursor-pointer">
                <img class="object-cover w-36 h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                
                <div class="mx-7 py-5 text-center">
                    <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">Location 1</a>
                    <span class="text-sm text-gray-700 dark:text-gray-200">This is my description!</span>
                </div>
            </div>

            <div class="flex row max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow dark:bg-gray-800 cursor-pointer">
                <img class="object-cover w-full h-56" src="/images/add.svg" alt="avatar">
            </div>
        </div>
	</div>
	<!--/container-->
@endsection