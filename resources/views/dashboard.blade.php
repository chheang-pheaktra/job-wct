@extends('layout.app')
@section('title', 'ADMIN')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@section('contents')
   <section>
       <div>
           <h1 class="font-bold text-2xl ml-3">Dashboard</h1>
       </div>
   </section>
   <section>
       <div class="grid grid-cols-1 gap-4 px-4 mt-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:px-8">
           <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                        <div class="p-4 bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                                           viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg></div>
               <div class="px-4 text-gray-700">
                   <h3 class="text-sm tracking-wider">Total Members</h3>
                   <p class="text-3xl">{{ $users->count() }}</p>
               </div>

           </div>
           <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                        <div class="p-4 bg-blue-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                                          viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                                </path>
                            </svg></div>
                        <div class="px-4 text-gray-700">
                            <h3 class="text-sm tracking-wider">Total Job</h3>
                            <p class="text-3xl">{{$job->count()}}</p>
                        </div>
                    </div>
           <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                        <div class="p-4 bg-indigo-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                                </path>
                            </svg></div>
                        <div class="px-4 text-gray-700">
                            <h3 class="text-sm tracking-wider">Total Category</h3>
                            <p class="text-3xl">{{$category->count()}}</p>
                        </div>
                    </div>
           <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
               <div class="p-4 bg-red-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                </path>
                            </svg></div>
               <div class="px-4 text-gray-700">
                            <h3 class="text-sm tracking-wider">Applied</h3>
                            <p class="text-3xl">{{$apply->count()}}</p>
                        </div>
                    </div>
                </div>
   </section>
   <section class="mt-5">
       <table class="min-w-full divide-y divide-gray-200">
           <thead>
           <tr>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
           </tr>
           </thead>
           <tbody class="bg-white divide-y divide-gray-200">
           @foreach($users as $user)
               <tr>
                   <td class="px-6 py-4 whitespace-nowrap">{{$user->id}}</td>
                   <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                   <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                   <td class="px-6 py-4 whitespace-nowrap">{{$user->type}}</td>
                   <td class="px-6 py-4 whitespace-nowrap">
                       <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                   </td>
                   <td class="px-6 py-4 whitespace-nowrap">
                       <button class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</button>
                       <button class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
                   </td>
               </tr>
           @endforeach
                    </tbody>
       </table>
   </section>
@endsection
