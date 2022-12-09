<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\MenuService;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;
class MenuController extends Controller
{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService =$menuService;
    }
   public function create()
   {
    return view('add',[
        'title'=>'Thêm Danh Mục Mới',
        'menus'=>$this->menuService->getParent()
]);

   }
   public function store(CreateFormRequest $request)
   {
    $this ->menuService->create($request);
   return redirect()->back();
   }
   public function index()
   {
    return view('list',[
        'title'=>'Danh Sách Danh Mục',
        'menus'=>$this->menuService->getAll()
    ]);
   }
   public function show(Menu $menu)
   {
    
    return view('edit',[
        'title'=>'Chỉnh sửa danh mục' . $menu->name,
        'menu'=> $menu,
        'menus'=>$this->menuService->getParent()
    ]);
   }
   public function update(Menu $menu, CreateFormRequest $request)
   {
        $this->menuService->update($request, $menu);
        return redirect('list');
   }
   public function destroy(Request $request): JsonResponse
   {
       $result = $this->menuService->destroy($request);
       if ($result) {
           return response()->json([
               'error' => false,
               'message' => 'Xóa thành công danh mục'
           ]);
       }

       return response()->json([
           'error' => true
       ]);
       
   }
}
