<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberLoginController extends Controller
{
    /**
     * 顯示 會員登入\主控面板 頁面
     * @author Brian
     * @param 
     * @return $msg
     */
    public function index()
    {
        $view = 'front.member.member_login';

        return view($view);
    }

    /**
     * 顯示會員註冊頁面
     * @author Brian
     * @param 
     * @return $msg
     */
    public function create()
    {
        $view = 'front.member.member_register';

        return view($view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * 顯示 會員規章\會員訂閱項目\點數查詢\待繳查詢 頁面
     * @author Brian
     * @param 
     * @return $msg
     */
    public function show(Request $request, string $id)
    {
        $view = '';
        $showItem = $request->has('showItem') ? $request->input('showItem') : null;

        if(!isset($showItem)){
            abort(404);
        }

        switch ($showItem) {
            case 'role':
                $view = 'front.member.member_role';
                break;
            case 'points':
                $view = 'front.member.member_points';
                break;
            case 'rental':
                $view = 'front.member.member_rental';
                break;
            case 'payment':
                $view = 'front.member.member_payment';
                break;
            case 'contact':
                $view = 'front.member.member_edit_contact';
                break;
            case 'info':
                $view = 'front.member.member_edit_info';
                break;
            case 'password':
                $view = 'front.member.member_edit_password';
                break;
            default:
                $view = '';
                break;
        }

        if($view == ''){
            abort(404);
        }

        return view($view);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $view = '';
        $showItem = $request->has('showItem') ? $request->input('showItem') : null;
        
        if(!isset($showItem)){
            abort(404);
        }

        switch ($showItem) {
            case 'contact':
                $view = 'front.member.member_edit_contact';
                break;
            case 'info':
                $view = 'front.member.member_edit_info';
                break;
            case 'password':
                $view = 'front.member.member_edit_password';
                break;
            default:
                $view = '';
                break;
        }

        if($view == ''){
            abort(404);
        }

        return view($view);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $view = 'front.member.member_role';

        return view($view);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
