<html>
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Laravel App
    </title>
    {{-- <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    /> --}}
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-4/5 mx-auto">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to previous page>
            </a>
        </div>
        

        <h4 class="text-left sm:text-center text-2xl sm:text-4xl md:text-5xl font-bold text-gray-900 py-10 sm:py-20">
            {{ $employee->name }}
        </h4>

        <div class="block lg:flex flex-row">
            <div class="basis-9/12 text-center sm:block sm:text-left">
                <span class="text-left sm:text-center sm:text-left sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 sm:pt-10 pl-0 sm:pl-4 -mt-8 sm:-mt-0">
                    Made by:
                    <a
                        href=""
                        class="font-bold text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                        Code With Dary
                    </a>
                    On 17-07-2022
                </span>
            </div>
        </div>

        <div class="pt-10 pb-10 text-gray-900 text-xl">
            <p class="font-bold text-2xl text-black pt-10">
                {{ $employee->emp_id }}
            </p>
            <p class="font-bold text-2xl text-black pt-10">
                {{ $employee->excerpt }}
            </p>

            
            <p class="text-base text-black pt-10">
                {{ $employee->dob }}
            </p>
            <p class="text-base text-black pt-10">
                {{ $employee->post }}
            </p>
            <p class="text-base text-black pt-10">
                {{ $employee->sallary }}
            </p>
            <p class="text-base text-black pt-10">
                {{ $employee->address }}
            </p>
            <p class="text-base text-black pt-10">
                {{ $employee->min_to_read }}
            </p>
            <p class="text-base text-black pt-10">
                {{ $employee->image_path }}
            </p>
            <p class="text-base text-black pt-10">
                {{ $employee->is_published }}
            </p>
         </div>
    </div>
    </body>
</html>