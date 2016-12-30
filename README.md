# 网易云音乐API for Laravel5

申明：

本项目的Api代码全部参考自[metowolf/NeteaseCloudMusicApi](https://github.com/metowolf/NeteaseCloudMusicApi)
我就是把它打包成Laravel Package形式使用

## Installation

- Run `composer require tonyski/netease-cloud-music-for-laravel`

- Add `Tonyski\NCMusic\NCMusicServiceProvider::class,` to  **providers** in *config/app.php*

- Add `'NCMusic' => Tonyski\NCMusic\Facades\NCMusic::class,` to **aliases** in *config/app.php*



## Usage

Use these methods in controllers:

- `NCMusic::search('hello');           //关键字搜索`
- `NCMusic::mini()->search('hello');   //关键字搜索` 
- `NCMusic::artist('46487');           //歌手热门单曲`
- `NCMusic::detail('35847388');        //歌曲详细信息`
- `NCMusic::album('3377030');          //专辑解析`
- `NCMusic::playlist('124394335');     //歌单解析`
- `NCMusic::url('35847388');           //歌曲地址获取`
- `NCMusic::lyric('35847388');         //歌词解析`
- `NCMusic::mv('501053');              //MV解析`
