<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Menu</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logocatering.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFFADD] w-full min-h-screen flex flex-col items-center relative ">

    <!-- Back button & title -->
    <div class="absolute top-[59px] left-[60px] flex items-center">
        <a href="/">
            <img src="img/catering/backbutton.png" alt="back-button" class="w-[32px] h-[32px]">
        </a>
    </div>

    <!-- Navbar -->
    @include('components.navbar')

    <!-- Form Container -->
    <div class="mt-[140px] mb-12 font-poppins">
        <img src="img/catering/registerform.png" alt="register-form" class=" w-auto h-auto ml-2">       
        <form action="{{ route('admin.datasiswa.store.landing') }}" method="POST" class="bg-white w-[800px] p-10 rounded-xl shadow-lg flex justify-between gap-10">
            @csrf
            <!-- Left side -->
            <div class="w-1/2 flex flex-col gap-5">
                <div>
                    <label class="text-sm text-gray-500">Full Name</label>
                    <input type="text" name="full_name" class="w-full border rounded-full px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-yellow-300" required/>
                </div>
                <div>
                    <label class="text-sm text-gray-500">Phone Number</label>
                    <div class="flex items-center border rounded-full px-4 py-2 mt-1 bg-white">
                        <img src="img/catering/telp.png" alt="phone" class="w-4 h-4 mr-2">
                        <span class="text-sm text-gray-500 font-medium mr-2">(+62)</span>
                        <input type="number"
                            name="phone_number"
                            name="phone" 
                            class="flex-1 outline-none text-sm bg-white"  
                            pattern="[0-9]*"
                            inputmode="numeric" 
                            required
                            />
                    </div>
                </div>
                <div class="relative">
                    <label class="text-[13px] text-gray-500">Class</label>
                    <div class="relative mt-1">
                        <select name="class" class="w-full border rounded-full px-10 py-2 appearance-none focus:outline-none focus:ring-2 ap focus:ring-yellow-300 bg-white text-black font-medium" required>
                            <option value="7 Alexandria">7 Alexandria</option>
                            <option value="7 Granada">7 Granada</option>
                            <option value="7 Istambul" selected>7 Istambul</option>
                            <option value="8 Baghdad">8 Baghdad</option>
                            <option value="8 Cordova">8 Cordova</option>
                            <option value="8 Damaskus">8 Damaskus</option>
                            <option value="8 Kairo">8 Kairo</option>
                            <option value="9 Gazza">9 Gazza</option>
                            <option value="9 Makkah">9 Makkah</option>
                        </select>
                        <!-- Icon checklist kiri -->
                        <img src="img/catering/select.png" alt="check" class="absolute left-4 top-1/2 transform -translate-y-1/2 w-4 h-4 pointer-events-none">
                        <!-- Icon dropdown kanan -->
                        <img src="img/catering/dropdown.png" alt="dropdown" class="absolute right-4 top-1/2 transform -translate-y-1/2 w-4 h-4 pointer-events-none">
                    </div>
                </div>
                <div>
                    <label class="text-sm text-gray-500">Gender</label>
                    <div class="flex gap-4 mt-2">
                        <label class="flex items-center gap-1">
                            <input type="radio" name="gender" value="Male" required/>
                            Male
                        </label>
                        <label class="flex items-center gap-1">
                            <input type="radio" name="gender" value="Female" required/>
                            Female
                        </label>
                    </div>
                </div>
            </div>
            {{-- garis tengah --}}
            <div class="w-px bg-gray-300  top-0 bottom-0 left-1/2 transform -translate-x-1/2"></div>

            <!-- Right side -->
            <div class="w-1/2 flex flex-col gap-5">
                <div>
                    <label class="text-sm text-gray-500">Menu Price</label>
                    <div class="flex gap-6 mt-2">
                        <label class="flex items-center gap-1">
                            <input type="radio" name="menu_price" value="16000" required/>
                            Rp.16.000
                        </label>
                        <label class="flex items-center gap-1">
                            <input type="radio" name="menu_price" value="20000" required/>
                            Rp.20.000
                        </label>
                    </div>
                </div>
                <div>
                    <label class="text-sm text-gray-500">Allergies</label>
                    <textarea name="allergies" required class="w-full border rounded-xl px-4 py-2 mt-1 h-[60px] resize-none"></textarea>
                </div>
                <div>
                    <input type="text" name="additional_note" required placeholder="Additional Note.." class="w-full bg-[#F2F2F2] border rounded-full px-4 py-2 text-sm focus:outline-none mt-2" />
                </div>
                <div class="flex justify-center mt-6">
                    <button type="submit" class="bg-[#22668D] text-white text-[13px] font-poppins font-semibold px-6 py-2 rounded-full text-sm flex items-center gap-2 hover:bg-[#1b5573]">
                        <img src="img/catering/send.png" alt="send" class="w-auto h-auto">
                        Send
                    </button>
                </div>
            </div>
        </form>
    </div>

    <img src="img/catering/iconkacang.png" alt="iconkacang" class="absolute bottom-0 right-6 w-[300px] h-auto">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#22668D'
            });
        });
    </script>
@endif
</body>

</html>