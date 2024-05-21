@extends('layout.user')
@section('contents')


<div class="flex">
    <div class="p-4 max-w-lg mx-auto mt-12 flex">
        <details class="mb-2">
            <summary class=" p-4 rounded-lg cursor-pointer shadow-md mb-4">
                <span class="font-semibold">Personal details *</span>
                <p>Add your name,contact information, social links and portfolio links .</p>


            </summary>
            <ul class="ml-8 space-y-4 align-center">
                <div class="rounded-lg border bg-white px-4 pt-8 pb-10 shadow-lg">
                    <div class="relative mx-auto w-36 rounded-full">
                        <span class="absolute right-0 m-3 h-3 w-3 rounded-full bg-green-500 ring-2 ring-green-300 ring-offset-2"></span>
                        <img class="mx-auto h-auto w-full rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                    </div>

                <div class=" ">
                    <div class="w-full max-w-3xl mx-auto p-8">
                        <div class="bg-white  p-8 rounded-lg shadow-md border dark:border-gray-700">

                            <!-- Shipping Address -->
                            <div class="mb-6 ">
                                <p>Add your name,contact information, social links and portfolio links .</p>
                                <div class="grid grid-cols-2 gap-4 mt-10">
                                    <div>
                                        <label for="first_name" class="block text-gray-700 dark:text-white mb-1">First Name</label>
                                        <input type="text" id="first_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    </div>
                                    <div>
                                        <label for ="last_name" class="block text-gray-700 dark:text-white mb-1">Last Name</label>
                                        <input type="text" id="last_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 dark:text-white mb-1">
                                        Email Address
                                    </label>
                                    <input type="email" name="email" id="email" placeholder=""
                                           class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" />
                                </div>


                                <div class="mt-4">
                                    <label for="address" class="block text-gray-700 dark:text-white mb-1">Address</label>
                                    <input type="text" id="address" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                </div>

                                <div class="mt-4">
                                    <label for="city" class="block text-gray-700 dark:text-white mb-1">City</label>
                                    <input type="text" id="city" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                </div>

                                <div class="grid grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <label for="state" class="block text-gray-700 dark:text-white mb-1">State</label>
                                        <input type="text" id="state" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    </div>
                                    <div>
                                        <label for="zip" class="block text-gray-700 dark:text-white mb-1">ZIP Code</label>
                                        <input type="text" id="zip" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Information -->
                            <div>
                                <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-2">Payment Information</h2>
                                <div class="mt-4">
                                    <label for="card_number" class="block text-gray-700 dark:text-white mb-1">Card Number</label>
                                    <input type="text" id="card_number" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                </div>

                                <div class="grid grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <label for="exp_date" class="block text-gray-700 dark:text-white mb-1">Expiration Date</label>
                                        <input type="text" id="exp_date" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    </div>
                                    <div>
                                        <label for="cvv" class="block text-gray-700 dark:text-white mb-1">CVV</label>
                                        <input type="text" id="cvv" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 flex justify-end">
                                <button class="bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-700 dark:bg-teal-600 dark:text-white dark:hover:bg-teal-900">Place Order</button>
                            </div>

                        </div>
                    </div>
                </div>
                <details class="mb-2">
            <summary class="bg-gray-200 p-4 rounded-lg cursor-pointer shadow-md mb-4">
                <span class="font-semibold">Another Dropdown</span>
            </summary>

        </details>



@endsection
