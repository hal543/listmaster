<?php require_once '../common/getData.php';?>
<?php include ( dirname(__FILE__) . '/parts/staff_add/main_header.php' ); ?>

<div class="dr-main">
    <div class="dr-main-wrapper">
    <div class="address_category">
    <form action="detail_research_result.php" method=post>
        <input type="hidden" name="check_prefecture" type="text" id="select-prefecture">
        <input type="submit" value="送信" class="ua-sub">
    </form>
    <p class="select-prefecture"></p>
				<div class="dr_cg_title">
					<p>地域から検索</p>
				</div>
				<div class="dr_cg_list">
					<ul class="dr_cg_ul">
						<li class="dr_hk_menu"><label><li><input type="checkbox" name="prefecture[]" value="n></a>
						</li>
						
						<li class="dr_th_menu">東北<span>＞</span>
							<ul class="th_second_level">
                                <label><li><input type="checkbox" name="prefecture[]" value="東北地域"　class="check">東北地域</li></label>
                                <label><li><input type="checkbox" name="prefecture[]" value="青森県"　class="check">青森県</li></label>
                                <label><li><input type="checkbox" name="prefecture[]" value="岩手県"　class="check">岩手県</li></label>
                                <label><li><input type="checkbox" name="prefecture[]" value="秋田県"　class="check">秋田県</li></label>
                                <label><li><input type="checkbox" name="prefecture[]" value="宮城県"　class="check">宮城県</li></label>
                                <label><li><input type="checkbox" name="prefecture[]" value="山形県"　class="check">山形県</li></label>
                                <label><li><input type="checkbox" name="prefecture[]" value="福島県"　class="check">福島県</li></label>

							</ul>
						</li>
						
						<li class="dr_kt_menu">関東<span>＞</span>
							<ul class="kt_second_level">
								<label><li><input type="checkbox" name="prefecture[]" value="茨城県" class="check">茨城県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="栃木県" class="check">栃木県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="群馬県" class="check">群馬県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="埼玉県" class="check">埼玉県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="千葉県" class="check">千葉県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="東京都" class="check">東京都</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="神奈川県" class="check">神奈川県</li></label>
							</ul>
						</li>
						
						<li class="dr_tb_menu">中部<span>＞</span>
							<ul class="tb_second_level">
								<label><li><input type="checkbox" name="prefecture[]" value="新潟県" class="check">新潟県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="富山県" class="check">富山県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="石川県" class="check">石川県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="福井県" class="check">福井県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="山梨県" class="check">山梨県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="長野県" class="check">長野県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="岐阜県" class="check">岐阜県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="静岡県" class="check">静岡県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="愛知県" class="check">愛知県</li></label>
							</ul>
						</li>

						<li class="dr_kk_menu">近畿<span>＞</span>
							<ul class="kk_second_level">
								<label><li><input type="checkbox" name="prefecture[]" value="三重県" class="check">三重県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="滋賀県" class="check">滋賀県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="京都府" class="check">京都府</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="大阪府" class="check">大阪府</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="兵庫県" class="check">兵庫県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="奈良県" class="check">奈良県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="和歌山県" class="check">和歌山県</li></label>
							</ul>
						</li>
						
						<li class="dr_tg_menu">中国<span>＞</span>
							<ul class="tg_second_level">
								<label><li><input type="checkbox" name="prefecture[]" value="鳥取県" class="check">鳥取県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="島根県" class="check">島根県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="岡山県" class="check">岡山県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="広島県" class="check">広島県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="山口県" class="check">山口県</li></label>
							</ul>
						</li>

						<li class="dr_sk_menu">四国<span>＞</span>
							<ul class="sk_second_level">
								<label><li><input type="checkbox" name="prefecture[]" value="徳島県" class="check">徳島県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="香川県" class="check">香川県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="愛媛県" class="check">愛媛県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="高知県" class="check">高知県</li></label>
							</ul>
						</li>
						
						<li class="dr_ks_menu">九州地方<span>＞</span>
							<ul class="ks_second_level">
								<label><li><input type="checkbox" name="prefecture[]" value="福岡県" class="check">福岡県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="佐賀県" class="check">佐賀県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="長崎県" class="check">長崎県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="熊本県" class="check">熊本県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="大分県" class="check">大分県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="宮崎県" class="check">宮崎県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="鹿児島県" class="check">鹿児島県</li></label>
								<label><li><input type="checkbox" name="prefecture[]" value="沖縄県" class="check">沖縄県</li></label>
							</ul>
						</li>
					</ul>
				</div>

                <div class="dr_cg_title">
					<p>業種から検索</p>
				</div>
				<div class="dr_cg_list">
					<ul class="dr_cg_ul">
						<li class="dr_hk_menu"><label><li><input type="checkbox" name="prefecture[]" value="/span></a>
                            <ul class="th_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">運輸・物流業界全て</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">倉庫</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">一般貨物輸送</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">海運</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">陸運</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">冷凍冷蔵車運行 </li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">空運</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">タクシー</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">鉄道</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">機械輸送</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">港湾輸送</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">バス</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">その他運輸・物流</li></label>
							</ul>   
						</li>
				
                        
						<li class="dr_th_menu">建設・建築<span>＞</span>
							<ul class="th_second_level">
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設・建築全て</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">その他電気設備工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">ゼネコン</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設資材</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">金属系建材</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">解体工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">その他建設・工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">建築設計</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">店舗デザイン</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">塗装工事・外装・エクステリア工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">電気設備工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">内装工事・床工事・フローリング工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">商業デザイン</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">インテリアデザイン</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">土木工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">通信設備工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">建具（仕切り）</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">住宅設備</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">空調設備工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">住宅・事業所向け設備</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">その他土木工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">プラント設計</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">木材系建材</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">太陽光発電</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">地質調査</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">仮設資材レンタル・リース</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">店舗・商業施設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">インテリアコーディネーター</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">配管工事・給排水設備工事・通信設備工事・ガス工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">建築塗装</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建築構造設計</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">修繕工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">駐車場・駐輪場開発</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">非破壊検査</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">住宅建築・開発</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">ビル・商業施設建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">注文型住宅建築</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">耐震工事・地盤改良工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">耐震診断</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">太陽光パネル</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">交通関連土木工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">プラント設備工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">建築意匠設計</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">造園</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">建物設備・工場設備</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">測量設計</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">造園工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">土木設計</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">窯業系建材・石材</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">大型商業施設・公共施設建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">ビル建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">商業施設企画・設計</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">樹脂系建材</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">燃料タンク工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">衛生設備工事</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">屋上緑化</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">分譲型住宅建築</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">製図</li></label>
							</ul>
						</li>
						
						<li class="dr_kt_menu">広告・制作業界<span>＞</span>
							<ul class="kt_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">広告・制作業界全て</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">デザイン</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">広告代理店</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">印刷</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">映像・CM制作</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">市場調査・リサーチ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">ノベルティ・オリジナルグッズ製作</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">コンテンツ企画・制作</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">PR</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">ゲーム・アニメーション系デザイン</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">WEBデザイン</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">広告制作</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">スタジオ・写真撮影</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">CG制作</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">インターネット広告代理店</li></label>
							</ul>
						</li>
						
						<li class="dr_tb_menu">エンタメ・娯楽<span>＞</span>
							<ul class="tb_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">エンタメ・娯楽全て</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">タレント・キャラクターグッズ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">楽器</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">企業展示会・販促イベント</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">音楽</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">イベント</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">スポーツ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">アミューズメント施設2</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">映画・アニメ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">パチンコ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">その他エンタメ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">ゴルフ場</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">映画館・劇場</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">マルチメディア</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">美術館</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">カラオケ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">占い</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">ホスト・キャバクラ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">ボウリング場</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">まんが喫茶・インターネットカフェ</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">劇団</li></label>
							</ul>
						</li>

						<li class="dr_kk_menu">不動産<span>＞</span>
							<ul class="kk_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">不動産全て</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">不動産売買・仲介</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">不動産賃貸・仲介</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">その他不動産</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">マンション・ビル管理</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">ビルメンテナンス</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">レンタルスペース</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">総合不動産（デベロッパー）</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">不動産鑑定</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">不動産管理</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">リフォーム</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">土地売買</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">マンション開発</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">駐車場</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">不動産サブリース</li></label>
							</ul>
						</li>
						
						<li class="dr_tg_menu">アウトソーシング・代行サービス<span>＞</span>
							<ul class="tg_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">アウトソーシング・代行サービス全て</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">その他業務請負</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">翻訳・通訳</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">営業代行・販売代行</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">データ入力・事務作業代行</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">税理士</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">経理代行・記帳代行・決算代行・給与計算</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">アウトソーシング業務請負</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">コールセンター・テレマーケティング</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">人事採用業務代行</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">会計士</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">社会保険労務士</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">福利厚生代行</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">弁護士</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">行政書士</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">便利業</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秘書代行・電話代行</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">テープ起こし</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">クラウドワーク環境業務請負・在宅業務支援</li></label>
							</ul>
						</li>

						<li class="dr_sk_menu">資源・素材<span>＞</span>
							<ul class="sk_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>
						
						<li class="dr_ks_menu">その他サービス業<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">飲食業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">医療・福祉業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">生活用品・嗜好品業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">製造業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">機械業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">小売・卸売業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">機械業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">自動車・輸送機器業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">レジャー・観光・宿泊<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">IT・WEB<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">コンサルティング業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">生活関連サービス業<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">アパレル・美容業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">機械関連サービス業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">商社業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">マスコミ・出版業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">食品業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">ゲーム業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">通信<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">人材業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">教育・学習業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">家電業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">金融業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">エネルギー業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">公共機関・団体・特殊法人<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

                        <li class="dr_ks_menu">その他業界<span>＞</span>
							<ul class="ks_second_level">
                            <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建設"　class="check1">建設</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="建築"　id="check1">岩手県</li></label>
                                <label><li><input type="checkbox" name="industry[]" value="土木"　id="check1">秋田県</li></label>
							</ul>
						</li>

					</ul>
				</div>
                <p id="p01"></p>
              
</div>
    </div>
<div>

<?php include ( dirname(__FILE__) . '/parts/staff_add/main_footer.php' ); ?>