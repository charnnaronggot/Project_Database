<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                HELLO  CUSTOMER
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header">ตารางข้อมูล</div>
                                <div class = "container">
                                    <div class = "row ">
                                        <table class="table">
                                        
                                       
                                        <thead>
                                            <tr>
                                                <th scope="col">customerNumber</th>
                                                <th scope="col">customerNa</th>
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
                                                            <a href= {{url('/product/edit/'.$row->id)}} class="btn btn-primary">แก้ไข</a>
                                                    </td>
                                                    <td>
                                                            <a href= {{url('/product/buy/'.$row->id)}} class="btn btn-primary">สั่งซื้อ</a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                        
                                        </table>
                                        </table>
                                    </div>
                                </div>       
                        </div>
                <div>
                    <div class = "col-md-12">
                            <div class = "card-header">แบบฟอร์ม</div>
                                <div class ="card-body">

                                <form action="{{route('addCustomer')}}" method ="post" >
                                        @csrf

                                        <div class = "form-group">
                                            <label for="product_code">product_code</label>
                                            <input type="integer" class = "form-control" name = "product_code" >
                                            <label for="product_name">customerName</label>
                                            <input type="text" class = "form-control" name = "product_name">
                                            <label for="product_line">product_line</label>
                                            <input type="text" class = "form-control" name = "product_line">
                                            <label for="product_scale">product_scale</label>
                                            <input type="text" class = "form-control" name = "product_scale">
                                            <label for="product_vendor">product_vendor</label>
                                            <input type="text" class = "form-control" name = "product_vendor">
                                            <label for="product_description">product_description</label>
                                            <input type="text" class = "form-control" name = "product_description">
                                            <label for="quantity_instock">quantity_instock</label>
                                            <input type="integer" class = "form-control" name = "quantity_instock">
                                            <label for="buy_price">buy_price</label>
                                            <input type="integer" class = "form-control" name = "buy_price">
                                            <label for="MSRP">MSRP</label>
                                            <input type="integer" class = "form-control" name = "MSRP">

                                        </div>
                                       
                                        @error('product_code')
                                            <div class="my-2">
                                                <span class="text-danger">{{$message}}</span>
                                            </div>
                                            
                                        @enderror
                                        <br>
                                        <input type="submit" value = บันทึก  class="btn btn-primary">
                                        
                                    </form>

                                </div>
                 </div>
     
            </div>
        </div>
    </div>
</x-app-layout>


