<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-4/5 mx-auto">
    <div class="text-center pt-10">
        <h1 class="text-3xl text-gray-700">
            Add new post
        </h1>
        <hr class="border border-1 border-gray-600 mt-5">
    </div>

<div class="m-auto pt-5">
    <div class="pb-8">
        @if($errors->any())
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Somethin went wrong....

        </div>
        <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-2 text-red-700">
           @foreach ($errors->all() as $error)
           <li>
               {{ $error }}
            </li>
           @endforeach
        </ul>
        @endif
    </div>
    <form
        action="{{ route('blog.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf 

        <label for="is_published" class="text-gray-500 text-2xl">
            Is Published
        </label>
        <input
            type="checkbox"
            class="bg-transparent block border-b-2 inline text-2xl outline-none"
            name="is_published">
        <input
            type="number"
            name="emp_id"
            placeholder="Employee_Id"
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <input
            type="text"
            name="name"
            placeholder="Name"
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <input
            type="text"
            name="excerpt"
            placeholder="Excerpt..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <input
            type="date"
            name="dob"
            placeholder="date of birth"
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <input
            type="text"
            name="post"
            placeholder="Post held"
            class="py-10 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">
        <input
            type = "number"
            name="sallary"
            placeholder="Sallary"
            class="py-10 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">
        <input
            type="text"
            name="address"
            placeholder="address"
            class="py-10 bg-transparent block border-b-2 w-full h-20 text-xl outline-none"> 
        <input
            type="number"
            name="min_to_read"
            placeholder="MIN_TO_READ"
            class="py-10 bg-transparent block border-b-2 w-full h-20 text-xl outline-none"> 
        {{-- <input
            type="path"
            name="image"
            placeholder="image"
            class="py-20 bg-transparent block border-b-2 w-full h-15 text-xl outline-none"> 
         --}}




            
        <div class="bg-grey-lighter py-5">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-1 text-base leading-normal">
                        Select a file
                    </span>
                <input
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button
            type="submit"
            class="uppercase mt-1 bg-blue-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>
</body>
</html>