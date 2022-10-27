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
                   プロダクト名：<input type="text" name="product_name"><br><br>
                   プロダクト内容：<input type="text" name="product_description"><br><br>
                   シリーズ：<input type="text" name="series"><br><br>
                   タグ：<input type="text" name="tag"><br><br>
                   <input type="submit" value="登録する">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
