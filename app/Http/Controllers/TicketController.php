<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function create()
    {
        $name = Auth::user()->name;
        $job = Job::all();
        return view('fontend.create-ticket',compact('name','job'));
    }
    function stores(Request $request){
        $request->validate([
        'name'=>'required|min:5|max:255',
        'job'=>'required|not_in:0',
        'level'=>'required|not_in:0',
        'image'=>'required|image|mimetypes:image/jpeg,image/png|max:5000',
        'status'=>'required|not_in:0',
        'priority'=>'required|not_in:0',
        'date-start'=>'required',
        'date-deadline'=>'required',
        'person-charge'=>'required',
        'department'=>'required',
        ],
        [
            'required'=>':attribute không được để trống',
            'min'=>':attribute độ dài phải trên 5 ký tự',
            'max'=>':attribute độ dài phải dưới 255 ký tự',
            'mimetypes:image/jpg,image/png'=>':attribute có dạng đuôi phải là jpg hoặc png',
            'not_in'=>':attribute Không được để trống',
        ],
        [
            'name'=>'Họ Tên',
            'job'=>'Job',
            'price'=>'Level',
            'image'=>'File tải lên',
            'status'=>'Status',
            'priority'=>'Độ ưu tiên',
            'date-start'=>'Ngày bắt đầu',
            'date-deadline'=>'Ngày kết thúc',
            'person-charge'=>'Người phụ trách',
            'department'=>'Phòng Ban'
        ]);
        return redirect('admin/product/list')->with('status','thêm bài viết thành công');
    }
}
