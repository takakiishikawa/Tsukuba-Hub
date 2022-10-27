<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineerInfo;
use App\Models\EngineerRegistrationInfo;
use App\Models\NiceManage;


class FromCorporateSearchController extends Controller
{
    public function index(){
        return view('corporate.top.search',[]);
    }


}




<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    /**
     * ユーザー一覧
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request)
    {
        // ユーザー一覧をページネートで取得
        $users = User::paginate(20);

　　     // 検索フォームで入力された値を取得する
        $search = $request->input('search');

        // クエリビルダ
        $query = User::query();

       // もし検索フォームにキーワードが入力されたら
        if ($search) {

            // 全角スペースを半角に変換
            $spaceConversion = mb_convert_kana($search, 's');

            // 単語を半角スペースで区切り、配列にする（例："山田 翔" → ["山田", "翔"]）
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);


            // 単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }

　　　　// 上記で取得した$queryをページネートにし、変数$usersに代入
            $users = $query->paginate(20);

        }

        // ビューにusersとsearchを変数として渡す
        return view('users.index')
            ->with([
                'users' => $users,
                'search' => $search,
            ]);
    }
}
