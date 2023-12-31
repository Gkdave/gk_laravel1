
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
<body class="w-full h-full bg-gray-300">
    <div class="w-4/5 mx-auto">
        <div class="text-center pt-10">
            <h1 class="text-3xl text-gray-700 hover:text-red-700">
                All Articles
            </h1>
            <hr class="border border-1 border-gray-600 mt-10">
        </div>

        <div class="py-10 sm:py-10">
            <a class="primary-btn inline text-base sm:text-xl bg-green-600 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
               href="{{ route('blog.create') }}">
                New Article
            </a>
        </div>
    </div>
    @if(session()->has('message'))
    <div class="mx-auto w-4/5 pb-10">
        <div class="bg-red-500 text-white font-bold roundec-t px-4 py-2">
            warning 
        </div>
        <div class="border border-t-1 border-red-400 rounded-b bg-red-300 px-4 py-3 text-red-700">
            {{ session()->get('message') }}
        </div>

    </div>

    @endif
    {{-- {{ dd($employees) }} --}}

    @foreach($employees as $employee)
        <div class="w-4/5 mx-auto pb-10">
            <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-5 sm:pb-0">
                <div class="w-11/12 mx-auto pb-5">
                    <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                        <a href="{{ route('blog.show', $employee->id) }}">
                            {{ $employee->emp_id }}
                        </a>
                    </h2>

                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->name }}
                    </p>
                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->excerpt }}
                    </p>
                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->dob }}
                    </p>
                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->post }}
                    </p>
                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->sallary }}
                    </p>
                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->address }}
                    </p>
                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->min_to_read }}
                    </p>
                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->image_path }}
                    </p>
                    <p class="text-gray-900 text-lg py-2 w-full break-words">
                        {{ $employee->is_published }}
                    </p>

                    <span class="text-gray-500 text-sm sm:text-base">
                    Made by:
                        <a href=""
                           class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all">
                            Dave
                        </a>
                    op 25-07-2022
                </span>
                <a href="{{ route('blog.edit',$employee->id) }}" class="block italic text-green-500 border-b-1 border-green-200">
                    Edit
                </a>
                <form action="{{ route('blog.destroy',$employee->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="pt-3 text-red-500 pr-3 " type="submit">DELETE</button>
                </form>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html> 