<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <p>検索機能</p><br>
                <div>
                    <form action="{{route('corporate.search')}}" method="GET">
                           言語：<select name="keyword">
                            <option value="">選択してください</option>
                            <option value="PHP">PHP</option>
                            <option value="Java">Java</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Go">Go</option>
                           </select><br><br>

                           シリーズ：<select name="keyword2">
                            <option value="">選択してください</option>
                            <option value="シリーズA">シリーズA</option>
                            <option value="シリーズB">シリーズB</option>
                            <option value="シリーズC">シリーズC</option>
                            <option value="シリーズD">シリーズD</option>
                           </select><br><br>

                           タグ：<select name="keyword3">
                            <option value="">選択してください</option>
                            <option value="筑波創業">筑波創業</option>
                            <option value="多国籍エンジニア在籍">多国籍</option>
                            <option value="農業">農業</option>
                            <option value="医療">医療</option>
                            <option value="宇宙">宇宙</option>
                           </select><br><br>
                           職種：<select name="keyword4">
                            <option value="">選択してください</option>
                            <option value="フロントエンドエンジニア">フロントエンドエンジニア</option>
                            <option value="バックエンドエンジニア">バックエンドエンジニア</option>
                            <option value="インフラエンジニア">インフラエンジニア</option>
                        </select><br><br>

                        役職：<select name="keyword5">
                            <option value="">選択してください</option>
                            <option value="ジュニア">ジュニア</option>
                            <option value="ミドル">ミドル</option>
                            <option value="シニア">シニア</option>
                        </select><br><br>
                        <input type="submit" value="検索">
                    </form>

                </div><br><br>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>検索結果画面</h1><br>
                    <table>
                        <tr>
                            <th>名前</th>
                            <th>言語</th>
                            <th>シリーズ</th>
                            <th>タグ</th>
                            <th>職種</th>
                            <th>役職</th>
                            <th>いいね</th>
                        </tr>
                        @foreach ($engineer_infos as $engineer_info)
                        <tr>
                            <td>{{$engineer_info->user->engineer_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>{{$engineer_info->language}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>{{$engineer_info->age}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>{{$engineer_info->address}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            @if($engineer_info->user->nice)
                            <td><a href="{{route('corporate.unnice',['id'=>$engineer_info->user_id])}}">いいね済&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
                            @else
                            <td><a href="{{route('corporate.nice',['id'=>$engineer_info->user_id])}}">いいね&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
                            @endif
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
