<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<main class=" mx-auto w-11/12 md:mt-top-content mb-top-title p-3">
    <section class=" max-w-screen-xl">
        <div>
            <div class="flex flex-col w-full items-center bg-[#BCE1FB] px-10 py-100 mt-10 border  rounded-lg shadow md:flex-row md:max-w-l  ">
                <div class="w-full h-auto max-w-xl rounded-lg">
                    <img class="object-cover  md:rounded-l md:rounded-s-lg" src="https://refile.tnaot.com/image/2019/03/14/040d538a9e4f493daed216808d7fcd37.jpg?x-oss-process=image/watermark,image_RS5wbmc_eC1vc3MtcHJvY2Vzcz1pbWFnZS9yZXNpemUsUF8yMA" alt="">

                </div>
                <div class="flex flex-col justify-between p-10 leading-normal text-left  ">
                    <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">IT Engineering</h5>
                    <div class="font-normal text-gray-700 dark:text-gray-400"> Industry: Information Technology</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400"> Salary: $500</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400">  Job type: Full time</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400">Level: Junior level</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400"> Age : 20-40</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400"> Gender: Female/Male</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400">  Qualification: Bachelor</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400">  Language: <br />
                        . Khmer-Native<br />
                        . English-Intermediate <br /></div>
                </div>
                <div class="flex flex-col justify-between   leading-normal ">
                    <div class="font-normal text-gray-700 dark:text-gray-400">Category: Network Engineering</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400">Location: Phnom Penh</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400">Available Position: 5 px</div>
                    <div class="font-normal text-gray-700 dark:text-gray-400">Required Skills: Networking,
                        Testing</div>
                    <div class="font-normal text-gray-900 dark:text-gray-900 text-xl"> Public date: March 11 , 2024</div>
                    <div class="font-normal text-gray-900 dark:text-gray-900  text-xl"> close date: March 31, 2024</div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="ml-10 mt-5 text-[20px] text-[#000000]">
            <span>
                {!! $career->description !!}
            </span>
        </div>
    </section>
    <section class=" mt-10 ">
        <div class="flex items-center justify-center w-auto ">
            <label for="dropzone-file" class="flex flex-col items-center justify-center  h-20  w-40 border-1 rounded-lg cursor-pointer bg-blue-500 ">
                <div class="flex flex-col items-center justify-center pt-5 pb-5">
                    <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="text-sm text-white"><span class="font-semibold">Upload CV</span>
                </div>
                <input id="dropzone-file" type="file" class="" />
            </label>
        </div>

    </section>
</main>
</body>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</html>
