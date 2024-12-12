<x-layout>
    <x-slot:layoutTitle>{{ $pagetitle }}</x-slot:layoutTitle>
    <h1>
        WELCOME TO MY HOMEPAGE
    </h1>
    <div>
        <h1>My Project</h1>
        <table border="3" cellpadding="8" cellspacing="0">
            <tr style="background-color: rgb(255, 255, 255);">
                <th>NO.</th>
                <th>CODE</th>
                <th>CLIENT</th>
                <th>SEMESTER</th>
           
            </tr>
            @php ($i = 0)
            
            @foreach ($projects as $pro)
            @php ($i++)
            @if ($i % 2 == 0)
                 @php ($semester = "ODD")
            @else
                 @php ($semester = "EVEN")
            @endif
            <tr>
                {{-- Loop itu otomatis akses data dari array --}}
                <td>{{$loop->index+1}}</td>
                <td>{{ $pro['title'] }}</td>
                <td>{{ $pro['code'] }}</td>
                <td>{{ $pro['course'] }}</td>
                <td>
                    @if ($loop->first)
                    My very first project
                    @elseif ($loop->last)
                        My LAST project
                        @else
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, velit ex ea, error ducimus sed, nulla itaque non libero amet quam! Voluptatibus sunt asperiores illo fugit quae est nam numquam.
                    @endif
                </td>
                <td>
                    <button></button>
                    <a href="/detailWid/{{ $pro['id'] }}">
                            <button>Detail</button>
                        </a>
                        
                </td>
                <td>
                    <button></button>
                    <a href="/detail/{{ $pro['code'] }}">
                            <button>Detail with code</button>
                        </a>
                        
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-layout>