@extends('layouts.app')

@section('content')

    <!-- This is an example component -->
    
    <div class="flex justify-center pt-20">
    
    <div class='overflow-x-auto w-full'>

        <!-- Table -->
        <h1 class='flex justify-center '>Paint job in progress</h1>
        
        <table class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
            <thead class="bg-gray-50">
                <tr class="text-gray-600 text-left">
                    <th class="font-semibold text-sm uppercase px-6 py-4">
                        Plate Number
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4">
                        Current Color
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        Target Color
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        Action
                    </th>  
                                  
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @foreach($paintjobs as $paintjob)
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">                          
                            <div>
                                <p class="">
                                   {{ $paintjob->plate_number }}
                                </p>                               
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="">
                            {{ $paintjob->current_color }}
                        </p>                       
                    </td>
                    <td class="px-6 py-4 text-center">                    
                        <p class="">
                            {{ $paintjob->target_color }}
                        </p>                 
                    </td>                   
                    <td class="px-6 py-4 text-center">
                        <form action="/paint/{{  $paintjob->id }}" method="POST">
                        @csrf
                        @method('PUT')
                            <button type="submit" class="text-green-800 bg-green-200 font-semibold px-10 rounded-full">
                                Mark as Complete
                            </button>
                        
                        </form>                
                    </td>
                </tr>
            @endforeach
              
            </tbody>
        </table>

        <div class="flex justify-center pt-20">
    <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                Total Cars Painted
                            </div>
                            <div class="text-xl font-bold">
                                {{ $painted_cars }}
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                Blue
                            </div>
                            <div class="text-xl font-bold">
                                {{ $blue }}
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                Red
                            </div>
                            <div class="text-xl font-bold">
                                {{ $red }}
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                    <div class="flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                            <div class="text-xs uppercase font-light text-gray-500">
                                Green
                            </div>
                            <div class="text-xl font-bold">
                                {{ $green }}
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











    </div>
</div>


@endsection