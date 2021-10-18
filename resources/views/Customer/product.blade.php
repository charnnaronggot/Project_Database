<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                HELLO  PRODUCT
                <div class = "card-header">ตารางข้อมูล</div>
                            <div class = "container">
                                <div class = "row ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">product_code</th>
                                                <th scope="col">product_name</th>
                                                <th scope="col">product_line</th>
                                                <th scope="col">product_scale</th>
                                                <th scope="col">product_vendor</th>
                                                <th scope="col">product_description</th>
                                                <th scope="col">quantity_instock</th>
                                                <th scope="col">buy_price</th>
                                                <th scope="col">MSRP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($products as $row)
                                                <tr>
                                                    
                                                    <td>{{$row -> product_code}}</td>
                                                    <td>{{$row -> product_name}}</td>
                                                    <td>{{$row -> product_line}}</td>
                                                    <td>{{$row -> product_scale}}</td>
                                                    <td>{{$row -> product_vendor}}</td>
                                                    <td>{{$row -> product_description}}</td>
                                                    <td>{{$row -> quantity_instock}}</td>
                                                    <td>{{$row -> buy_price}}</td>
                                                    <td>{{$row -> MSRP}}</td>
                                                    <td>
                                                         <a href= "" class="btn btn-primary">BUY</a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                        </tbody>
                                        </table>
                                        </div>
                                    </div>
            </div>
        </div>
    </div>
</x-app-layout>


