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


