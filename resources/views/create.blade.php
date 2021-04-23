@extends('layouts.app')

@section('content')

    <!-- This is an example component -->
<div class="flex justify-center pt-20">
    <form action="/paint" method="POST">
    @csrf
    <div class="block">
        <div class="relative inline-flex">
            <input type="text" name="plate_number" placeholder="Plate Number" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
        </div>
        <div class="relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
            <select name="current_color" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                <option>Current Color</option>
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Blue">Blue</option>
            </select>
        </div>
        <div class="relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
            <select name="target_color" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                <option>Target Color</option>
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Blue">Blue</option>
            </select>
        </div>
        

        <div class="relative inline-flex">
            <button type="submit" class="border border-gray-300 rounded-full text-white-600 h-10 pl-5 pr-10 bg-orange-100 hover:border-gray-400 focus:outline-none appearance-none">
            Submit
            </button>
        </div>
        
    </div>    
    
    
    
    
    </form>  
</div>


@endsection