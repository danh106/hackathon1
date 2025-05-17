@extends('Layout.Layout_episode')
@section('body')
<style>
.custom-scroll::-webkit-scrollbar {
    width: 6px;
}

.custom-scroll::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 6px;
}
</style>
<div class="d-flex mt-4 align-items-start">
    <div class="container-fluid me-lg-3">
        <h3 class="fs-3 text-white py-1"><b>{{$episode->title}}</b> {!!$episode->videourl!!}</h3>
        <div class="mb-3">
            <video id="videoPlayer" class="w-100 " width="800" height="450" style="--plyr-color-main: 	#2F4F4F;" controls poster="{{$episode->thumbnail}}"></video>
        </div>
        <div class="row p-3 mb-3 overflow-auto custom-scroll" style="background: #293850;border-radius: 20px;max-height: 300px;">
            @foreach ($data->tblepisodes as $item)
            <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2 my-2 px-3">
                <a href="/episode/{{$item->alias}}/{{$item->episodeid}}" class="btn btn-primary w-100">Tập {{$item->episodenumber}}</a>
            </div>
            @endforeach
        </div>
        <div class="p-4 row mb-3 " style="background: #293850;border-radius: 20px;">
            <h3 class="ps-2 fs-4 text-white-50 mb-3"><b>Phim liên quan</b></h3>
            @foreach ($movierelation as $item)
            <div class="card col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3" style="background: none;border: none;">
                <a class="position-relative" href="/movie/{{$item->alias}}/{{$item->movieid}}">
                    <img src="{{$item->image}}" style="aspect-ratio: 9 / 12;object-fit: cover;display: block;border-radius: 10px;" class="card-img-top" alt="...">
                    <b style="left: 4px; top: 4px;" class="position-absolute badge bg-secondary">Tập {{$item->tblepisodes->count()}}/{{$item->expectedepisodes}}</b>
                </a>
                <div class="card-body px-0">
                    <a class="nav-link text-white p-0" href="/movie/{{$item->alias}}/{{$item->movieid}}">
                        <h5 class="card-title">{{$item->title}}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="flex-shrink-0 d-none d-lg-block py-3 "style="background: #293850;border-radius: 20px;width:340px;">
        <h3 class="ps-2 fs-4 text-white mb-3"><b>Phim top hay</b></h3>
        @foreach ($movierelation as $item) 
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-shrink-0 bd-highlight">
                    <a class="position-relative" href="/movie/{{$item->alias}}/{{$item->movieid}}">
                        <img class="mx-auto img-fluid" style="width: 100px;aspect-ratio: 9 / 12;object-fit: cover;display: block;border-radius: 10px;" src="{{$item->image}}" alt="...">
                    </a>    
                </div>
                <div class="p-2 w-100 bd-highlight">
                    <h3 class="ps-2 fs-5 text-white mb-0 pt-3"><b>{{$item->title}}</b></h3>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const video = document.getElementById("videoPlayer");
    const source = "/api/episode/{{$episode->episodeid}}"; // API M3U8 của bạn

    if (Hls.isSupported()) {
        const hls = new Hls({
            autoStartLoad: false,
            maxBufferLength: 60,  // Giữ tối đa 1 phút buffer (giảm từ 2-3 phút)
            maxMaxBufferLength: 90, // Giới hạn buffer tối đa 1.5 phút
            maxBufferSize: 40 * 1024 * 1024, // 40MB buffer (cân bằng giữa RAM và tốc độ)
            maxBufferHole: 0.15, // Giảm buffer hole xuống để tránh bị giật
            lowLatencyMode: true, // Giữ độ trễ thấp
            liveSyncDurationCount: 2, // Đồng bộ tốt nhưng không quá tải server
            backBufferLength: 20, // Giữ lại 20s video đã xem, không tốn RAM
            enableWorker: true, // Tối ưu hiệu suất bằng Web Worker
            debug: false, // Tắt debug để giảm tải xử lý
            progressive: true, // Hỗ trợ tua nhanh hơn
            startPosition: -1,
             // Bắt đầu từ đầu video hoặc tiếp tục từ điểm đang xem
        });

        hls.loadSource(source);
        hls.attachMedia(video);

        hls.on(Hls.Events.MANIFEST_PARSED, () => {
            // Lấy danh sách các chất lượng có sẵn
            const availableQualities = hls.levels.map((level, index) => ({
                label: level.height,
                value: index
            }));

            // availableQualities.unshift({ label: "Auto", value: -1 }); // Thêm chế độ tự động

            // Ưu tiên chọn chất lượng cao nhất nếu băng thông đủ
            hls.currentLevel = hls.levels.length - 1; 

            // Cấu hình Plyr player
            const player = new Plyr(video, {
                autoplay: false,  // Đảm bảo video không tự động chơi khi load
                preload: 'none',
                hideControls: true,
                controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen'],
                settings: ['quality', 'speed'],
                speed: { selected: 1, options: [0.5, 1, 1.5, 2] },
                quality: {
                    default: 720,
                    options: availableQualities.map(q => q.label),
                    forced: true,
                    onChange: (qualityLabel) => {
                        const selectedQuality = availableQualities.find(q => q.label === qualityLabel);
                        if (selectedQuality) {
                            hls.currentLevel = selectedQuality.value;
                            console.log("Chuyển sang chất lượng:", qualityLabel);
                        }
                    }
                }
            });

            window.player = player;
        });

        window.hls = hls;
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = source;
    }
    video.addEventListener('play', function() {
            hls.startLoad();
        });
});

</script>
@stop()
