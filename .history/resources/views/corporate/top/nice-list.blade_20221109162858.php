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
                <span style="color:#a36fbd;font-weight:bold">送ったいいね一覧</span>
                <span style="color:#a36fbd;font-weight:bold">&nbsp;&nbsp;&nbsp;受け取った一覧</span>
                <br><br>
                <table>
                    <tr>
                        <th>画像</th>
                        <th>名前</th>
                        <th>login</th>
                        <th>いいね</th>
                        <th>詳細</th>
                    </tr>

                    @foreach ($niceds as $nice)
                    <tr>
                        <td id="profGroup">
                            <div class="profmodalWrapper">
                                <img src="" class="profModalImage">
                            </div>
                            <img src="{{asset($nice->user->engineer_info->path)}}" class="profImage">
                        </td>
                        <td>
                            <?php
                            $created=$nice->user->engineer_info->user->created_at;
                            $nowTimeStamp=strtotime('now');
                            $beforeOneWeekTimeStamp=strtotime('-1 week');
                            $createdTimeStamp=strtotime($created);
                            ?>
                            @if($createdTimeStamp>$beforeOneWeekTimeStamp)
                            <p style ="font-weight:bold;color:#a36fbd">NEW!</p>
                            @endif
                            {{$nice->user->engineer_name}}<br>
                            <?php
                            $niceCount=0;
                            foreach($niceList as $niceNumber){
                                if($niceNumber===$nice->user->id){
                                    $niceCount++;
                                }
                            }
                            ?>
                            {{$niceCount}}いいね&emsp;&emsp;<br>
                        </td>
                        <td>
                            <?php
                            $logged=$nice->user->engineer_info->user->user_login->logged_at;
                            $nowTimeStamp=strtotime('now');
                            $beforeThreeDaysTimeStamp=strtotime('-3 days');
                            $beforeOneWeekTimeStamp=strtotime('-1 week');
                            $loggedTimeStamp=strtotime($logged);
                            ?>
                            @if($loggedTimeStamp>$beforeThreeDaysTimeStamp)
                            <img src="../../../img/threeDay.png" style="width:25px">
                            @elseif($loggedTimeStamp>$beforeOneWeekTimeStamp)
                            <img src="../../../img/oneWeek.png" style="width:25px">
                            @else
                            <p>bad</p>
                            @endif
                        </td>
                        @if(array_key_exists( $nice->user->id , $myNiceList ))
                        <td><a href="{{route('corporate.unnice',['id'=>$nice->user->id])}}" style="color:#b9b9b9;font-weight:bold">いいね済&emsp;&emsp;</a></td>
                        @elseif(array_key_exists( $nice->user->id , $nicedList ))
                        <td><a href="{{route('corporate.nice',['id'=>$nice->user->id])}}" style="color:#b9b9b9;font-weight:bold">いいねあり！&emsp;&emsp;</a></td>
                        @else
                        @endif
                        <td>詳細</td>
                    </tr>
                    @endforeach
                </table>

                </div>
                <div class="p-6 bg-white border-b border-gray-200">
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
