# NotToDo
<img width="644" alt="スクリーンショット 2021-10-20 3 58 49" src="https://user-images.githubusercontent.com/90996828/137974024-fd8193d0-5d02-499b-9134-372ba49737f9.png">

やらないこと（Not to do）リストを作成できるwebアプリです。

## 簡単な説明

ログインすることで機能を使用することができます。

テストユーザー用ID：aiueo@gmail.com
テストユーザー用PASS: aiueoooo

フォルダーのように場所を分類してリストを管理できるので、「やるべきでないこと」「今はやるべきでないこと」のように目的に沿ったリストの作成が可能です。
また、作ったリストもタグをつけることで分類可能です。

## 機能

- 機能1　NotToDoリスト作成
- 機能2　NotToDoリスト管理
- 機能3　NotToDoリスト削除

## 必要要件

- safariで起動すると時間がかかるので、使うブラウザはchromeをお勧めします。

## 使い方

![ログイン](https://user-images.githubusercontent.com/90996828/137984786-fd2cd82b-1179-4a75-98ce-b5f75030a908.gif)

1. registerもしくはloginからサインインして、マイページに移動します。
2. 左上のCreate A New Goalから新規のフォルダー(Goal)を作成できます。
3. Addボタンで作成したら、今度は具体的に何をやらないのかを追加していきます。

![Todo作成](https://user-images.githubusercontent.com/90996828/137985302-a3e7e78b-b3b6-41b9-bcf0-ae148b14015d.gif)

4. 作成したフォルダー(Goal)の右上「+」をクリックすると、Todoを追加できるようになります。
5. Todo右上のマークを押してもらうと、「Done」「Edit」「Sort」「Delete」が選択できます。

![タグ作成](https://user-images.githubusercontent.com/90996828/137985428-c2a414a7-e299-413a-a674-da4f1c54ebcd.gif)

6. マイページ画面左上「Manage Tag」ではリストへのタグを作成できます。4で説明した「Edit」で作成したタグを追加できます。
7. ログアウトはマイページ画面右上からできます。

## 開発環境
HTML/CSS/PHP/Laravel/Vue/Bootstrap/fontawesome/cloud9

## インストール

```
$ git clone https://github.com/Na0Se/git_notodo_app.git
$ cd Notodo_app
$ sh setup.sh
$ ~do anything~
```


## その他

やらないことリストを作る前提で作成しました。
何をやらないのかをどんどんメモすることによって、無駄な時間を省くことができます。作成理由は、To DOアプリはたくさんありますが、Not To Doアプリがwebになかったからです。
正直、To Doリストと同じ作りになってしまいました。

