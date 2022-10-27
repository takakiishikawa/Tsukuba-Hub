<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>企業情報登録</p><br>
                   <form action="{{route('corporate.corporate-info-create')}}" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                   ミッション - タイトル：<input type="text" name="mission_title"><br><br>
                   ミッション - 本文：<input type="text" name="mission_content"><br><br>


                   プロダクト名：<input type="text" name="product_name"><br><br>
                   プロダクト内容：<input type="text" name="product_content"><br><br>

                   言語：<input type="checkbox" name="development_language" value="C"> C
                   言語：<input type="checkbox" name="development_language" value="C++"> C++
                   言語：<input type="checkbox" name="development_language" value="C#"> C#
                   言語：<input type="checkbox" name="development_language" value="Java"> Java
                   言語：<input type="checkbox" name="development_language" value="JavaScript"> JavaScript
                   言語：<input type="checkbox" name="development_language" value="PHP"> PHP
                   言語：<input type="checkbox" name="development_language" value="Ruby"> Ruby
                   言語：<input type="checkbox" name="development_language" value="Python"> Python
                   言語：<input type="checkbox" name="development_language" value="R"> R
                   言語：<input type="checkbox" name="development_language" value="Go"> Go
                   言語：<input type="checkbox" name="development_language" value="Swift"> Swift
                   言語：<input type="checkbox" name="development_language" value="Kotlin"> Kotlin
                   言語：<input type="checkbox" name="development_language" value="SQL"> SQL


                   　

                   　　　

                   　　　　

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



                   'development_framework',
                   'development_os',
                   'development_database',
                   'development_infra',
                   'series',
                   'tag',
                   'founded',
                   'headquarters_city',
                   'image',



                   <input type="submit" value="登録する">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
