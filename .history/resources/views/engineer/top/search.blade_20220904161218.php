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
                            <th>いいね</th>
                        </tr>
                        @foreach ($corporate_infos as $corporate_info)
                        <tr>
                            <td>{{$corporate_info->user->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>{{$corporate_info->user->job_info->job_type}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                            <td>{{$corporate_info->language}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>{{$corporate_info->series}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>{{$corporate_info->tag}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            @if($corporate_info->user->nice)
                            <td><a href="{{route('engineer.unnice',['id'=>$corporate_info->user_id])}}">いいね済&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
                            @else
                            <td><a href="{{route('engineer.nice',['id'=>$corporate_info->user_id])}}">いいね&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
                            @endif
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
