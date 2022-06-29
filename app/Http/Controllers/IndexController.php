<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\attributes;
use App\Models\company;
use App\Models\car_details;
use App\Models\category;
use App\Models\subcategory;
use App\Models\accessories;
use App\Models\brand;
use App\Models\contact_details;


use Illuminate\Support\Str;
use App\Mail\mailer;
use Session;
use Helper;
use Mail;
use Carbon\Carbon;
use \Crypt;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $accessories = accessories::where('is_active',1)->where('is_deleted',0)->get();
        $best_seller = car_details::where('is_active',1)->where('is_deleted',0)->where('best_seller',1)->get();
        $featured = car_details::where('is_active',1)->where('is_deleted',0)->where('is_featured',1)->get();
        $new_product = car_details::where('is_active',1)->where('is_deleted',0)->where('created_at', '>=', Carbon::now()->subDays(2)->toDateTimeString())->get();
        return view('web.index')->with(compact('accessories','best_seller','featured','new_product'));
    }
    public function product(){
        $product = car_details::where('is_active',1)->where('is_deleted',0)->orderBy('id', 'desc')->paginate(20);
        
        return view('web.product')->with(compact('product'));
    }
    public function search_detail(Request $request) {
        // dd($request);
        $product = car_details::where('is_active',1)->where('is_deleted',0);
        if ($request->model) {
            $product = $product->where('model', 'LIKE', "%".$request->model."%");
        }
        if ($request->year) {
            $product = $product->where('from_year','>=',$request->year);
        }
        if ($request->make) {
            $company = company::select('id')->where('is_active',1)->where('is_deleted',0)->where('name', 'LIKE', "%".$request->make."%")->get()->toArray();
            $product = $product->whereIn('company_id',$company);
        }
        // dd("no");
        // dd($q);
        $product = $product->paginate(20);
        $product->appends(['year' => $request->year , 'make' => $request->make , 'model' => $request->model]);
        // dd($product);
        return view('web.product')->with(compact('product'));
        // dd("no");
        
    }
    public function search_text(Request $request){
        if ($request->text) {
            $product = car_details::where('is_active',1)->where('is_deleted',0)
            ->where('drilled_no', 'LIKE', "%".$request->text."%")
            ->orWhere('type1_no', 'like', '%'.$request->text.'%')
            ->orWhere('type3_no', 'like', '%'.$request->text.'%')
            ->orWhere('type5_no', 'like', '%'.$request->text.'%')
            ->orWhere('disc_size_type', 'like', '%'.$request->text.'%')
            ->orderBy('id', 'desc')
            ->paginate(20);
        } else{
            $product = car_details::where('is_active',1)->where('is_deleted',0)->orderBy('id', 'desc')->paginate(20);
        }
        return view('web.product')->with(compact('product'));
    }
    public function get_make(Request $request){
        $product = car_details::select('company_id')->where('is_active',1)->where('is_deleted',0)->where('from_year','>=',$_POST['year'])->get()->toArray();
        $company = company::where('is_active',1)->where('is_deleted',0)->whereIn('id',$product)->get();
        $body = '';
        foreach ($company as $key => $value) {
            $body .= '<option value="'.$value->name.'"></option>';
            // dd($value->name);
        }
        $status['message'] = $body;
        $status['status'] = 1;
        return json_encode($status);
        // dd($body,"here");
    }
    public function get_model(){
        
        if (isset($_POST['year']) && !empty($_POST['year'])) {
            $year = $_POST['year'];
        } else{
            $year = 0;
        }
        $company = company::where('is_active',1)->where('is_deleted',0)->where('name',$_POST['make'])->first();
        $body = '';
        if ($company) {
            $product_model = car_details::where('is_active',1)->where('is_deleted',0)->where('company_id',$company->id)->where('from_year','>=',$year)->get();
            if ($product_model) {
                foreach ($product_model as $key => $value) {
                    $body .= '<option value="'.$value->model.'"></option>';
                }
            }
        }
        $status['message'] = $body;
        $status['status'] = 1;
        return json_encode($status);
    }
    public function checkout(){
        return view('web.checkout');
    }
    
    
    public function inner_access(){
        return view('web.inner_access');
    }

    public function category_list($accessories_id){
        try {
            $accessories_id = Crypt::decrypt($accessories_id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Error : ' . $th->getMessage());
        }
        $accessory = accessories::where('is_active',1)->where('is_deleted',0)->where('id',$accessories_id)->first();

        $category = category::where('is_active',1)->where('is_deleted',0)->where('accessories_id',$accessories_id)->get();
        return view('web.categorylist')->with(compact('category','accessory'));
    }

    public function subcategory_list($category_id){
        // dd($category_id);
        try {
            $category_id = Crypt::decrypt($category_id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Error : ' . $th->getMessage());
        }
        $category = category::where('is_active',1)->where('is_deleted',0)->where('id',$category_id)->first();
        
        $subcategory = subcategory::where('is_active',1)->where('is_deleted',0)->where('category_id',$category_id)->get();
        // dd($category);
        return view('web.subcategorylist')->with(compact('subcategory','category'));
    }
    
    public function detail($id){
        try {
            $id = Crypt::decrypt($id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Error : ' . $th->getMessage());
        }
        $product = car_details::where('is_active',1)->where('is_deleted',0)->where('id', $id)->first();
        // dd($product);
        return view('web.detail')->with(compact('product'));
    }
    public function about(){
        return view('web.about');
    }
    public function contact(){
        return view('web.contact');
    }
    public function brand(){
        $brand = brand::where('is_active',1)->where('is_deleted',0)->get();
        return view('web.brand')->with(compact('brand'));
    }
    public function search(){
        return view('web.search');
    }
    public function account(){
        if (Auth::check()) {
            return redirect()->route('user_profile')->with('message', "You are already logged in");
        }
        return view('web.account');
    }
    public function cart(){
        return view('web.cart');
    }
    
    public function login(){
        if (Auth::check()) {
            return redirect()->route('user_profile')->with('message', "You are already logged in");
        }
        return view('web.account');
    }

    public function post_ajax_call(Request $request)
    {
        $ajax_company = explode(",",$_POST['company']);
        // dd($ajax_company);
        $min = isset($_POST['minimum_range'])?$_POST['minimum_range']:'';
        $max = isset($_POST['maximum_range'])?$_POST['maximum_range']:'';
        if(isset($_POST['company']) && !empty($_POST['company'])){
            $query = car_details::where("is_active" , 1)->whereIn('company_id', $ajax_company)->whereBetween('gt_price',[$min, $max])->get();
            // dd($min,$max,$query);
        }else{
            $query = car_details::where("is_active" , 1)->get();
        }
                $body = '';
                 if ($query->count() > 0) {
            foreach ($query as $key => $value) {
                $company = company::where('is_active',1)->where('id',$value->company_id)->first();

                $img = asset($value->image);
                $price=number_format($value->gt_price, 2, '.', ',');
                $slug=route("detail",Crypt::encrypt($value->id));

                $body .= '<div class="row product-row">
                        <div class="col-md-9">
                            <div class="product-main">
                                <div class="product-imgg">
                                    <img src="'.$img.'" />
                                </div>
                                <div class="product-info">
                                    <h6>'.$company->name.'</h6>
                                    <h5>'.$value->model.'</h5>
                                    <p><span>'.$value->type.'</span></p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="starting-price">
                                <p>from <span>'.'$'.$price.'</span></p>
                                <a href="'.$slug.'">View Details</a>
                            </div>
                        </div>
                    </div>';
        }
        }else{
            $body ='<div class="col-md-12">
                    <div class="alert alert-warning" style="margin:20% 0;text-align: center;">
                    <strong>No Records Found</strong>
                    </div>
                    </div>';

        }
        return response()->json(['body' => $body]);   

    }
    public function contact_submit(Request $request){
        $token_ignore = ['_token' => ''];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        $create = contact_details::create($post_feilds);
        $details = [
            'title' => 'Mail from Smart Auto Parts',
        ];

        $mail = \Mail::to($_POST['email'])->send(new mailer());
        // dd($mail);
        return redirect()->route('welcome');
        // return redirect()->back();
    }
}
