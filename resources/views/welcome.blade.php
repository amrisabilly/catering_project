<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div>

                {{-- Navbar --}}
                <div class="bg-[#FFFADD] w-full h-40 flex items-center justify-between px-6 rounded-b-lg shadow-md">
            
                    {{-- Logo --}}
                    <img src="img/logocatering.png" alt="" class="w-[143px] h-[143px] margin">
        
                    {{-- List --}}
                    <div class="flex items-center justify-center bg-[#FFFADD] rounded-[40px] shadow-md w-[523px] h-[50px]">
                    <ul class="flex space-x-6 text-gray-800">
                        <li>
                            <a href="#" class="hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-lg transition duration-300">Home</a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-lg transition duration-300">Menu</a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-lg transition duration-300">Order</a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-lg transition duration-300">Contact</a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-lg transition duration-300">About</a>
                        </li>
                    </ul>
                    </div>
                </div>
        
    </div>
</body>

</html>
