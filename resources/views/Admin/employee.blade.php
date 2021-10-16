<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                HELLO  EMPLOYEE
                    <div class="py-5">
                        <div class = "col-md-12">
                            <div class = "card-header">ตารางข้อมูลพนักงาน</div>

                        </div>
                    <div>
                    <div class = "col-md-12">
                            <div class = "card-header">แบบฟอร์ม</div>
                                <div class ="card-body">
                                    <form action="" method ="post" >
                                        <label for="firstname">ชื่อ</label>
                                        <input type="text" class = "form-control" name = "firstname">
                                        <label for="lastname">นามสกุล</label>
                                        <input type="text" class = "form-control" name = "lastname">
                                        <input type="summit" value = บันทึก>
                                    </form>
                                </div>
                    </div>
     
            </div>
        </div>
    </div>
</x-app-layout>


