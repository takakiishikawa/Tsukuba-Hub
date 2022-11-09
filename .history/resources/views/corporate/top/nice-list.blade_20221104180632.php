<head>
    <link rel="stylesheet" href="../../../css/search.css">
</head>
<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <p>送ったいいね一覧</p><br>
                <table>
                    <tr>
                        <th>画像</th>
                        <th>名前</th>
                        <th>login</th>
                        <th>いいね</th>
                        <th>詳細</th>
                    </tr>

                    @foreach ($nices as $nice)
                    <tr>
                        <td id="profGroup">
                            <div class="profmodalWrapper">
                                <img src="" class="profModalImage">
                            </div>
                                <img src="{{asset($engineer_info->path)}}" class="profImage">
                        </td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    @endforeach
                </table>

                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>受け取ったいいね一覧</p><br>
                    <table>
                        <tr>
                            <th>名前</th>
                        </tr>
                        @foreach ($niceds as $niced)
                        </tr>
                            <td>{{$niced->engineer_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>{{$niced->user->nice->still}}</td>

                        @endforeach
                    </table>
                 </div>
            </div>
        </div>
    </div>
    <script src="../../../js/corporate-top-search.js"></script>

</x-app-layout>
