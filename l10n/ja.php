<?php
$TRANSLATIONS = array(
"Feed contains invalid XML" => "無効なXMLを含むフィードです。",
"Feed not found: either the website does not provide a feed or blocks access. To rule out blocking, try to download the feed on your server's command line using curl: curl http://the-feed.tld" => "フィードがありません: サイトがフィードを提供していないか、アクセスをブロックしています。ブロッキングを取り除くためには、次の様にcurl コマンドをサーバー上で実行してフィードをダウンロードしてみてください: curl http://the-feed.tld",
"Detected feed format is not supported" => "検出したフィードのフォーマットはサポートされません。",
"SSL Certificate is invalid" => "無効なSSL証明書です。",
"Website not found" => "Webサイトが見つかりませんでした。",
"More redirects than allowed, aborting" => "リダイレクト数が許可数より多いです､中止します。",
"Bigger than maximum allowed size" => "最大許容サイズより大きいです。",
"Request timed out" => "リクエストがタイムアウトしました。",
"Request failed, network connection unavailable!" => "リクエストに失敗しました。ネットワーク接続が利用できません！",
"Request unauthorized. Are you logged in?" => "リクエストは認証されていません。ログインしていますか？",
"Request forbidden. Are you an admin?" => "リクエストは禁止されています。あなたは管理者でしょうか?",
"Token expired or app not enabled! Reload the page!" => "トークンもしくはアプリが無効になりました！ページを再読込してください！",
"Internal server error! Please check your " => "内部サーバーエラー! 以下をチェック:",
"Request failed, ownCloud is in currently " => "リクエストに失敗したので、ownCloudは現在",
"Can not add feed: Exists already" => "フィードを追加できません: すでに存在します",
"Articles without feed" => "フィードなし記事",
"Can not add folder: Exists already" => "フォルダーを追加できません: すでに存在します",
"Use ownCloud cron for updates" => "ownCloud cronをアップデートに使用",
"Disable this if you run a custom updater such as the Python updater included in the app" => "アプリに含まれるPython アップデータのようなカスタムアップデータを使用する場合は無効にしてください",
"Purge interval" => "パージ周期",
"Minimum amount of seconds after deleted feeds and folders are removed from the database; values below 60 seconds are ignored" => "削除されたフィードとフォルダーがデータベースから削除されるまでの秒数；60秒以下の値は無視されます",
"Maximum read count per feed" => "フィード当たりの最大閲覧数",
"Defines the maximum amount of articles that can be read per feed which won't be deleted by the cleanup job; if old articles reappear after being read, increase this value; negative values such as -1 will turn this feature off completely" => "クリーンナップジョブにより削除されないフィードごとに読むことができる記事の最大数を定義します; 既読の古い記事が再び現れた場合に、この値を増やします; -1 のような負の値は完全にこの機能をオフにします",
"Maximum redirects" => "最大リダイレクト数",
"How many redirects the feed fetcher should follow" => "フィードフェッチャーに許可するリダイレクト数",
"Maximum feed page size" => "最大フィードページサイズ",
"Maximum feed size in bytes. If the RSS/Atom page is bigger than this value, the update will be aborted" => "最大フィードサイズのバイト数。RSS/Atomページが設定値より大きい場合､更新は中止されます。",
"Feed fetcher timeout" => "フィードフェッチャーのタイムアウト",
"Maximum number of seconds to wait for an RSS or Atom feed to load; if it takes longer the update will be aborted" => "RSS / Atom フィードの読み込み待機秒数の制限;設定時間より長くかかる場合はアップデートが中止されます。",
"Explore Service URL" => "サービスURLの探索",
"If given, this service's URL will be queried for displaying the feeds in the explore feed section. To fall back to the built in explore service, leave this input empty" => "指定された場合は、このサービスのURLは探索フィードセクションでフィードを表示するために照会されます。内蔵の探索サービスへ戻すには、この項目を空欄にしてください",
"For more information check the Wiki" => "詳しい情報はWikiを確認してください",
"Saved" => "保存されました",
"Download" => "ダウンロード",
"Close" => "閉じる",
"Ajax or webcron cron mode detected! Your feeds will not be updated correctly. It is recommended to either use the operating system cron or a custom updater." => "Ajax または webcron cron モードが検出されました！フィードは正しく更新されません。オペレーティングシステムの cron か、カスタムアップデーターの使用をお勧めします。",
"How to set up the operating system cron" => "OSのcronのやり方",
"How to set up a custom updater (faster and no possible deadlock) " => "カスタムアップデーターのセットアップ方法（より高速でデッドロックしない）",
"filter" => "フィルター",
"Language" => "言語",
"Subscribe" => "購読",
"Got more awesome feeds? Share them with us!" => "すばらしいフィードは増えましたか？私たちと共有しましょう！",
"Refresh" => "同期",
"No articles available" => "記事がありません",
"No unread articles available" => "未読記事がありません",
"Open website" => "ウェブサイトを開く",
"Star article" => "スター付きの記事",
"Unstar article" => "スターなしの記事",
"Keep article unread" => "記事を未読のままにする",
"Remove keep article unread" => "記事の未読保持を解除",
"by" => "by",
"from" => "開始",
"Play audio" => "音楽を再生",
"Download video" => "動画をダウンロード",
"Download audio" => "音楽をダウンロード",
"Keyboard shortcut" => "キーボードショートカット",
"Description" => "説明",
"right" => "右",
"Jump to next article" => "次の記事へジャンプ",
"left" => "左",
"Jump to previous article" => "前の記事へジャンプ",
"Toggle star article" => "スター付きの記事を切り替え",
"Star article and jump to next one" => "記事にスターを付けて次へ",
"Toggle keep current article unread" => "現在の記事の未読を切り替え",
"Open article in new tab" => "新しいタブで記事を開く",
"Toggle expand article in compact view" => "コンパクトビューでの記事の拡張の切り替え",
"Load next feed" => "次のフィードを読み込む",
"Load previous feed" => "前のフィードを読み込む",
"Load next folder" => "次のフォルダーを読み込む",
"Load previous folder" => "前のフォルダーを読み込む",
"Scroll to active navigation entry" => "アクティブなナビゲーションエントリーにスクロール",
"Focus search field" => "検索フィールドにフォーカス",
"Mark current article's feed/folder read" => "現在の記事のフィード/フォルダーを既読にする",
"Web address" => "WEBアドレス",
"Feed exists already!" => "フィードはすでに存在します！",
"Folder" => "フォルダー",
"No folder" => "フォルダーはありません",
"New folder" => "新しいフォルダー",
"Folder name" => "フォルダー名",
"Go back" => "戻る",
"Folder exists already!" => "フォルダーはすでに存在します！",
"Advanced settings" => "詳細設定",
"Credentials" => "資格情報",
"Username" => "ユーザー名",
"Password" => "パスワード",
"New Folder" => "フォルダーを作成する",
"Create" => "作成",
"Explore" => "探索",
"Update failed more than 50 times" => "フィードの更新に50回以上失敗しました",
"Deleted feed" => "削除されたフィード",
"Undo delete feed" => "削除したフィードを元に戻す",
"Rename" => "名前の変更",
"Menu" => "メニュー",
"Unpin feed from the top" => "フィードをトップから外す",
"Pin feed to the top" => "フィードをトップに固定",
"No feed ordering" => "フィードの順序なし",
"Reversed feed ordering" => "逆のフィードの順序",
"Normal feed ordering" => "通常のフィードの順序",
"Enable full text feed fetching" => "全文取得を有効化",
"Disable full text feed fetching" => "全文取得を無効化",
"Keep updated articles as is" => "次のように更新記事を保つ",
"Mark updated articles unread" => "更新記事を未読にする",
"Rename feed" => "フィードの名前を変更",
"Delete feed" => "フィードを削除",
"Mark all articles read" => "すべて既読にする",
"Dismiss" => "閉じる",
"Collapse" => "折りたたむ",
"Deleted folder" => "削除されたフォルダー",
"Undo delete folder" => "削除したフォルダーを元に戻す",
"Rename folder" => "フォルダー名を変更",
"Delete folder" => "フォルダーを削除",
"Starred" => "共有",
"Unread articles" => "未読の記事",
"All articles" => "すべての記事",
"Settings" => "設定",
"Keyboard shortcuts" => "キーボードショートカット",
"Disable mark read through scrolling" => "スクロール時の既読マークを無効化",
"Compact view" => "コンパクト表示",
"Expand articles on key navigation" => "キーナビゲーションで記事を展開",
"Show all articles" => "すべての記事を表示",
"Reverse ordering (oldest on top)" => "逆順",
"Subscriptions (OPML)" => "RSS購読リスト (OPML)",
"Import" => "インポート",
"Export" => "エクスポート",
"Error when importing: file does not contain valid OPML" => "インポート中のエラー: ファイルは有効なOPMLを含んでいません",
"Unread/Starred Articles" => "未読/注目記事",
"Error when importing: file does not contain valid JSON" => "インポート中のエラー: ファイルは有効なJSONを含んでいません"
);
$PLURAL_FORMS = "nplurals=1; plural=0;";
