<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>求人情報編集</p><br><br>
                    現在：<br><br>
                    プロダクト名：{{$CorporateInfo->product_name}}<br><br>
                    プロダクト内容：{{$CorporateInfo->product_description}}<br><br>
                    開発言語：{{$CorporateInfo->language}}<br><br>
                    シリーズ：{{$CorporateInfo->series}}<br><br>
                    タグ：{{$CorporateInfo->tag}}<br><br><br><br><br>

                    新しい情報：<br><br>
                     <form action="{{route('corporate.corporate-info-update')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$CorporateInfo->id}}">
                        プロダクト名：<input type="text" name="product_name"><br><br>
                        プロダクト内容：<input type="text" name="product_description"><br><br>

                        言語：<select name="language">
                            <option value="">選択してください</option>
                            <option value="PHP">PHP</option>
                            <option value="Java">Java</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Go">Go</option>
                           </select><br><br>

                           シリーズ：<select name="series">
                            <option value="">選択してください</option>
                            <option value="シリーズA">シリーズA</option>
                            <option value="シリーズB">シリーズB</option>
                            <option value="シリーズC">シリーズC</option>
                            <option value="シリーズD">シリーズD</option>
                           </select><br><br>

                           タグ：<select name="tag">
                            <option value="">選択してください</option>
                            <option value="筑波創業">筑波創業</option>
                            <option value="多国籍エンジニア在籍">多国籍</option>
                            <option value="農業">農業</option>
                            <option value="医療">医療</option>
                            <option value="宇宙">宇宙</option>
                           </select><br><br>

                        <input type="submit" value="編集する"><br><br>
                    </form>
                 </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
