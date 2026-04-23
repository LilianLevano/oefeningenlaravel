<x-site-layout>


    <div class="flex flex-row">
        @for($i = 1; $i <= 6; $i ++)

            <div class="mr-4 pr-4 border-r border-black">
            @for($j = 1; $j <= 6; $j++)


                    <p>{{$i}} * {{$j}} = {{$i * $j}}</p>


          @endfor
            </div>


        @endfor
    </div>

</x-site-layout>
