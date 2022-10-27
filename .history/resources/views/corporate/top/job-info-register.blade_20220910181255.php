<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>求人情報登録</p><br>
                   <form action="{{route('corporate.job-info-create')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    募集職種：<input type="checkbox" name="recruitment_job" value="フロントエンドエンジニア">フロントエンドエンジニア
                    <input type="checkbox" name="recruitment_job" value="バックエンドエンジニア">バックエンドエンジニア
                    <input type="checkbox" name="recruitment_job" value="スマホアプリエンジニア">スマホアプリエンジニア
                    <input type="checkbox" name="recruitment_job" value="インフラエンジニア">インフラエンジニア
                    <input type="checkbox" name="recruitment_job" value="データエンジニア">データエンジニア
                    <input type="checkbox" name="recruitment_job" value="データサイエンティスト">データサイエンティスト
                    <input type="checkbox" name="recruitment_job" value="IoTエンジニア">IoTエンジニア
                    <input type="checkbox" name="recruitment_job" value="AIエンジニア">AIエンジニア
                    <input type="checkbox" name="recruitment_job" value="ITアーキテクト">ITアーキテクト


                    募集職種	"タグより選択
                    、
                    、
                    、
                    、、"

                    職種：<select name="job_type">
                        <option value="">選択してください</option>
                        <option value="フロントエンドエンジニア">フロントエンドエンジニア</option>
                        <option value="バックエンドエンジニア">バックエンドエンジニア</option>
                        <option value="インフラエンジニア">インフラエンジニア</option>
                    </select><br><br>

                    役職：<select name="position">
                        <option value="">選択してください</option>
                        <option value="ジュニア">ジュニア</option>
                        <option value="ミドル">ミドル</option>
                        <option value="シニア">シニア</option>
                    </select><br><br>

                    仕事内容：<input type="text" name="job_description"><br><br>



                    '',
                    'recruitment_position',
                    'job_content',
                    'team_name',
                    'team_size',
                    'must_technology',
                    'better_technology',
                    'must_personality',
                    'better_personality',
                    'hire_number',
                    'annual_income',
                    'bonus_number',
                    'bonus_income',
                    'work_city',


                        募集役職	ジュニア、ミドル、シニア
                        仕事内容	-
                        組織	配属チーム:「部署名」
                            チーム人数:「◯◯名」
                        必須要件	技術：「・自由記載」
                            人物：「・自由記載」
                        歓迎要件	技術：「・自由記載」
                            人物：「・自由記載」
                        求人概要	採用人数「◯名」
                            年収(◯◯◯~◯◯◯万円)
                            賞与年間回数◯回、昨年実績◯◯◯万円
                            勤務地：都市名を記載

                    <input type="submit" value="送信">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
